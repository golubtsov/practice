<?php

namespace App\Models;

use App\Enums\UserStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    public $fillable = [
        'fname',
        'lname',
        'email',
        'password',
        'token',
        'status'
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'status' => UserStatus::class
    ];

    public function posts()
    {
        return $this->hasMany(Post::class)->paginate(10);
    }
}
