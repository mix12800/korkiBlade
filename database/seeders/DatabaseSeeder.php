<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $users = [
            [
                'fio' => 'Admin',
                'phone' => '+7(999)999-99-99',
                'email' => 'admin@email.com',
                'role' => 'admin',
                'login' => 'Admin',
                'password' => 'KorokNET',
            ],
            // [
            //     'fio' => 'Иванов Иван Иванович',
            //     'phone' => '+7(999)999-99-99',
            //     'email' => 'Ivan@email.com',
            //     'login' => 'ivan',
            //     'password' => 'ivan',
            // ],
        ];

        $sourse = [
            "Шахматы",
            "Шашки",
            "Го",
            "Карточные игры",
            "Настольный теннис",
            "Баскетбол",
            "Волейбол",
            "Художественная гимнастика",
            "Рисование акварелью",
            "Рисование маслом",
            "Лепка из глины",
            "Бисероплетение",
            "Вышивание",
            "Вязание",
            "Бадминтон",
            "Йога",
            "Плавание",
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        foreach ($sourse as $value) {
            Course::create([
                'name' => $value,
            ]);
        }
    }
}
