<?php

namespace Tests\Unit;

use App\Models\Answer;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AnswerTest extends TestCase
{
    use RefreshDatabase;

    protected Answer $answer;

    protected function setUp(): void
    {
        parent::setUp();

        $this->answer = Answer::factory()->create();
    }

    /** @test */
    public function it_belongs_to_question()
    {
        $this->assertInstanceOf(Question::class, $this->answer->question);
    }

    /** @test */
    public function it_belongs_to_user()
    {
        $this->assertInstanceOf(Question::class, $this->answer->question);
    }

    /** @test */
    public function the_answers_will_be_deleted_when_the_user_deleted()
    {
        $user = User::factory()->create();

        $this->answer->user_id = $user->id;
        $this->answer->save();

        Answer::factory(4)->create(['user_id' => $user->id]);

        $user->delete();
        $this->assertDatabaseMissing('answers', ['id' =>  $this->answer->id]);
        $this->assertDatabaseCount('answers', 0);
    }

    /** @test */
    public function the_answers_will_be_deleted_when_the_question_deleted()
    {
        $question = Question::factory()->create();

        $this->answer->question_id = $question->id;
        $this->answer->save();

        Answer::factory(4)->create(['question_id' => $question->id]);

        $question->delete();
        $this->assertDatabaseMissing('answers', ['id' =>  $this->answer->id]);
        $this->assertDatabaseCount('answers', 0);
    }

    /** @test */
    public function the_answers_will_be_deleted_when_the_lesson_deleted()
    {
        $lesson = Lesson::factory()->create();
        $question = Question::factory()->create(['lesson_id' => $lesson->id]);

        $this->answer->question_id = $question->id;
        $this->answer->save();

        Answer::factory(4)->create(['question_id' => $question->id]);

        $lesson->delete();

        $this->assertDatabaseMissing('answers', ['id' =>  $this->answer->id]);
        $this->assertDatabaseCount('answers', 0);
    }

    /** @test */
    public function the_answers_will_be_deleted_when_the_course_deleted()
    {
        $course = Course::factory()->create();
        $lesson = Lesson::factory()->create(['course_id' => $course->id]);
        $question = Question::factory()->create(['lesson_id' => $lesson->id]);

        $this->answer->question_id = $question->id;
        $this->answer->save();

        Answer::factory(4)->create(['question_id' => $question->id]);

        $course->delete();

        $this->assertDatabaseMissing('answers', ['id' =>  $this->answer->id]);
        $this->assertDatabaseCount('answers', 0);
    }
}
