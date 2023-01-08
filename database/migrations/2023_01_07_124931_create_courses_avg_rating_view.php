<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        \Illuminate\Support\Facades\DB::statement($this->dropView());
        \Illuminate\Support\Facades\DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        \Illuminate\Support\Facades\DB::statement($this->dropView());
    }

    public function createView(): string
    {
        return "
               CREATE VIEW rating_avg_courses as
                  select title,
                         courses.id as course_id,
                         courses.level_id as course_level_id,
                         courses.category_id as courses_category_id,
                         courses.is_free as course_is_free,
                    round(avg(rating), 1) as rating
                        from courses
                    inner join reviews on courses.id = reviews.course_id
                    group by title, course_id
                    order by rating DESC
        ";
    }

    public function dropView(): string
    {
        return "DROP VIEW IF EXISTS `rating_avg_courses`";
    }
};
