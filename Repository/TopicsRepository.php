<?php

namespace Repository;
use \Config;
use \Models\Topic;
use \Models\Article;

class TopicsRepository{
   private $conexao;

   public function __construct(){
      $this->conexao = new Config();
   }

   public function getTopicPage($param){

      switch($param){
         case 'ciencia':
            $param = 'ciência';
            break;
         case 'saude':
            $param = 'saúde';
            break;
         case 'videos':
            $param = 'vídeos';
            break;
      }

      $select = "SELECT * FROM `tb_topics` WHERE topic_name=:name";
      $sql = $this->conexao->connect()->prepare($select);
      $sql->execute([
         'name' => $param,
      ]);

      $resultado = $sql->fetch();

      $topic = new Topic();
      $topic->setId($resultado['id']);
      $topic->setTopicName($resultado['topic_name']);
      $topic->setArticles($this->getArticles($resultado['id'],$this->conexao));

      return $topic;
   }

   private function getArticles($id,$conexao){
      $select = "SELECT * FROM `tb_noticias` WHERE topic_id=:id";
      $sql = $conexao->connect()->prepare($select);
      $sql->execute([
         'id' => $id,   
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


}