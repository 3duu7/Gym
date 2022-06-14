<?php

date_default_timezone_set('Europe/Madrid'); // PHP supported timezone
$script_tz = date_default_timezone_get();
// get current day:
$currentday = date('l');
/* @var $this yii\web\View */
$this->title='My Yii Application';
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
             <div class="jumbotron text-center bg-transparent">
               <h4 style="text-align: center">Martes</h4>
            </div>
        <?php elseif (date('l') === 'Wednesday') :?>
             <div class="jumbotron text-center bg-transparent">
               <h4 style="text-align: center">Miercoles</h4>
            </div>
        <?php elseif (date('l') === 'Thursday') :?>
             <div class="jumbotron text-center bg-transparent">
               <h4 style="text-align: center">Jueves</h4>
            </div>
        <?php elseif (date('l') === 'Fiday') :?>
             <div class="jumbotron text-center bg-transparent">
               <h4 style="text-align: center">Viernes</h4>
            </div>
        <?php elseif (date('l') === 'Saturday') :?>
             <div class="jumbotron text-center bg-transparent">
               <h4 style="text-align: center">Sabado</h4>
            </div>
        <?php elseif (date('l') === 'Sunday') :?>
             <div class="jumbotron text-center bg-transparent">
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
          <iframe width="500" height="300" src="https://www.youtube.com/embed/ayelLEGQPWI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="  float: right">
            </iframe>
            <h5>Biceps</h5>
            <img src="../upload/biceps.gif" width="200" height="150">
            <img src="../upload/biceps2.gif" width="200" height="150">
            <img src="../upload/biceps3.gif" width="200" height="150">

             <h5>Espalda</h5>
            <img src="../upload/espalda.gif" width="200" height="150">
            <img src="../upload/espalda2.gif" width="200" height="150">
            <img src="../upload/espalda3.gif" width="200" height="150">

        </div>

    <?php elseif (date('l') === 'Tuesday') :?>

        <div class="body-content">
            
            <h5>Triceps</h5>
            <img src="../upload/triceps.gif" width="200" height="150">
            <img src="../upload/triceps2.gif" width="200" height="150">
            <img src="../upload/triceps3.gif" width="200" height="150">
            <img src="../upload/triceps4.gif" width="200" height="150">
            <img src="../upload/triceps5.gif" width="200" height="150">
           <iframe width="500" height="300" src="https://www.youtube.com/embed/ayelLEGQPWI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="  float: right">
            </iframe>
            <h5>Hombros</h5>
            <img src="../upload/hombros.gif" width="200" height="150">
            <img src="../upload/hombros2.gif" width="200" height="150">
            <img src="../upload/hombros3.gif" width="200" height="150">
            <img src="../upload/hombros5.gif" width="200" height="150">

            <h5>Piernas</h5>
            <img src="../upload/piernas.gif" width="200" height="150">
            <img src="../upload/piernas2.gif" width="200" height="150">
            <img src="../upload/piernas3.gif" width="200" height="150">

        </div>

    <?php elseif (date('l') === 'Wednesday') :?>

        <div class="jumbotron text-center bg-transparent">
            <h1>Correr</h1>
        </div>

    <?php elseif (date('l') === 'Thursday') :?>

        <div class="jumbotron text-center bg-transparent">
            <h1>Descanso</h1>
        </div>

    <?php endif ?>
    
    <?php if (date('l') === 'Monday') :?>
        <table style="position: absolute;left: 1400px;top:700px;">

          <tr>
            <th scope="row" >WEEK</th>
            <th style="padding-left: 15px;">VM</th>
            <th style="padding-left: 15px;">MVE</th>
            <th style="padding-left: 15px;">MVA</th>
            <th style="padding-left: 15px;">MVR</th>
          </tr>

          <tr>
            <th>Pecho</th>
            <td style="text-align: center">8</td>
            <td style="text-align: center">12</td>
            <td style="text-align: center">16</td>
            <td style="text-align: center">22</td>
          </tr>

          <tr>
            <th>Biceps</th>
            <td style="text-align: center">6</td>
            <td style="text-align: center">12</td>
            <td style="text-align: center">18</td>
            <td style="text-align: center">26</td>
          </tr>

          <tr>
            <th>Espalda</th>
            <td style="text-align: center">8</td>
            <td style="text-align: center">12</td>
            <td style="text-align: center">18</td>
            <td style="text-align: center">25</td>
          </tr>

        </table>

    <?php elseif (date('l') === 'Tuesday') :?>
         <table style="position: absolute;left: 1400px;top:700px;">

          <tr>
            <th scope="row" >WEEK</th>
            <th style="padding-left: 15px;">VM</th>
            <th style="padding-left: 15px;">MVE</th>
            <th style="padding-left: 15px;">MVA</th>
            <th style="padding-left: 15px;">MVR</th>
          </tr>

          <tr>
            <th>Triceps</th>
            <td style="text-align: center">4</td>
            <td style="text-align: center">8</td>
            <td style="text-align: center">12</td>
            <td style="text-align: center">18</td>
          </tr>

          <tr>
            <th>Hombro</th>
            <td style="text-align: center">6</td>
            <td style="text-align: center">8</td>
            <td style="text-align: center">18</td>
            <td style="text-align: center">26</td>
          </tr>

          <tr>
            <th>Piernas</th>
            <td style="text-align: center">?</td>
            <td style="text-align: center">?</td>
            <td style="text-align: center">?</td>
            <td style="text-align: center">?</td>
          </tr>

        </table>
    <?php endif ?>
</div>
    

