<?php

namespace App\Http\Services\User;

use App\Models\Post;
use App\Models\User;

class UserServices
{
    public static function posts($id): array
    {
        $user = User::find($id);
        $posts = Post::where('user_id', '=', $id)->orderBy('created_at', 'desc')->paginate(10);
        return [
            'author' => $user,
            'posts' => $posts
        ];
    }
}
