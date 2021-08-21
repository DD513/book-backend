<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase; //要改用這個
use App\Models\Post;

class GetBookTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api/book');
        $response->assertStatus(200);
    }
}
