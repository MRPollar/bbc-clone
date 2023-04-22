<?php

namespace Controllers;
use \Views\MainView;
use \Repository\ArticleRepository;

class ArticleController extends Controller{
   public function execute(){

      \Router::router('article/?',function($param){

         $articleRepository = new ArticleRepository();

         $article = $articleRepository->get($param[1]);

         $this->page = new MainView('article');
         $this->page->render(array('titulo' => $article->getTitle(), 'data' => $article));
      });

   }


}