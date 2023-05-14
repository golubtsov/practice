<?php

namespace Database\Seeders;

use App\Enums\Categories;
use App\Enums\UserStatus;
use App\Models\Adress;
use App\Models\Image;
use App\Models\Tur;
use Database\Factories\AdressFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        /* ========== USERS ========== */

        $users = [
            [
                'name' => 'Иван Петров',
                'email' => 'iva.jpgn@gmail.com',
                'password' => Hash::make('12345678'),
                'status' => 2
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'status' => 1
            ]
        ];

        foreach ($users as $user) {
            \App\Models\User::factory()->create($user);
        }

        $adresses = [
            [
                'city' => 'Белокуриха',
                'description' => 'Курорт Белокуриха — это отличный способ совместить отдых и лечение в уникальных природных условиях. Белокуриху без преувеличения можно назвать уникальной по своему расположению, природным условиям. ',
                'adress' => 'ул. Ползунова 122'
            ],
            [
                'city' => 'Горный Алтай',
                'description' => 'Горный Алтай привлекает своим великолепием, величием гор, природой в первозданном виде, колдовской красотой озер и шумными холодными горными водопадами. Экология здесь на высшем уровне. Воду можно пить прямо из-под крана, без кипячения. А количество солнечных дней даже больше, чем на популярных южных курортах.',
                'adress' => 'ул. Антонова 22'
            ],
            [
                'city' => 'Шерегеш',
                'description' => 'Это и недорогие и комфортные квартиры в посёлке, и гостиницы различных ценовых категорий и расположения. Есть отели буквально в шаге от трасс и подъёмников. Нет проблем с прокатами и прочими услугами.',
                'adress' => 'ул. Фрунзе 45'
            ],
        ];

        foreach ($adresses as $adress) {
            Adress::factory()->create($adress);
        }

        $turs = [
            [
                'adress_id' => 1,
                'name' => 'Аламбай Высокий',
                'description' => 'Описание тура',
                'price' => 12000
            ],
            [
                'adress_id' => 2,
                'name' => 'Высота Алтай',
                'description' => 'Описание тура',
                'price' => 15000
            ],
            [
                'adress_id' => 3,
                'name' => 'Медовый лес',
                'description' => 'Описание тура',
                'price' => 30000
            ],
            [
                'adress_id' => 3,
                'name' => 'Горячая Топка',
                'description' => 'Описание тура',
                'price' => 12000
            ],
            [
                'adress_id' => 1,
                'name' => 'Просторы Алтая',
                'description' => 'Описание тура',
                'price' => 12000
            ],
            [
                'adress_id' => 2,
                'name' => 'Хвойный лес',
                'description' => 'Описание тура',
                'price' => 12000
            ]
        ];

        foreach ($turs as $tur) {
            Tur::factory()->create($tur);
        }

        $images = [
            [
                'tur_id' => 1,
                'url' => '1.jpg'
            ],
            [
                'tur_id' => 2,
                'url' => '2.jpg'
            ],
            [
                'tur_id' => 3,
                'url' => '3.jpg'
            ],
            [
                'tur_id' => 4,
                'url' => '4.jpeg'
            ],
            [
                'tur_id' => 5,
                'url' => '5.jpg'
            ],
            [
                'tur_id' => 6,
                'url' => '6.jpg'
            ]
        ];

        foreach ($images as $image) {
            Image::factory()->create($image);
        }
    }
}
