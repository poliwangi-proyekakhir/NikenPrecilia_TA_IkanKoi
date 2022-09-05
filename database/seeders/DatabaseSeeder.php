<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Niken Precilia',
            'username' => 'nikenprecilia',
            'email' => 'nikenprecilia@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Type Of Koi Fish',
            'slug' => 'type-of-koi-fish',
        ]);

        Category::create([
            'name' => 'Koi Fish Food',
            'slug' => 'koi-fish-food'
        ]);

        Category::create([
            'name' => 'fish Pond and Filter',
            'slug' => 'fish-pond-and-filter'
        ]);

        Category::create([
            'name' => 'Water Management',
            'slug' => 'water-management'
        ]);

        Category::create([
            'name' => 'Koi Fish Medicine',
            'slug' => 'koi-fish-medicine'
        ]);

        Category::create([
            'name' => 'Other Articles About Koi',
            'slug' => 'other-articles-about-koi'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, quos?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nisi nam officiis deserunt veniam eum quaerat </p><p>cupiditate tempora repudiandae officia fugit sed quae omnis animi dicta distinctio nostrum doloribus ea, fugiat incidunt nesciunt! Quibusdam debitis facilis laboriosam, repudiandae ducimus aliquid!</p>'
        // ]);
    }
}
