<?php
namespace Testing\Model;

class Model
{
    public $app;

    public static function init($app)
    {
        $model = new static();
        $model->app = $app;

        return $model;
    }

    public function save()
    {
        return true;
    }

    public function delete()
    {
        return true;
    }
}
