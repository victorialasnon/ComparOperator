<?php

class Manager
{
// Instance de PDO
private $db;

//db method constructor
public function __construct( PDO $db )
{
$this -> db = $db;
}

//cette methode prend en param un objet tout operator
public function createTourOperator( TourOperator $tourOperator )
{
//requete to insert data in table
$requete = $this -> db -> prepare( 'INSERT INTO tour_operators(name, grade,link,is_premium) VALUES (:name, :grade, :link, :is_premium)' );
//bind value to data
$requete -> bindValue( ':name' , $tourOperator -> getName() );
$requete -> bindValue( ':grade' , $tourOperator -> getGrade() );
$requete -> bindValue( ':link' , $tourOperator -> getLink() );
$requete -> bindValue( ':is_premium' , $tourOperator -> getIsPremium() );

//execute request
$requete -> execute();
}


}