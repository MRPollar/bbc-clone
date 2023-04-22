<?php

namespace Controllers;
use \Repository\HomeRepository;
use \Views\MainView;
class HomeController extends Controller{

   public function __construct(){
      $this->page = new MainView('home');
   }

   public function execute(){
      $homeRepository = new HomeRepository();

      $topics = $homeRepository->getAll();
      $articles = $homeRepository->getAllArticles();

      $this->page->render(array('titulo' => 'home', 'topics' => $topics, 'articles' => $articles));
   }

}