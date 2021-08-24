<?php

declare(strict_types=1);

namespace Database\Seeders;

use Domain\Blogging\Models\Post;
use Domain\Shared\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
//        if (app()->environment('local')) {
//            $this->call(
//                class: DefaultUserSeeder::class,
//            );
//        }
        Post::factory(20)->for(
            User::factory()->create([
                'first_name' => 'Steve',
                'last_name' => 'McDougall',
                'email' => 'juststevemcd@gmail.com',
            ])
        )->create();
    }
}
