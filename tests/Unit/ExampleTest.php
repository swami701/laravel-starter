<?php

namespace Tests\Unit;

use App\Post;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     * @return void
     */
    use DatabaseTransactions;

    public function testBasicTest()
    {
        // Given
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
            'created_at' => Carbon::now()->subMonth(),
        ]);

        // When
        $posts = Post::archives();

        // Then
        $this->assertCount(2, $posts);

        self::assertEquals([
            [
                "year"      => $first->created_at->year,
                "month"     => $first->created_at->format('F'),
                "published" => 1,
            ],
            [
                "year"      => $second->created_at->year,
                "month"     => $second->created_at->format('F'),
                "published" => 1,
            ],
        ], $posts);
    }
}
