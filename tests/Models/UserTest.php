<?php

namespace Tests\Models;

use App\Models\User;
use Illuminate\Support\Str;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_generates_a_unique_share_code()
    {
        // Create a user
        $user = User::factory()->create();

        // Mocking the Str facade to return a known value
        Str::shouldReceive('random')->andReturn('uniquecode');

        // Call the generateShareCode method
        $shareCode = $user->generateShareCode();

        // Assert that the share code is generated and saved
        $this->assertEquals('uniquecode', $shareCode);
        $this->assertEquals('uniquecode', $user->share_code);
    }
}
