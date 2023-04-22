<?php 


define("INCLUDE_STATIC_PATH", 'http://localhost/projeto-noticias/Views/pages/');
define("INCLUDE_PATH", 'http://localhost/projeto-noticias/');
class Application{
   public function init(){
      $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
      $url = ucfirst($url);
      $url.='Controller';
      if(file_exists('Controllers/'.$url.".php")){
         $className = "Controllers\\".$url;
         $className = new $className();
         $className->execute();
      } else {
         die("Controlador inexistente");
      }
   }
}