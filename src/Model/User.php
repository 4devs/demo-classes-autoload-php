<?php

/**
 * Just a simple user like class to use in examples
 */
class User
{

    protected $firstName;
    protected $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }
    
    public function __toString()
    {
        return $this->lastName . ' ' . $this->firstName;
    }
    
    public function getFirstName() {
        return $this->firstName;
    }
    
    public function getLastName() {
        return $this->lastName;
    }

    public function setFirstName($name)
    {
        $this->firstName = $name;
    }

    public function setLastName($name)
    {
        $this->lastName = $name;
    }
    
}