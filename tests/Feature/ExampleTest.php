<?php

namespace Tests\Feature;

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
        $response = $this->get('/');
        $response->assertSee("Posts Lists!");
        $response->assertStatus(200);
    }
}
