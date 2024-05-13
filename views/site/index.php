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
            <!--    <h4 style="text-align: center">Lunes</h4> -->

          <div class="body-content">
 
            <h5>Pecho</h5>      
              <?= $this->render('../rutina/pecho.php') ?>

            <h5>Biceps</h5>
              <?= $this->render('../rutina/biceps.php') ?>

          </div>

      <?php elseif (date('l') === 'Tuesday') :?>

          <div class="body-content ">

            <h5 >Espalda</h5>
              <?= $this->render('../rutina/espalda.php') ?>
        
            <h5>Triceps</h5>
              <?= $this->render('../rutina/triceps.php') ?>

          </div>

      <?php elseif (date('l') === 'Wednesday') :?>

          <div class="body-content">

            <h5>Hombros</h5>      
              <?= $this->render('../rutina/hombros.php') ?>

          </div>

     <?php elseif (date('l') === 'Thursday') :?>
        <!--   <h4 style="text-align: center">Jueves</h4> -->

          <div class="body-content">

            <h5>Biceps</h5>
              <?= $this->render('../rutina/biceps.php') ?>

            <h5 class="space">Pecho</h5>
              <?= $this->render('../rutina/pecho.php') ?>

          </div>

    <?php elseif (date('l') === 'Friday') :?>

        <div class="body-content">

            <h5>Piernas</h5>
              <?= $this->render('../rutina/piernas.php') ?>

        </div>


    <?php elseif (date('l') === 'Saturday') :?>

        <div class="body-content">
            <h5>Oblicuos</h5>
              <?= $this->render('../rutina/oblicuos.php') ?>

            <h5>Abdominales</h5>
              <?= $this->render('../rutina/abdominales.php') ?>
        </div>


    <?php elseif (date('l') === 'Sunday') :?>

        <div class="jumbotron text-center bg-transparent">
            <h1>Furbo</h1>
        </div>

    <?php endif ?>
    
    
</div>
    

