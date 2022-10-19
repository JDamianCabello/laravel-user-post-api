<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class GetPostAndUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Obtiene los post y los usuarios de la API y los almacena en la base de datos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return boolean
     */
    public function handle(): bool
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        $posts = array_slice(json_decode($response->body(), true), 0, 50);
        unset($response);

        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        $allUsers = json_decode($response->body(), true);

        //get all users that have written a post
        $usersWithPost = array_values(array_unique(array_column($posts, 'userId')));

        //save users with post
        foreach ($allUsers as &$user) {
            if (in_array($user['id'], $usersWithPost)) {
                $user['city'] = $user['address']['city'];
                User::firstOrCreate(['id' => $user['id']],$user);
            }
        }

        //save post
        foreach ($posts as &$post) {
            $post['rating'] = (str_word_count($post['title']) * 2) + str_word_count($post['body']);
            $post['user_id'] = $post['userId'];
            Post::updateOrCreate(['id' => $post['id']],$post);
        }

        return true;
    }
}
