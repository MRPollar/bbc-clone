<?php

class Config{
   private $conf = 'mysql:host=localhost;dbname=BBC_clone';
   private $user = 'root';
   private $pass = '';

   private $conexao;

   public function __construct(){
      $this->conexao = new PDO($this->conf, $this->user, $this->pass);
   }

   public function connect(){
      return $this->conexao;
   }
}