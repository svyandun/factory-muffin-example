<?php
namespace Testing\Test;

use PHPUnit_Framework_TestCase;
use League\FactoryMuffin\Facade as Factory;

class TestCase extends PHPUnit_Framework_TestCase
{
    public static function setupBeforeClass()
    {
        Factory::loadFactories(__DIR__ . '/factories');
        Factory::setCustomMaker(function ($class) {
            return $class::init('application');
        });
    }

    public static function tearDownAfterClass()
    {
        Factory::deleteSaved();
    }
}
