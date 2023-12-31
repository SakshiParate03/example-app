<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
require(__DIR__.'/../../practicals/song.php');
use practicals\Song;

class SongsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
   
    /**
     * A basic feature test songs.
     */
    public function testSongsOk(): void
    {
        $response = $this->get('/songs');

        $response->assertStatus(200);
    }
}
