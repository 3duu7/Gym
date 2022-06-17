<?php

$firstMonday = new DateTime('first Monday of this month');
$firstTuesday = new DateTime('first Tuesday of this month');
$firstWednesday = new DateTime('first Wednesday of this month');
$firstThursday = new DateTime('first Thursday of this month');
$firstFriday = new DateTime('first Friday of this month');
$firstSaturday = new DateTime('first Saturday of this month');
$firstSunday = new DateTime('first Sunday of this month');

$secondMonday = new DateTime('second Monday of this month');
$secondTuesday = new DateTime('second Tuesday of this month');
$secondWednesday = new DateTime('second Wednesday of this month');
$secondThursday = new DateTime('second Thursday of this month');
$secondFriday = new DateTime('second Friday of this month');
$secondSaturday = new DateTime('second Saturday of this month');
$secondSunday = new DateTime('second Sunday of this month');

$thirdMonday = new DateTime('third Monday of this month');
$thirdTuesday = new DateTime('third Tuesday of this month');
$thirdWednesday = new DateTime('third Wednesday of this month');
$thirdThursday = new DateTime('third Thursday of this month');
$thirdFriday = new DateTime('third Friday of this month');
$thirdSaturday = new DateTime('third Saturday of this month');
$thirdSunday = new DateTime('third Sunday of this month');

$fourthMonday = new DateTime('fourth Monday of this month');
$fourthTuesday = new DateTime('fourth Tuesday of this month');
$fourthWednesday = new DateTime('fourth Wednesday of this month');
$fourthThursday = new DateTime('fourth Thursday of this month');
$fourthFriday = new DateTime('fourth Friday of this month');
$fourthSaturday = new DateTime('fourth Saturday of this month');
$fourthSunday = new DateTime('fourth Sunday of this month');

$today = new Datetime('today');

echo $today->format('l m d');
echo "<br>";
echo $firstFriday->format('l m d');
echo "<br>";





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
    
       <table style="position: absolute;left: 1100px;top:150px;">


          <tr>
            <th scope="row"></th>
            <th style="padding-left: 15px;border-bottom: 1px solid #000;">VM</th>
            <th style="padding-left: 15px;border-bottom: 1px solid #000;">MVE</th>
            <th style="padding-left: 15px;border-bottom: 1px solid #000;">MVA</th>
            <th style="padding-left: 15px;border-bottom: 1px solid #000;">MVR</th>
          </tr>

          <tr>
            <th>Pecho</th>     
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >8</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today): ?> style=color:red <?php endif ?> >16</td>
              <td class="alert" <?php if ($fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >22</td>
          </tr>

          <tr>
            <th>Biceps</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >6</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today): ?> style=color:red <?php endif ?> >18</td>
              <td class="alert" <?php if ($fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >26</td>
          </tr>

          <tr>
            <th>Espalda</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >8</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today): ?> style=color:red <?php endif ?> >18</td>
              <td class="alert" <?php if ($fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >25</td>
          </tr>

          <tr>
            <th>Triceps</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >4</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >8</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >18</td>
          </tr>

          <tr>
            <th>Hombro</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >6</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >8</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today): ?> style=color:red <?php endif ?> >18</td>
              <td class="alert" <?php if ($fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >26</td>
          </tr>

          <tr>
            <th>Piernas</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >6</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >10</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today): ?> style=color:red <?php endif ?> >16</td>
              <td class="alert" <?php if ($fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >20</td>
          </tr>

          <tr>
            <th>Core</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >0</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today): ?> style=color:red <?php endif ?> >18</td>
              <td class="alert" <?php if ($fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >25</td>
          </tr>

          <tr>
            <th>Abdominales</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >8</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today): ?> style=color:red <?php endif ?> >16</td>
              <td class="alert" <?php if ($fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >22</td>
          </tr>

        </table>

</div>
    

