<?php

namespace Tests\Unit;

use App\Models\Lesson;
use App\Models\Note;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NoteTest extends TestCase
{
    use RefreshDatabase;

    protected Note $note;

    protected function setUp(): void
    {
        parent::setUp();

        $this->note = Note::factory()->create();
    }

    /** @test */
    public function it_belongs_to_user()
    {
        $this->assertInstanceOf(User::class, $this->note->user);
    }

    /** @test */
    public function it_belongs_to_lesson()
    {
        $this->assertInstanceOf(Lesson::class, $this->note->lesson);
    }

    /** @test */
    public function it_convert_at_field_from_seconds_to_the_proper_time()
    {
        $note = Note::factory()->create(['at' => 1200]);
        $this->assertEquals('20:00', $note->at);

        $note->at = 2401;
        $this->assertEquals('40:01', $note->at);

        $note->at = 3599;
        $this->assertEquals('59:59', $note->at);

        $note->at = 3600;
        $this->assertEquals('01:00:00', $note->at);

        $note->at = 7200;
        $this->assertEquals('02:00:00', $note->at);

        $note->at = 7201;
        $this->assertEquals('02:00:01', $note->at);

        $note->at = 7261;
        $this->assertEquals('02:01:01', $note->at);
    }
}
