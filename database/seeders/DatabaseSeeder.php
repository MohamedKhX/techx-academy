<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Level;
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

        Level::factory()->create(['name' => 'All Levels']);
        Level::factory()->create(['name' => 'Beginner']);
        Level::factory()->create(['name' => 'Intermediate']);
        Level::factory()->create(['name' => 'Expert']);

        Course::factory(10)->create(['category_id' => $category->id]);

        for ($i = 1; $i <= 10; $i++) {
            Review::factory(3)->create([
                'course_id' => $i
            ]);
        }
        for ($courses = 1; $courses <= 30; $courses++) {
            Enrollment::factory(rand(1,30))->create([
                'course_id' => $courses
            ]);
        }

    }
}
