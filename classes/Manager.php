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
    }



    public function getAllDestinations(  )
    {
        //putting sql request in variable
        $id=$_GET['id'];
        $getOperator = "SELECT * FROM destinations inner  join tour_operators 
                            on destinations.id_tour_operator=tour_operators.id where name=? ";

        //prepare the request
        $getOperatorStatement = $this -> connect() -> prepare( $getOperator );
        //execute the request
        $getOperatorStatement -> execute(array($id));
        while ( $getOperatorResult = $getOperatorStatement -> fetchAll() ) {
            //return the request array
            return $getOperatorResult;
        }
}

    public function startUpdateDestinations( $id )
    {
        $startUpdateTourOperator = "SELECT * FROM destinations WHERE name = ?";
        $startUpdateTourOperatorStatement = $this -> connect() -> prepare(
            $startUpdateTourOperator );
        $startUpdateTourOperatorStatement -> execute( array( $id ) );

        return $startUpdateTourOperatorStatement -> fetch();
}

    public function getAllReviews(  )
    {
        //putting sql request in variable
        $id=$_GET['id'];
        $getOperator = "SELECT * FROM reviews inner  join tour_operators 
                            on reviews.id_tour_operator=tour_operators.id where name=? ";

        //prepare the request
        $getOperatorStatement = $this -> connect() -> prepare( $getOperator );
        //execute the request
        $getOperatorStatement -> execute(array($id));
        while ( $getOperatorResult = $getOperatorStatement -> fetchAll() ) {
            //return the request array
            return $getOperatorResult;
        }
}

}