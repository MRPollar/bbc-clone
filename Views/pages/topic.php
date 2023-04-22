<section class="topic-title-page">
   <div class="center">
      <h1><?php echo ucfirst($data['content']->getTopicName())?></h1>
      <?php if(count($data['content']->getArticles()) === 0):?>
         <h3 style="margin: 20px 0">Nenhuma conteúdo relacionado a <?php echo ucfirst($data['content']->getTopicName())?> foi encontrado :)</h3>
      <?php endif;?>
   </div>
</section>
<section class="ultimas-noticias">
   <div class="center">
      
      <?php 
      if(count($data['content']->getArticles()) > 0){
      
         foreach($data['content']->getArticles() as $key => $value):
      ?>
            <a href="" class="noticia-single">
               <div class="noticia-single_img">

                  <img src="<?php echo INCLUDE_STATIC_PATH.'imgs/'.$value->getCapa()?>"/>

               </div>
               <div class="noticia-single_text">
                  <h3><?php echo $value->getTitle()?></h3>
                  <p class="noticia-single_text_content"><?php echo substr($value->getContent(), 0, 80)?>...</p>
                  <p><?php echo $value->getCreateDate()?></p>
               </div>
            </a><!--notica-single-->
      <?php endforeach;
      }
      ?>
   </div>
</section>