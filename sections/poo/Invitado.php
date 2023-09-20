<?php

require_once 'Persona.php';


class Invitado extends Persona {
    

    public function __construct($nombre,$edad)
    {   
        parent:: __construct($nombre,$edad);

    }


}