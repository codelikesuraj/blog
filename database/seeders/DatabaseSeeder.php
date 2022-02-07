<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Post;
use \App\Models\User;
use \App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::factory()->create([
        //     'name' => 'John Doe',
        //     'email' => 'john.doe@example.com',
        // ]);
        for($i=0; $i<10; $i++):
            Post::factory(5)->create([
                'user_id' => User::factory()->create()
            ]);
        endfor;
    }
}
