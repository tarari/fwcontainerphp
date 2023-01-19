<?php

  namespace App\Cache;

class Cache{
  protected array $cache=[];
  function get(string $name){
    if(!isset($this->cache[$name])){
      throw new \InvalidArgumentException("Item $name not found");
    }
    return $this->cache[$name];
  }
  public function has(string $name):bool{
    return (isset($this->cache[$name]));
  }
  public function set(string $name,$value):void{
    $this->cache[$name]=$value;
  }
}