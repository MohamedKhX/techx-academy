<?php

namespace Tests\Unit;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Note;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\TestCase;

class LessonTest extends TestCase
{
    use RefreshDatabase;

    protected Lesson $lesson;

    protected function setUp(): void
    {
        parent::setUp();

        $this->lesson = Lesson::factory()->create();
    }

    /** @test */
    public function it_belongs_to_course()
    {
        $this->assertInstanceOf(Course::class, $this->lesson->course);
    }


    /** @test */
    public function it_gets_the_proper_notes_for_specific_user()
    {
        $user = User::factory()->create();

        $note = Note::factory()->create([
            'user_id' => $user->id,
            'lesson_id' => $this->lesson->id
        ]);

        $noteTwo = Note::factory()->create([
            'user_id' => $user->id,
            'lesson_id' => $this->lesson->id
        ]);

        $noteThree = Note::factory()->create(['lesson_id' =>  $this->lesson->id]);

        $this->assertInstanceOf(Collection::class, $this->lesson->notes($user));
        $this->assertInstanceOf(Note::class, $this->lesson->notes($user)->first());

        $this->assertEquals($note->note,  $this->lesson->notes($user)->first()->note);
        $this->assertCount(2,  $this->lesson->notes($user));
    }

    /** @test */
    public function it_will_be_deleted_when_the_course_deleted()
    {
        $course = Course::factory()->create();
        $lesson = Lesson::factory()->create(['course_id' => $course->id]);

        $course->delete();
        $this->assertDatabaseMissing('lessons', ['id' => $lesson->id]);
    }
}
