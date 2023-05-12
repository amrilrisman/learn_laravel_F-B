<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Category::factory(3)->create();
        Category::create(['name' => "Programing Android", "slug" => "programing-android",],);
        Category::create(['name' => "Flutter", "slug" => "flutter",],);
        Category::create(['name' => "UI-UX", "slug" => "ui-ux",],);
        Category::create(['name' => "Website Developer", "slug" => "website-developer",],);
        Category::create(['name' => "Laravel Framework", "slug" => "laravel-framework",],);
        Blog::factory(10)->create();
        User::factory(5)->create();
    }
}
