<?php

namespace Controllers;
use \Views\MainView;
use \Router;

class VideoController extends Controller{
   public function execute(){
      Router::router("video/?", function($param){
         $this->page = new MainView('video');
         $this->page->render(array('titulo' => 'video-single'));
      });
   }
}