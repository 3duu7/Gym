<?php


  $today = new Datetime('today');
  $today = $today->format('d/m/Y');

  /* @var $this yii\web\View */
  $this->title='Hoy';
?>

  <div ng-app="MyApp" class="site-index">
      <div ng-controller="SiteCtrl" class="body-content">
          <i class="fa fa-user"></i>
      </div>
  </div>

        <?php if (date('l') === 'Monday'): ?>
            <div>
               <h4 style="text-align: center">Lunes</h4>
            </div>
        <?php elseif (date('l') === 'Tuesday') :?>
            <div>
               <h4 style="text-align: center">Martes</h4>
            </div>
        <?php elseif (date('l') === 'Wednesday') :?>
            <div>
               <h4 style="text-align: center">Miercoles</h4>
            </div>
        <?php elseif (date('l') === 'Thursday') :?>
            <div>
               <h4 style="text-align: center">Jueves</h4>
            </div>
        <?php elseif (date('l') === 'Friday') :?>
            <div>
               <h4 style="text-align: center">Viernes</h4>
            </div>
        <?php elseif (date('l') === 'Saturday') :?>
            <div>
               <h4 style="text-align: center">Sabado</h4>
            </div>
        <?php elseif (date('l') === 'Sunday') :?>
            <div>
               <h4 style="text-align: center">Domingo</h4>
            </div>
        <?php endif ?>

    <?php if (date('l') === 'Monday'): ?>

          <div class="body-content">
 
            <h5>Pecho</h5>      

              <iframe width="250" height="200" src="https://www.youtube.com/embed/WDNQk_vJ2xE?clip=UgkxlvOiIbBKwz7xqFzxO-ABs2ezVf0sKe12&amp;clipt=EIzFEhjK2RM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/huB9VTclj_g?clip=UgkxkNxouojRRHLnuUA_xMsGciU5geFbjbCg&amp;clipt=ELX3CBi9ngk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/bL_NIMh52E0?clip=Ugkxob7dIE4pGna-Z4bdkM3Ii8u8vdM-gPAc&amp;clipt=ELaEAhi-qwI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/bL_NIMh52E0?clip=UgkxvdtBe5Dopf8uJqJqpZhCM29PTX2hf9gk&amp;clipt=EOKuGhjq1Ro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      
            <h5>Biceps</h5>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/Zjv0tiMjkJU?clip=UgkxzhALqogNAjKfLq80GJYq3mZRIlApbQCa&amp;clipt=EMaYBBjOvwQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/Zjv0tiMjkJU?clip=UgkxicjfT4UXAWv8VKHJNjM1CZPgBfbE5ImA&amp;clipt=EMvjDRjTig4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/Zjv0tiMjkJU?clip=UgkxPwq8vw0pkBYQaubJi6NFXCovT8IG4krZ&amp;clipt=EIWbFhiNwhY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

          </div>

      <?php elseif (date('l') === 'Tuesday') :?>
          <div class="body-content">

            <h5>Espalda</h5>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/hc2ZMuF0JTk?clip=Ugkx8pGd_iM3rnjIwPm8BZF9YWcHIYbpUlp7&amp;clipt=EOCLExjoshM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/WF75Gf0ZaAs?clip=UgkxO1eBkF6Yen5YixTR1vSCHuzuUz3KuNGn&amp;clipt=EKfACRiv5wk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/hc2ZMuF0JTk?clip=UgkxBUftfA_pH9PvchvFPDRPihKOeqnJHIFd&amp;clipt=EJHyBxiZmQg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/WF75Gf0ZaAs?clip=Ugkxmln2MNet0CdPO9USXfsLJMzyyObfdLLm&amp;clipt=ENjjCxjgigw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <h5>Triceps</h5>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/w86EalEoFRY?clip=UgkxtmXwcvvp7MqjIU3juqPbIh7d71OmcF5t&amp;clipt=EM7WCRjW_Qk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/gre8lBLSH7w?clip=Ugkxp4sCx3_enMo1Km7Zb58RlWl4y_KEIyM1&amp;clipt=EOT1BBjsnAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/gre8lBLSH7w?clip=Ugkxgg8rbYgsDnmj5xKPR9AGS7B_uMzbAVLR&amp;clipt=EOLxBhjqmAc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/WDNQk_vJ2xE?clip=Ugkx3fqPYbVtrWjE99xRKmx3Jpbm7iZ6fZTD&amp;clipt=EMVMGM1z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

          </div>
    <?php elseif (date('l') === 'Wednesday') :?>


          <div class="body-content">
 
            <h5>Pecho</h5>      

              <iframe width="250" height="200" src="https://www.youtube.com/embed/w86EalEoFRY?clip=UgkxaWyJq6GI60YLYdMKU8jGHsgDdWb_8y-6&amp;clipt=ENqyBxji2Qc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/huB9VTclj_g?clip=UgkxkNxouojRRHLnuUA_xMsGciU5geFbjbCg&amp;clipt=ELX3CBi9ngk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


              <iframe width="250" height="200" src="https://www.youtube.com/embed/bL_NIMh52E0?clip=Ugkxob7dIE4pGna-Z4bdkM3Ii8u8vdM-gPAc&amp;clipt=ELaEAhi-qwI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/bL_NIMh52E0?clip=UgkxvdtBe5Dopf8uJqJqpZhCM29PTX2hf9gk&amp;clipt=EOKuGhjq1Ro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      
            <h5>Biceps</h5>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/Zjv0tiMjkJU?clip=UgkxzhALqogNAjKfLq80GJYq3mZRIlApbQCa&amp;clipt=EMaYBBjOvwQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/Zjv0tiMjkJU?clip=UgkxicjfT4UXAWv8VKHJNjM1CZPgBfbE5ImA&amp;clipt=EMvjDRjTig4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/Zjv0tiMjkJU?clip=UgkxPwq8vw0pkBYQaubJi6NFXCovT8IG4krZ&amp;clipt=EIWbFhiNwhY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

          </div>


     <?php elseif (date('l') === 'Thursday') :?>
          <div class="body-content">

            <div class="jumbotron text-center bg-transparent">
              <h1>Furbo</h1>
            </div>

            <h5>Hombros</h5>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/YlISf4U52t0?clip=Ugkxd3oL1npc80RizW0IWtvymBN3Pf1vNvlL&amp;clipt=EP7cDhiGhA8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/YlISf4U52t0?clip=UgkxfDtvmdM90Z9LkxAsszT1P7BJSVC8G4ej&amp;clipt=EPbvFRj-lhY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/YlISf4U52t0?clip=Ugkx9iLd6raoTKugdiR14r0ktP-KFy8MbVvF&amp;clipt=EK2zGBi12hg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/huB9VTclj_g?clip=Ugkxn4q9Kbl538jDb_ThpNSd1n2IW8yV2eA9&amp;clipt=EMTeHRjMhR4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

          </div>


    <?php elseif (date('l') === 'Friday') :?>

        <div class="body-content">

            <h5>Espalda</h5>
            
              <iframe width="250" height="200" src="https://www.youtube.com/embed/hc2ZMuF0JTk?clip=Ugkx8pGd_iM3rnjIwPm8BZF9YWcHIYbpUlp7&amp;clipt=EOCLExjoshM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/WF75Gf0ZaAs?clip=UgkxO1eBkF6Yen5YixTR1vSCHuzuUz3KuNGn&amp;clipt=EKfACRiv5wk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/hc2ZMuF0JTk?clip=UgkxBUftfA_pH9PvchvFPDRPihKOeqnJHIFd&amp;clipt=EJHyBxiZmQg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/WF75Gf0ZaAs?clip=Ugkxmln2MNet0CdPO9USXfsLJMzyyObfdLLm&amp;clipt=ENjjCxjgigw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <h5>Triceps</h5>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/w86EalEoFRY?clip=UgkxtmXwcvvp7MqjIU3juqPbIh7d71OmcF5t&amp;clipt=EM7WCRjW_Qk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/gre8lBLSH7w?clip=Ugkxp4sCx3_enMo1Km7Zb58RlWl4y_KEIyM1&amp;clipt=EOT1BBjsnAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

              <iframe width="250" height="200" src="https://www.youtube.com/embed/gre8lBLSH7w?clip=UgkxVKMw3G58w-DaIYMDAIxSwatmv5GkZglm&amp;clipt=EPHrChj5kgs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>


    <?php elseif (date('l') === 'Saturday') :?>

        <div class="jumbotron text-center bg-transparent">
            <h1>Furbo</h1>
        </div>


    <?php elseif (date('l') === 'Sunday') :?>

        <div class="jumbotron text-center bg-transparent">
            <h1>Descanso</h1>
        </div>

    <?php endif ?>
    
    
</div>
    

