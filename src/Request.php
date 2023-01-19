<?php

  namespace App;

  class Request{
    private $uri;
    protected $method;
    protected $params;
    protected $controller;
    protected $action;

    function __construct(){
      $this->uri=$_SERVER['REQUEST_URI'];
    }
    function getMethod($)
  }