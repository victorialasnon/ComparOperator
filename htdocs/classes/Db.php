<?php
class Db{
    public function connect(){

        //connection à la base de donnée

        try {
            $db = new PDO( " mysql:host=localhost;dbname=ComparOperator",'root',
                '');
            $db -> setAttribute( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );
            echo "Successful Connexion";
            return $db;
        } catch (PDOException $e) {
            echo "Connection Failed : " . $e -> getMessage();


        }
    }
}

