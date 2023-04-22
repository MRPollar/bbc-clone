<?php

namespace Repository;
use \Models\Topic;
use \Models\Article;
use \Config;
class HomeRepository{
   private $conexao;

   public function __construct(){
      $this->conexao = new Config();
   }

   public function getAll(){

      $select = "SELECT * FROM `tb_topics`";
      $sql = $this->conexao->connect()->prepare($select);
      $sql->execute();

      $datas = [];

      foreach($sql->fetchAll() as $value){
         $topics = new Topic();
         $topics->setId($value['id']);
         $topics->setTopicName($value['topic_name']);
         $topics->setArticles($this->articlesTopic($value['id'],$this->conexao));

         $datas[] = $topics;
      }

      return $datas;

   }

   private function articlesTopic($param, $conexao){

      $select = "SELECT * FROM `tb_noticias` WHERE topic_id=:id";

      $sql = $conexao->connect()->prepare($select);
      $sql->execute([
         'id' => $param,   
      ]);

      $articles = [];

      foreach($sql->fetchAll() as $value){
         $article = new Article();
         $article->setId($value['id']);
         $article->setTopicId($value['topic_id']);
         $article->setTitle($value['title']);
         $article->setSlug($value['slug']);
         $article->setCreateDate($value['create_date']);
         $article->setContent($value['content']);
         $article->setAuthorId($value['author_id']);
         $article->setCapa($value['capa']);

         $articles[] = $article;
      }

      return array_reverse($articles);

   }

   public function getAllArticles(){
      $select = "SELECT * FROM `tb_noticias`";

      $sql = $this->conexao->connect()->prepare($select);
      $sql->execute();

      $articles = [];

      foreach($sql->fetchAll() as $value){
         $article = new Article();
         $article->setId($value['id']);
         $article->setTopicId($value['topic_id']);
         $article->setTitle($value['title']);
         $article->setSlug($value['slug']);
         $article->setCreateDate($value['create_date']);
         $article->setContent($value['content']);
         $article->setAuthorId($value['author_id']);
         $article->setCapa($value['capa']);

         $articles[] = $article;
      }

      return array_reverse($articles);
   }


}