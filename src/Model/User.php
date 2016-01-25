<?php
namespace Project\Model;

class User
{
    public $id;
    public $username;
    public $password;
    public $customer;
    public $firstname;
    public $lastname;

    public function showName()
    {
        if (!empty($this->firstname) && !empty($this->lastname)) {
            return $this->firstname . ' ' . $this->lastname;
        } else {
            return $this->username;
        }
    }
}
