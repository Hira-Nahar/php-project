<?php

namespace App\classes;

class User{
    private $data = [];

    public function getAllUser()
    {
        $this->data = [
            0 => [
                'id'      => 1,
                'name'    => 'Hira Nahar',
                'email'   => 'hira@gmail.com',
                'password'=> '123456',
            ],
            1 => [
                'id'   => 2,
                'name' => 'Motiur Rahman',
                'email'=> 'moti@gmail.com',
                'password'=> '123456',
            ],
            2 => [
                'id'   => 3,
                'name' => 'Habibur Rahman',
                'email'=> 'habib@gmail.com',
                'password'=> '123456',
            ],
        ];
        return $this->data;
    }
}