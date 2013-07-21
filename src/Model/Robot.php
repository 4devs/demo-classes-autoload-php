<?php

namespace Model;

class Robot
{
    protected $name;
    protected $vocabulary = array();
    
    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function extendVocabulary($phraze)
    {
        $this->vocabulary[] = $phraze;
    }
    
    public function saySomething() {
        if (!empty($this->vocabulary)) {
            $index = rand(0, count($this->vocabulary) - 1);
            return $this->vocabulary[$index];
        }
        
        return 'What?';
    }
    
}