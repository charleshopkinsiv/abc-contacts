<?php


namespace Abc\var;

use PDO;

class Db 
{

    private PDO $dbh;

    public function __construct(
        private string $dbhost = "",
        private string $dbname = "",
        private string $dbuser = "",
        private string $dbpass = ""
    )
    {

        $dsn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname;
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
    
            $this->dbh = new PDO($dsn, $this->dbuser, $this->dbpass, $options);
        } 
        catch(\PDOException $e){
            
            throw $e;
        }
    }

    public function query($sql)
    {
     
        $this->stmt = $this->dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
        return $this;
    }

    public function execute()
    {

        $this->stmt->execute();
    }

    public function resultSet()
    {

        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {

        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);
    }

    public function lastId() 
    {
     
        return $this->dbh->lastInsertId();
    }
}