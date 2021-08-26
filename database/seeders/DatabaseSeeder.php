<?php

declare(strict_types=1);

namespace Database\Seeders;

use Domain\Shared\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
//        if (app()->environment('local')) {
//            $this->call(
//                class: DefaultUserSeeder::class,
//            );
//        }
        User::create([
            'first_name' => 'Steve',
            'last_name' => 'McDougall',
            'email' => 'juststevemcd@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
