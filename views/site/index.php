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

<div class="site-index">

        <?php if (date('l') === 'Monday'): ?>
            <div class="jumbotron text-center bg-transparent">
               <h1 class="display-4">Lunes</h1>
            </div>
        <?php elseif (date('l') === 'Tuesday') :?>
             <div class="jumbotron text-center bg-transparent">
               <h1 class="display-4">Martes</h1>
            </div>
        <?php elseif (date('l') === 'Wednesday') :?>
             <div class="jumbotron text-center bg-transparent">
               <h1 class="display-4">Miercoles</h1>
            </div>
        <?php elseif (date('l') === 'Thursday') :?>
             <div class="jumbotron text-center bg-transparent">
               <h1 class="display-4">Jueves</h1>
            </div>
        <?php elseif (date('l') === 'Fiday') :?>
             <div class="jumbotron text-center bg-transparent">
               <h1 class="display-4">Viernes</h1>
            </div>
        <?php elseif (date('l') === 'Saturday') :?>
             <div class="jumbotron text-center bg-transparent">
               <h1 class="display-4">Sabado</h1>
            </div>
        <?php elseif (date('l') === 'Sunday') :?>
             <div class="jumbotron text-center bg-transparent">
               <h1 class="display-4">Domingo</h1>
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

             <h5>Espalda</h5>
                <img src="../upload/espalda.gif" width="200" height="150">
                <img src="../upload/espalda2.gif" width="200" height="150">
        </div>
      
    <?php elseif (date('l') === 'Tuesday') :?>

        <div class="body-content">
            <h5>Triceps</h5>
            <img src="../upload/triceps.gif" width="200" height="150">
            <img src="../upload/triceps2.gif" width="200" height="150">
            <img src="../upload/triceps3.gif" width="200" height="150">

            <h5>Hombros</h5>
            <img src="../upload/hombros.gif" width="200" height="150">
            <img src="../upload/hombros2.gif" width="200" height="150">
            <img src="../upload/hombros3.gif" width="200" height="150">

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
        <table class="default" style="float: right;">

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
         <table class="default" style="float: right;">

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
    

