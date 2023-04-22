<?php

namespace Models;

class Topic{
   private $id;
   private $topic_name;
   private $articles = [];

   public function setId($id){
      $this->id = $id;
   }
   public function getId(){
      return $this->id;
   }


   public function setTopicName($topic_name){
      $this->topic_name = $topic_name;
   }
   public function getTopicName(){
      return $this->topic_name;
   }


   public function setArticles($arr = []){
      $this->articles = $arr;
   }
   public function getArticles(){
      return $this->articles; 
   }
}