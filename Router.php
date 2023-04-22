<?php


class Router{

   public static function router($path, $arg){
      $url = @$_GET['url'];
      if($url == $path){
         $arg();
         die();
      }
      $path = explode("/",$path);
      $url = explode("/",@$_GET['url']);
      $ok = true;
      $param = [];

      if(count($path) === count($url)){

         foreach($path as $key => $value){

            if($value === "?"){
               $param[$key] = $url[$key];
            } else if($url[$key] != $value){
               $ok = false;
               break;
            }

         }

         if($ok){
            $arg($param);
            die();
         }

      }

   }
}