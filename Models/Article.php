<?php

namespace Models;

class Article {

   private $id;
   private $topic_id;
   private $title;
   private $slug;
   private $create_date;
   private $content;
   private $author_id;
   private $capa;

   public function setId($id){
      $this->id = $id;
   }
   public function getId(){
      return $this->id;
   }


   public function setTopicId($id){
      $this->topic_id = $id;
   }
   public function getTopicId(){
      return $this->topic_id;
   }


   public function setTitle($title){
      $this->title = $title;
   }
   public function getTitle(){
      return $this->title;
   }


   public function setSlug($slug){
      $this->slug = $slug;
   }
   public function getSlug(){
      return $this->slug;
   }


   public function setCreateDate($date){
      $this->create_date = $date;
   }
   public function getCreateDate(){
      return $this->create_date;
   }


   public function setContent($content){
      $this->content = $content;
   }
   public function getContent(){
      return $this->content;
   }


   public function setAuthorId($id){
      $this->author_id = $id;
   }
   public function getAuthorId(){
      return $this->author_id;
   }

   public function setCapa($img){
      $this->capa = $img;
   }

   public function getCapa(){
      return $this->capa;
   }


}