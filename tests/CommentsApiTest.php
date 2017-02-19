<?php


use App\Comment;
use Illuminate\Support\Facades\Artisan;

class CommentsApiTest extends TestCase
{

    public function setUp(){
        parent::setUp();
        Artisan::call('migrate');
}
    public function testGetComments(){
        $comment = factory(Comment::class)->create([]);
        $this->assertEquals(1, Comment::count());

    }
}
