<?php
namespace Testing\Test;

use League\FactoryMuffin\Facade as Factory;

class UserTest extends TestCase
{
    public $user;

    public function setUp()
    {
        $this->user = Factory::create('Testing\Model\User');
    }

    public function testItIsTheRightClass()
    {
        $this->assertInstanceOf('Testing\Model\User', $this->user);
    }

    public function testItHasAppProperty()
    {
        $this->assertEquals('application', $this->user->app);
    }
}
