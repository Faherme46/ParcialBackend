<?php

class Persona
{
   
    private $edad;
  

    public function __construct($edad)
    {
        
        $this ->edad = $edad;

    }

    /**
     * Get the value of nombre
     */ 
  

    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }
}