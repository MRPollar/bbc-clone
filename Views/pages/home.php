<section class="noticia-destaque">
   <a href="<?php echo INCLUDE_PATH?>article/<?php echo $data['articles'][0]->getSlug()?>" class="center">
      <div class="destaque-img destaque">
         <img src="<?php echo INCLUDE_STATIC_PATH.'imgs/'.$data['articles'][0]->getCapa()?>" alt="<?php echo $data['articles'][0]->getTitle()?>"/>
      </div>
      <div class="destaque-text destaque">
         <h2><?php echo $data['articles'][0]->getTitle()?></h2>
         <p class="text-info">
            <?php echo substr($data['articles'][0]->getContent(), 0, 100)?>...
         </p>
         <p class="post-time">Há 50 minutos</p>
      </div>
   </a>
</section>

<section class="ultimas-noticias">
   <div class="center">
      
      <?php foreach($data['articles'] as $key => $value):?>
         <?php if($key >= 8)break;?>
         <a href="<?php echo INCLUDE_PATH.'article/'.$value->getSlug()?>" class="noticia-single">
            <div class="noticia-single_img">

               <img src="<?php echo INCLUDE_STATIC_PATH.'imgs/'.$value->getCapa()?>"/>

            </div>
            <div class="noticia-single_text">
               <h3><?php echo $value->getTitle()?></h3>
               <p class="noticia-single_text_content">Segundo estudiosos do tema, é impossível apontar uma causa unificada para os atos...</p>
               <p><?php echo $value->getCreateDate()?></p>
            </div>
         </a><!--notica-single-->
      <?php endforeach;?>
   
   </div>
</section>

<?php foreach($data['topics'] as $value):?>
<?php if(count($value->getArticles()) > 0):?>
<section class="noticias">
   <div class="center">
      <div class="topic">
         <a href="<?php echo INCLUDE_PATH.'topic/'.$value->getTopicName()?>"><span class="topic-title"><?php echo ucfirst($value->getTopicName())?></span><span>ver todos</span></a>
      </div>
   </div>
</section>

<section class="ultimas-noticias">
   <div class="center">
      
   <?php foreach($value->getArticles() as $key => $article):?>
      <?php if($key >= 8)break;?>
      <a href="" class="noticia-single">
         <div class="noticia-single_img">

            <img src="<?php echo INCLUDE_STATIC_PATH.'imgs/'.$article->getCapa()?>"/>

         </div>
         <div class="noticia-single_text">
            <h3><?php echo $article->getTitle()?></h3>
            <p class="noticia-single_text_content">Segundo estudiosos do tema, é impossível apontar uma causa unificada para os atos...</p>
            <p><?php echo $article->getCreateDate()?></p>
         </div>
      </a><!--notica-single-->
   <?php endforeach;?>

   </div>
</section>
<?php endif;?>
<?php endforeach;?>

<?php include "templates/mais-lidos.php";?>