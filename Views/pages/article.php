<section class="article">
   <div class="center">
      <div class="article-box">
         <h1 class="article-title"><?php echo $data['data']->getTitle()?></h1>
         <div class="article-img">
            <img class="img-capa" src="<?php echo INCLUDE_STATIC_PATH?>imgs/<?php echo $data['data']->getCapa()?>" alt=""/>
            <span>DIVULGAÇÃO/PREFEITURA DE CAUCAIA</span>
         </div>
         <figcaption>
            <p>Segundo município mais populoso do Ceará, Caucaia é atualmente a maior cidade do Brasil a adotar a gratuidade no transporte público</p>
         </figcaption>

         <ul>
            <li class="BBC_name"><span>Thais Carrança</span></li>
            <li class="BBC_local"><span>Da BBC News Brasil em São Paulo</span></li>
            <li class="BBC_social"><i>@</i><a href="">tcarran</a> &gt;</li>
            <li class="BBC_space"></li>
            <li class="BBC_date"><span><?php echo $data['data']->getCreateDate();?></span></li>
         </ul>
         <div class="article-content">
            <?php echo $data['data']->getContent()?>
         </div>
         <h2></h2>
      </div>
      



      <div class="others-box">
         <div class="principais">
            <h2 class="principais-title">Principais Notícias</h2>

            <div class="principais-box">
               <a href="" class="principais-single">
                  <p>Tarifa zero: as lições das 67 cidades do Brasil com ônibus de graça</p>
                  <span>Há 6 horas</span>
               </a>
               <a href="" class="principais-single">
                  <p>Tarifa zero: as lições das 67 cidades do Brasil com ônibus de graça</p>
                  <span>Há 6 horas</span>
               </a>
               <a href="" class="principais-single">
                  <p>Tarifa zero: as lições das 67 cidades do Brasil com ônibus de graça</p>
                  <span>Há 6 horas</span>
               </a>
            </div>
         </div>
         <div class="mais-articles">
            <h2 class="mais-title">Leia mais</h2>

            <div class="box-mais">

               <?php for($i = 0; $i < 6; $i++):?>
               <a href="" style="--bg:url(<?php echo INCLUDE_STATIC_PATH?>imgs/img.jpg)" class="mais-single">
                  <div class="overflow"></div>
                  <img src="<?php echo INCLUDE_STATIC_PATH?>imgs/img.jpg" alt=""/>
                  <div class="mais-text">
                     <h3>Elon Musk diz que o Twitter vai mudar selo da BBC para 'financiamento público'</h3>
                     <span>Há 6 horas</span>
                  </div>
               </a>
               <?php endfor;?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
   include("templates/mais-lidos.php");
?>