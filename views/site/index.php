<?php

date_default_timezone_set('Europe/Madrid'); // PHP supported timezone
$script_tz = date_default_timezone_get();
// get current day:
$currentday = date('l');


$today = date('d-m-Y');
$day = date('w');
$week_start = date('m-d-Y', strtotime('-'.$day.' days'));
$week_end = date('m-d-Y', strtotime('+'.(6-$day).' days'));
$week= 1;


if ($today == $week_end ) {
    $week++;
    if ($week == 5) {
       $week = 1;
    }
}


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
              <img src="../upload/pecho.gif" width="200" height="150">
              <img src="../upload/pecho2.gif" width="200" height="150">
              <img src="../upload/pecho3.gif" width="200" height="150">
              <img src="../upload/pecho4.gif" width="200" height="150">
      
            <h5>Biceps</h5>
              <img src="../upload/biceps.gif" width="200" height="150">
              <img src="../upload/biceps2.gif" width="200" height="150">
              <img src="../upload/biceps3.gif" width="200" height="150">

            <h5>Piernas</h5>
              <img src="../upload/piernas.gif" width="200" height="150">
              <img src="../upload/piernas2.gif" width="200" height="150">
              <img src="../upload/piernas3.gif" width="200" height="150">
            
        </div>

    <?php elseif (date('l') === 'Tuesday') :?>

        <div class="body-content">
              
            <h5>Espalda</h5>
              <img src="../upload/espalda.gif" width="200" height="150">
              <img src="../upload/espalda2.gif" width="200" height="150">
              <img src="../upload/espalda3.gif" width="200" height="150">

            <h5>Triceps</h5>
              <img src="../upload/triceps.gif" width="200" height="150">
              <img src="../upload/triceps2.gif" width="200" height="150">
              <img src="../upload/triceps3.gif" width="200" height="150">
              <img src="../upload/triceps4.gif" width="200" height="150">

            <h5>Abdominales</h5>
              <img src="../upload/abdominal.gif" width="200" height="150">
              <img src="../upload/abdominal2.gif" width="200" height="150">
              <img src="../upload/abdominal3.gif" width="200" height="150">

        </div>

    <?php elseif (date('l') === 'Wednesday') :?>

        <div class="body-content">

            <h5>Hombros</h5>
              <img src="../upload/hombros.gif" width="200" height="150">
              <img src="../upload/hombros2.gif" width="200" height="150">
              <img src="../upload/hombros3.gif" width="200" height="150">
              <img src="../upload/hombros5.gif" width="200" height="150">

            <h5>Core</h5>
              <img src="../upload/core.gif" width="200" height="150">
              <img src="../upload/core2.gif" width="200" height="150">
              <img src="../upload/core3.gif" width="200" height="150">

        </div>

    <?php elseif (date('l') === 'Thursday') :?>

        <div class="jumbotron text-center bg-transparent">
            <h1>Correr</h1>
        </div>

    <?php elseif (date('l') === 'Friday') :?>

        <div class="jumbotron text-center bg-transparent">
            <h1>Team Edward</h1>
        </div>

    <?php elseif (date('l') === 'Saturday') :?>

        <div class="body-content">

            <h5>Pecho</h5>
              <img src="../upload/pecho.gif" width="200" height="150">
              <img src="../upload/pecho2.gif" width="200" height="150">
              <img src="../upload/pecho3.gif" width="200" height="150">
              <img src="../upload/pecho4.gif" width="200" height="150">
      
            <h5>Biceps</h5>
              <img src="../upload/biceps.gif" width="200" height="150">
              <img src="../upload/biceps2.gif" width="200" height="150">
              <img src="../upload/biceps3.gif" width="200" height="150">

        </div>

    <?php elseif (date('l') === 'Sunday') :?>

        <div class="body-content">

            <h5>Espalda</h5>
              <img src="../upload/espalda.gif" width="200" height="150">
              <img src="../upload/espalda2.gif" width="200" height="150">
              <img src="../upload/espalda3.gif" width="200" height="150">

            <h5>Triceps</h5>
              <img src="../upload/triceps.gif" width="200" height="150">
              <img src="../upload/triceps2.gif" width="200" height="150">
              <img src="../upload/triceps3.gif" width="200" height="150"> 

        </div>

    <?php endif ?>
    
        <table  style="position: absolute;left: 1100px;top:150px;">

          <tr>
            <th scope="row"></th>
            <th style="padding-left: 15px;">VM</th>
            <th style="padding-left: 15px;">MVE</th>
            <th style="padding-left: 15px;">MVA</th>
            <th style="padding-left: 15px;">MVR</th>
          </tr>

          <tr>
            <th>Pecho</th>     
              <td class="alert" <?php if ($week == 1): ?> style=color:red <?php endif ?> >8</td>
              <td class="alert" <?php if ($week == 2): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($week == 3): ?> style=color:red <?php endif ?> >16</td>
              <td class="alert" <?php if ($week == 4): ?> style=color:red <?php endif ?> >22</td>
          </tr>

          <tr>
            <th>Biceps</th>
              <td class="alert" <?php if ($week == 1): ?> style=color:red <?php endif ?> >6</td>
              <td class="alert" <?php if ($week == 2): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($week == 3): ?> style=color:red <?php endif ?> >18</td>
              <td class="alert" <?php if ($week == 4): ?> style=color:red <?php endif ?> >26</td>
          </tr>

          <tr>
            <th>Espalda</th>
              <td class="alert" <?php if ($week == 1): ?> style=color:red <?php endif ?> >8</td>
              <td class="alert" <?php if ($week == 2): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($week == 3): ?> style=color:red <?php endif ?> >18</td>
              <td class="alert" <?php if ($week == 4): ?> style=color:red <?php endif ?> >25</td>
          </tr>

          <tr>
            <th>Triceps</th>
              <td class="alert" <?php if ($week == 1): ?> style=color:red <?php endif ?> >4</td>
              <td class="alert" <?php if ($week == 2): ?> style=color:red <?php endif ?> >8</td>
              <td class="alert" <?php if ($week == 3): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($week == 4): ?> style=color:red <?php endif ?> >18</td>
          </tr>

          <tr>
            <th>Hombro</th>
              <td class="alert" <?php if ($week == 1): ?> style=color:red <?php endif ?> >6</td>
              <td class="alert" <?php if ($week == 2): ?> style=color:red <?php endif ?> >8</td>
              <td class="alert" <?php if ($week == 3): ?> style=color:red <?php endif ?> >18</td>
              <td class="alert" <?php if ($week == 4): ?> style=color:red <?php endif ?> >26</td>
          </tr>

          <tr>
            <th>Piernas</th>
              <td class="alert" <?php if ($week == 1): ?> style=color:red <?php endif ?> >6</td>
              <td class="alert" <?php if ($week == 2): ?> style=color:red <?php endif ?> >10</td>
              <td class="alert" <?php if ($week == 3): ?> style=color:red <?php endif ?> >16</td>
              <td class="alert" <?php if ($week == 4): ?> style=color:red <?php endif ?> >20</td>
          </tr>

          <tr>
            <th>Core</th>
              <td class="alert" <?php if ($week == 1): ?> style=color:red <?php endif ?> >0</td>
              <td class="alert" <?php if ($week == 2): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($week == 3): ?> style=color:red <?php endif ?> >18</td>
              <td class="alert" <?php if ($week == 4): ?> style=color:red <?php endif ?> >25</td>
          </tr>

          <tr>
            <th>Abdominales</th>
              <td class="alert" <?php if ($week == 1): ?> style=color:red <?php endif ?> >8</td>
              <td class="alert" <?php if ($week == 2): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($week == 3): ?> style=color:red <?php endif ?> >16</td>
              <td class="alert" <?php if ($week == 4): ?> style=color:red <?php endif ?> >22</td>
          </tr>

        </table>

</div>
    

