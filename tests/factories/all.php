<?php
use League\FactoryMuffin\Facade as Factory;

Factory::define('Testing\Model\User', [
    'email' => 'email'
]);

Factory::define('Testing\Model\Post', [
    'title' => 'sentence',
    'body' => 'text',
    'user_id' => 'factory|Testing\Model\User'
]);
