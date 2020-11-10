<?php
/**
 * PDO Database Class
 * Connect to database
 * Create prepared statements
 * Bind values
 * Return rows and results
 */

 class Database {
     private $host = DB_HOST;
     private $user = DB_USER;
     private $pass = DB_PASS;
     private $dbname = DB_NAME;

     private $dbh;
     private $stmt;
     private $error;

     public function __construct() {
         $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
         $options = array(
           PDO::ATTR_PERSISTENT => true,
           PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION 
         );

         // Create a PDO instance
         try {
             $this->dbh = new PDO($dsn, $this->user, $this->pass, $options); 
         } catch (PDOException $ex) {
            $this->error = $ex->getMessage();
            echo $this->error;
        }
     }
 }