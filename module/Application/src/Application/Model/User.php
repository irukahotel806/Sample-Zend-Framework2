<?php

namespace Application\Model;

class User
{
    public $id;
    public $name;
    public $email;

    public function exchangeArray($data)
    {
        $this->id             = (isset($data['id'])) ? $data['id'] : 0;
        $this->name           = (isset($data['name'])) ? $data['name'] : '';
        $this->email          = (isset($data['email'])) ? $data['email'] : '';
    }
}


