<?php

namespace Tests\Unit;

use App\Models\Answer;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\TestCase;

class QuestionTest extends TestCase
{
    use RefreshDatabase;

    protected Question $question;

    protected function setUp(): void
    {
        parent::setUp();

        $this->question = Question::factory()->create();
    }

    /** @test */
    public function it_belongs_to_a_user()
    {
        $this->assertInstanceOf(User::class, $this->question->user);
    }

    /** @test */
    public function it_belongs_to_a_lesson()
    {
        $this->assertInstanceOf(Lesson::class, $this->question->lesson);
    }

    /** @test */
    public function it_has_answers()
    {
        Answer::factory(3)->create(['question_id' => $this->question->id])->first();

        $this->assertInstanceOf(Collection::class, $this->question->answers);
        $this->assertInstanceOf(Answer::class, $this->question->answers->first());
    }

    /** @test */
    public function the_questions_will_be_deleted_when_the_user_deleted()
    {
        $user = User::factory()->create();

        $this->question->user_id = $user->id;
        $this->question->save();

        Question::factory(4)->create(['user_id' => $user->id]);

        $user->delete();
        $this->assertDatabaseMissing('questions', ['id' =>  $this->question->id]);
        $this->assertDatabaseCount('questions', 0);

    }

    /** @test */
    public function the_questions_will_be_deleted_when_the_lesson_deleted()
    {
        $lesson = Lesson::factory()->create();

        $this->question->lesson_id = $lesson->id;
        $this->question->save();

        Question::factory(4)->create(['lesson_id' => $lesson->id]);

        $lesson->delete();
        $this->assertDatabaseMissing('questions', ['id' =>  $this->question->id]);
        $this->assertDatabaseCount('questions', 0);
    }

    /** @test */
    public function the_questions_will_be_deleted_when_the_course_deleted()
    {
        $course = Course::factory()->create();
        $lesson = Lesson::factory()->create(['course_id' => $course->id]);

        $this->question->lesson_id = $lesson->id;
        $this->question->save();

        Question::factory(4)->create(['lesson_id' => $lesson->id]);

        $course->delete();
        $this->assertDatabaseMissing('questions', ['id' =>  $this->question->id]);
        $this->assertDatabaseCount('questions', 0);
    }
}
