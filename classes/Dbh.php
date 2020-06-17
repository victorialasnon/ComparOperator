<?php


class Dbh
{
    private string $host = "127.0.0.1";
    private string $user = "root";
    private string $pwd = "";
    private string $dbName = "ComparOperator";

    public function connect()
    {
        $dsn = 'mysql:host=' . $this -> host . ';dbname=' . $this -> dbName;
        $pdo = new PDO( $dsn , $this -> user , $this -> pwd );
        $pdo -> setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC);
        return $pdo;
    }
}