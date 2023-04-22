<?php

namespace Repository;
use \Models\Article;
use \Config;

class ArticleRepository{
   private $conexao;

   public function __construct(){
      $this->conexao = new Config();
   }
   public function get($slug){
      $article = new Article();
      $select = "SELECT * FROM `tb_noticias` WHERE slug=:slug";

      $sql = $this->conexao->connect()->prepare($select);
      $sql->execute([
         'slug' => $slug,
      ]);

      $resultado = $sql->fetch();

      $article->setId($resultado['id']);
      $article->setTopicId($resultado['topic_id']);
      $article->setTitle($resultado['title']);
      $article->setSlug($resultado['slug']);
      $article->setCreateDate($resultado['create_date']);
      $article->setAuthorId($resultado['author_id']);
      $article->setContent($resultado['content']);
      $article->setCapa($resultado['capa']);

      return $article;
   }

   public static function getAll(){
      $select = "SELECT * FROM ";
   }
}