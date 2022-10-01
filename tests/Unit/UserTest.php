<?php

namespace Tests\Unit;

use App\Models\Instructor;
use App\Models\Profile;
use App\Models\Review;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    protected User $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
    }

    /** @test */
    public function it_has_an_instructor_if_the_user_is_an_instructor()
    {
        $instructor = Instructor::factory()->create(['user_id' => $this->user->id]);

        $this->assertInstanceOf(Instructor::class, $this->user->instructor);
    }

    /** @test */
    public function it_does_not_has_an_instructor_if_the_user_is_not_an_instructor()
    {
        $this->assertNull($this->user->instructor);
    }

    /** @test */
    public function it_has_a_profile()
    {
        Profile::factory()->create(['user_id' => $this->user->id]);
        $this->assertInstanceOf(Profile::class, $this->user->profile);
    }

    /** @test */
    public function it_has_reviews()
    {
        Review::factory()->create(['user_id' => $this->user->id]);

        $this->assertInstanceOf(Collection::class, $this->user->reviews);
        $this->assertInstanceOf(Review::class, $this->user->reviews->first());
    }
}
