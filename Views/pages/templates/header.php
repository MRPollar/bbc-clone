<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <title><?php echo ucfirst($data['titulo'])?> - BBC News Brasil</title>
      <link rel="icon" type="image/x-icon" href="<?php echo INCLUDE_STATIC_PATH?>imgs/bbc.ico"/>
      <link rel="stylesheet" href="<?php echo INCLUDE_STATIC_PATH?>css/style.css"/>
   </head>
   <body>
      <header>
         <div class="logo">
            <div class="center">
               <a href="<?php echo INCLUDE_PATH?>">
                  <img src="<?php echo INCLUDE_STATIC_PATH?>imgs/logo.png"/>
               </a>
            </div>
         </div>
         <nav class="navbar-container center">
            <button class="btn-menu"></button>
            <ul class="nav-desktop">
               <li>
                  <a class="<?php echo $data['titulo'] === "home" ? 'active': ''?>" href="<?php echo INCLUDE_PATH?>">Notícias</a>
               </li>
               <li>
                  <a class="<?php echo $data['titulo'] === "brasil" ? 'active': ''?>" href="<?php echo INCLUDE_PATH?>topic/brasil">Brasil</a>
               </li>
               <li>
                  <a class="<?php echo $data['titulo'] === "internacional" ? 'active': ''?>" href="<?php echo INCLUDE_PATH?>topic/internacional">Internacional</a>
               </li>
               <li>
                  <a class="<?php echo $data['titulo'] === "economia" ? 'active': ''?>" href="<?php echo INCLUDE_PATH?>topic/economia">Economia</a>
               </li>
               <li>
                  <a class="<?php echo $data['titulo'] === "saúde" ? 'active': ''?>" href="<?php echo INCLUDE_PATH?>topic/saude">Saúde</a>
               </li>
               <li>
                  <a class="<?php echo $data['titulo'] === "ciência" ? 'active': ''?>" href="<?php echo INCLUDE_PATH?>topic/ciencia">Ciência</a>
               </li>
               <li>
                  <a class="<?php echo $data['titulo'] === "tecnologia" ? 'active': ''?>" href="<?php echo INCLUDE_PATH?>topic/tecnologia">Tecnologia</a>
               </li>
               <li>
                  <a class="<?php echo $data['titulo'] === "vídeos" ? 'active': ''?>" href="<?php echo INCLUDE_PATH?>topic/videos">Vídeos</a>
               </li>
            </ul>
         </nav>
      </header>
