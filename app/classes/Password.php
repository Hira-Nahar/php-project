<?php

namespace App\classes;

class Password{

    public $givenLength;
    public $data = [];
    public $maxIndex;
    public $randomPassword;
    public $passwordData = [];
    public $password;
    public $i;

   
    public function __construct($data)
    {
        $this->givenLength = $data['given_length'];
    }

    public function PasswordGenerator()
    {
        $this->passwordData = ['A','a','0','@','#','%','1-9','_'];
        $this->maxIndex = count($this->passwordData)-1;
        for ($this->i=0; $this->i <$this->givenLength; $this->i++)
        {
            $this->randomPassword = rand(0,$this->maxIndex );
            $this->password .=$this->passwordData[$this->randomPassword];
        }
        return $this->password;
    }
}

