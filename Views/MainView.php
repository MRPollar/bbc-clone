<?php

namespace Views;

class MainView{
   private $view;
   private $header;
   private $footer;

   public function __construct($view,$header = "header", $footer = "footer"){
      $this->view = $view;
      $this->header = $header;
      $this->footer = $footer;
   }

   public function render($data = []){
      include("pages/templates/".$this->header.".php");
      include("pages/".$this->view.".php");
      include("pages/templates/".$this->footer.".php");
   }

}