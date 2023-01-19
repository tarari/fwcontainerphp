<?php
  namespace App;

  use App\Containers\ServiceContainer;
  use App\Services\ConfigService;
  use App\Services\DatabaseService;
  use App\Services\LoggerService;
  use App\Providers\ServiceProvider;

  class App{
    protected $container;
    
    function __construct(){
      $this->container=new ServiceContainer();
      (new ServiceProvider())->register($this->container);
     
    }
    public function run(){
      
    }
    
    function dispatch(){
      
    }
  }