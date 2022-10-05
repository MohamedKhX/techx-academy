<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Course;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $category = Category::factory(10)->create()->first();

        Course::factory(10)->create(['category_id' => $category->id]);

        for ($i = 1; $i <= 10; $i++) {
            Review::factory(3)->create([
                'course_id' => $i
            ]);
        }
    }
}
