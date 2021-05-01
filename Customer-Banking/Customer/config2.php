<?php

class pdoconnection{

  public $conection;

    public function conn(){
      
      $dsn = "mysql:host=localhost;
      dbname=bank;
      charset=utf8mb4";
      $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
      ];

        $pdo = new PDO($dsn, "root", "", $options);

        


          
      $dsn = "mysql:host=localhost;dbname=bank;charset=utf8mb4";
      $options = [
          PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
        ];
      $pdo = new PDO($dsn, "root", "", $options);

        $this->connection=$pdo;

      return $this->connection;

     }


  }
   
?>























