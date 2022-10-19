<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class UserApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(): JsonResponse
    {
        $response = User::with('posts:id,user_id,body,title')
            ->withAvg('posts','rating')
            ->orderByDesc('posts_avg_rating')
            ->get();

        return response()->json($response);
    }
}
