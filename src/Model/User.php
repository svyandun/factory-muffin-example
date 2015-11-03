<?php
namespace Testing\Model;

class User extends Model
{
    public function save()
    {
        $this->id = 1;

        return parent::save();
    }
}
