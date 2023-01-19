<?php
  namespace App\Services;

  class DatabaseService {
    private $pdo;
    function __construct($config){
      $config=$config->get();      
      $dsn=$config['connection'].';dbname='.$config['dbname'];
        try{
          $this->pdo=new \PDO(
            $dsn,
            $config['dbuser'],
            $config['dbpassword'],
            $config['options']
          );
        }catch(\PDOException $e){
          throw new \Exception("PDO error....");
        }
    }
    
  }