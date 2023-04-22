<?php

namespace Controllers;
use \Repository\TopicsRepository;
use \Views\MainView;

class TopicController extends Controller{

   public function execute(){

      \Router::router('topic/?', function($param){
         $repository = new TopicsRepository;

         $topic = $repository->getTopicPage($param[1]);
         
         $this->page = new MainView('topic');
         $this->page->render(array('titulo' => $param[1], 'content' => $topic));
      });

   }
}