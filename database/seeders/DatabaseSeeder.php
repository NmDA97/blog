<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Nadun madhuka'
        ]);

        // $category = Category::factory()->create([
        //     'name' => 'personal'
        // ]);
        Post::factory(5)->create([
            'user_id' => $user->id
            // 'category_id' => $category->id
        ]);
    }
}
