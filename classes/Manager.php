<?php

class Manager extends Dbh
{
    public function getAllOperator()
    {
        //putting sql request in variable
        $getOperator = "SELECT * FROM tour_operators";

        //prepare the request
        $getOperatorStatement = $this -> connect() -> prepare( $getOperator );
        //execute the request
        $getOperatorStatement -> execute();
        while ( $getOperatorResult = $getOperatorStatement -> fetchAll() ) {
            //return the request array
            return $getOperatorResult;
        }
    }

    public function createTourOperator( $name , $grade , $link ,
                                        $is_premium )
    {
        $createTourOperator = " INSERT INTO tour_operators(name,grade,link,is_premium)
                                VALUES (?,?,?,?)";
        $createTourOperatorStatement = $this -> connect() -> prepare( $createTourOperator );
        $createTourOperatorStatement -> execute( array( $name , $grade , $link ,
            $is_premium ) );

    }

    public function startUpdateTourOperator( $id )
    {
        $startUpdateTourOperator = "SELECT * FROM tour_operators WHERE id = ?";
        $startUpdateTourOperatorStatement = $this -> connect() -> prepare(
            $startUpdateTourOperator );
        $startUpdateTourOperatorStatement -> execute( array( $id ) );

        return $startUpdateTourOperatorStatement -> fetch();
    }

    public function updateTourOperator( $name , $grade , $link , $is_premium , $id )
    {
        $updateTourOperator = "UPDATE tour_operators SET tour_operators.name = ?, grade= ?,link = ?, is_premium= ? WHERE id= ?";
        $updateTourOperatorStatement = $this -> connect() -> prepare( $updateTourOperator );
        $updateTourOperatorStatement -> execute( array( $name , $grade , $link ,
            $is_premium , $id ) );

    }

    public function deleteTourOperator( $id )
    {
        $deleteTourOperator = "DELETE FROM tour_operators WHERE id= ?";
        $deleteTourOperatorStatement = $this -> connect() -> prepare( $deleteTourOperator );
        $deleteTourOperatorStatement -> execute( array( $id ) );

        return $deleteTourOperatorStatement -> fetch();
    }

    public function createDestination()
    {

    }

    public function getAllDestinations( $id )
    {
        $getAllDestinations = "SELECT destinations.location,destinations.days,destinations.price,tour_operators.name 
                                FROM destinations 
                                inner join  tour_operators on
                                 destinations.id_tour_operator=tour_operators.id 
                                 where  id_tour_operator=? ";

        //prepare the request
        $getAllDestinationsStatement = $this -> connect() -> prepare( $getAllDestinations );
        //execute the request
       echo $getAllDestinationsStatement -> execute($id);
        while ( $getDestinationResult = $getAllDestinationsStatement -> fetch()
        ) {
            //return the request array
            return $getDestinationResult;
        }
    }

    public function getOperatorByDestination()
    {

    }

    public function userCreateReview()
    {

    }

    public function getReviewByOperatorId()
    {

    }

}