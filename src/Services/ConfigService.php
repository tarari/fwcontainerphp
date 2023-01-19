<?php

  namespace App\Services;

  class ConfigService{
    private $config;
    function __construct(){
      $this->config=require APP.'/config.php';
     
    }
    function get(){
      return $this->config;
    }
  }