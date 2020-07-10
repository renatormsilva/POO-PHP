<?php

namespace Source\Qualifield;

class User
{
    private $firstName;
    private $lastName;
    private $email;

    //

    public function getFistName()
    {
        return $this->firstName;
    }
    
    //

    public function setFirstName($firstName)
    {
        return $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);

    }

    public function getLastNanme()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        return $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
         $this->email = $email;

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }

    }
}







?>
