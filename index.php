<?php
  define('APP',__DIR__);

  require_once __DIR__.'/vendor/autoload.php';
  
  use App\App;
  
  $app=new App();

  $app->run();

