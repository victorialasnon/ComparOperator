<?php


class Dbh
{
    private $host = "127.0.0.1";
    private $user = "root";
    private $pwd = " ";
    private $dbName = "ComparOperator";

    public function connect()
    {
        $dsn = 'mysql:host=' . $this -> host . ';dbname=' . $this -> dbName;
        $pdo = new PDO( $dsn , $this -> user , $this -> pwd );
        $pdo -> setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC,PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION  );
        return $pdo;
    }
}