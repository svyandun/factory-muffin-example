<?php
namespace Testing\Test;

use League\FactoryMuffin\Facade as Factory;

class PostTest extends TestCase
{
    public $post;

    public function setUp()
    {
        $this->post = Factory::create('Testing\Model\Post');
    }

    public function testItIsTheRightClass()
    {
        $this->assertInstanceOf('Testing\Model\Post', $this->post);
    }

    public function testItHasAppProperty()
    {
        $this->assertEquals('application', $this->post->app);
    }

    public function testItHasAUser()
    {
        $this->assertEquals(1, $this->post->user_id);
    }
}
