<?php

namespace Database\Seeders;

use App\Enums\Categories;
use App\Enums\UserStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        /* ========== USERS ========== */

        $users = [
            [
                'fname' => 'Майкл',
                'lname' => 'Смит',
                'email' => 'smit@gmail.com',
                'password' => Hash::make('12345678'),
                'token' => '',
                'status' => UserStatus::User
            ],
            [
                'fname' => 'Admin',
                'lname' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'token' => '',
                'status' => UserStatus::Admin
            ]
        ];

        foreach ($users as $user) {
            \App\Models\User::factory()->create($user);
        }

        /* ========== POSTS ========== */

        \App\Models\Post::factory(10)->create();

        /* ========== CATEGORYIES ========== */

        $categories = [
            [
                'name' => Categories::Experience,
                'url' => Categories::ExperienceURL,
            ],
            [
                'name' => Categories::Projects,
                'url' => Categories::ProjectsURL,
            ],
            [
                'name' => Categories::Frontend,
                'url' => Categories::FrontendURL,
            ],
            [
                'name' => Categories::Backend,
                'url' => Categories::BackendURL,
            ],
            [
                'name' => Categories::Big_Data,
                'url' => Categories::Big_DataURL,
            ],
            [
                'name' => Categories::Junior,
                'url' => Categories::JuniorURL,
            ]
        ];

        foreach ($categories as $category) {
            \App\Models\Category::factory()->create($category);
        }

        /* ========== CATEGORY_POST ========== */

        \App\Models\CategoryPost::factory(10)->create();
    }
}
