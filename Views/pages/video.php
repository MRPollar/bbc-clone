<section class="video">
   <div class="center">
      <div class="container-video">
         <video teste="hello baby" controls id="video-player" control src="<?php echo INCLUDE_STATIC_PATH?>videos/video.mp4"></video>
         
         <h1>O que visita de Lula à China diz sobre agenda internacional</h1>
      </div>
   </div>
</section>

<section class="video-text">
   <div class="center">
      <span>14 abril de 2023</span>
      <div class="content-text-video">
         <p>A viagem do presidente Luiz Inácio Lula da Silva (PT) à China foi marcada por uma série de mensagens sobre qual deverá ser a sua agenda internacional em seu terceiro mandato.</p>
         <br />
         <p>E entre esses recados, Lula deixou claro que contará com a China para, nas palavras dele, mudar as regras da governança global.</p>
         <br />
         <p>Neste vídeo, Leandro Prazeres, nosso enviado à China, explica cada um desses recados do presidente brasileiro – num momento em que as relações e disputas entre China e EUA só aumentam.</p>
      </div>
      <p>Assista e confira.</p>
   </div>
</section>
<section class="conteiner-videos-mais-vistos">
   <div class="center">
      <h2>Mais assistido</h2>

      <div class="box-list-videos">
         <?php for($i = 0; $i < 10; $i++):?>
            <a class="video-mais-visto-single" href="">
               <div class="thumb">
                  <img src="<?php echo INCLUDE_STATIC_PATH?>imgs/img.jpg"/>
               </div>
               <div class="title-video">
                  <h2>Listen,O gênio africano que, há mais de 2 mil anos, com um graveto, provou que Terra é redonda, Duration 15,55</h2>
                  <span>10 abril 2023</span>
               </div>
            </a>
         <?php endfor;?>
      </div>
   </div>
</section>