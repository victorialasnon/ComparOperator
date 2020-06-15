<?php

class Manager
{
    private $db; // Instance de PDO

    //db method constructor
    public function __construct( $db )
    {
        $this -> setDb( $db );
    }

    public function setDb( PDO $db )
    {
        $this -> db = $db;
    }



}