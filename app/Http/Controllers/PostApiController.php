<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class PostApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function find($id): JsonResponse
    {
        try
        {
            $response = Post::with('user:id,name')->findOrFail($id);
        }
        catch(ModelNotFoundException $ex)
        {
            abort(404);
        }

        return response()->json($response);
    }

    public function topPost(): JsonResponse
    {

        $query= Post::with('user:id,name')
            ->groupBy('user_id')
            ->select('id', 'user_id', 'title', 'body',  DB::raw('MAX(rating) as rating'))->get();

        return response()->json($query);
    }
}
