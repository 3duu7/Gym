 
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
  
  $fifthMonday = new DateTime('fifth Monday of this month');
  $fifthTuesday = new DateTime('fifth Tuesday of this month');
  $fifthWednesday = new DateTime('fifth Wednesday of this month');
  $fifthThursday = new DateTime('fifth Thursday of this month');
  $fifthFriday = new DateTime('fifth Friday of this month');
  $fifthSaturday = new DateTime('fifth Saturday of this month');
  $fifthSunday = new DateTime('fifth Sunday of this month');

  //format

  $firstMonday = $firstMonday->format('d/m/Y');
  $firstTuesday = $firstTuesday->format('d/m/Y');
  $firstWednesday = $firstWednesday->format('d/m/Y');
  $firstThursday = $firstThursday->format('d/m/Y');
  $firstFriday = $firstFriday->format('d/m/Y');
  $firstSaturday = $firstSaturday->format('d/m/Y');
  $firstSunday = $firstSunday->format('d/m/Y');

  $secondMonday = $secondMonday->format('d/m/Y');
  $secondTuesday = $secondTuesday->format('d/m/Y');
  $secondWednesday = $secondWednesday->format('d/m/Y');
  $secondThursday = $secondThursday->format('d/m/Y');
  $secondFriday = $secondFriday->format('d/m/Y');
  $secondSaturday = $secondSaturday->format('d/m/Y');
  $secondSunday = $secondSunday->format('d/m/Y');

  $thirdMonday = $thirdMonday->format('d/m/Y');
  $thirdTuesday = $thirdTuesday->format('d/m/Y');
  $thirdWednesday = $thirdWednesday->format('d/m/Y');
  $thirdThursday = $thirdThursday->format('d/m/Y');
  $thirdFriday = $thirdFriday->format('d/m/Y');
  $thirdSaturday = $thirdSaturday->format('d/m/Y');
  $thirdSunday = $thirdSunday->format('d/m/Y');

  $fourthMonday = $fourthMonday->format('d/m/Y');
  $fourthTuesday = $fourthTuesday->format('d/m/Y');
  $fourthWednesday = $fourthWednesday->format('d/m/Y');
  $fourthThursday = $fourthThursday->format('d/m/Y');
  $fourthFriday = $fourthFriday->format('d/m/Y');
  $fourthSaturday = $fourthSaturday->format('d/m/Y');
  $fourthSunday = $fourthSunday->format('d/m/Y');

  $fifthMonday = $fifthMonday->format('d/m/Y');
  $fifthTuesday = $fifthTuesday->format('d/m/Y');
  $fifthWednesday = $fifthWednesday->format('d/m/Y');
  $fifthThursday = $fifthThursday->format('d/m/Y');
  $fifthFriday = $fifthFriday->format('d/m/Y');
  $fifthSaturday = $fifthSaturday->format('d/m/Y');
  $fifthSunday = $fifthSunday->format('d/m/Y');

  $today = new Datetime('today');
  $today = $today->format('d/m/Y');


  /* @var $this yii\web\View */
  $this->title='Repeticiones';
?>

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
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today || $fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >16</td>
              <td class="alert" <?php if ($fifthMonday == $today || $fifthTuesday == $today || $fifthWednesday == $today || $fifthThursday == $today || $fifthFriday == $today || $fifthSaturday == $today || $fifthSunday == $today): ?> style=color:red <?php endif ?> >24</td>
          </tr>

          <tr>
            <th>Biceps</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >6</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today || $fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >18</td>
              <td class="alert" <?php if ($fifthMonday == $today || $fifthTuesday == $today || $fifthWednesday == $today || $fifthThursday == $today || $fifthFriday == $today || $fifthSaturday == $today || $fifthSunday == $today): ?> style=color:red <?php endif ?> >24</td>
          </tr>

          <tr>
            <th>Espalda</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >9</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today || $fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >18</td>
              <td class="alert" <?php if ($fifthMonday == $today || $fifthTuesday == $today || $fifthWednesday == $today || $fifthThursday == $today || $fifthFriday == $today || $fifthSaturday == $today || $fifthSunday == $today): ?> style=color:red <?php endif ?> >24</td>
          </tr>

          <tr>
            <th>Triceps</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >8</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >8</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today || $fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($fifthMonday == $today || $fifthTuesday == $today || $fifthWednesday == $today || $fifthThursday == $today || $fifthFriday == $today || $fifthSaturday == $today || $fifthSunday == $today): ?> style=color:red <?php endif ?> >16</td>
          </tr>

          <tr>
            <th>Hombro</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >6</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >9</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today || $fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >18</td>
              <td class="alert" <?php if ($fifthMonday == $today || $fifthTuesday == $today || $fifthWednesday == $today || $fifthThursday == $today || $fifthFriday == $today || $fifthSaturday == $today || $fifthSunday == $today): ?> style=color:red <?php endif ?> >24</td>
          </tr>

          <tr>
            <th>Piernas</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >6</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >9</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today || $fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($fifthMonday == $today || $fifthTuesday == $today || $fifthWednesday == $today || $fifthThursday == $today || $fifthFriday == $today || $fifthSaturday == $today || $fifthSunday == $today): ?> style=color:red <?php endif ?> >18</td>
          </tr>

          <tr>
            <th>Core</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >0</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today || $fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >18</td>
              <td class="alert" <?php if ($fifthMonday == $today || $fifthTuesday == $today || $fifthWednesday == $today || $fifthThursday == $today || $fifthFriday == $today || $fifthSaturday == $today || $fifthSunday == $today): ?> style=color:red <?php endif ?> >25</td>
          </tr>

          <tr>
            <th>Abdominales</th>
              <td class="alert" <?php if ($firstMonday == $today || $firstTuesday == $today || $firstWednesday == $today || $firstThursday == $today || $firstFriday == $today || $firstSaturday == $today || $firstSunday == $today): ?> style=color:red <?php endif ?> >8</td>
              <td class="alert" <?php if ($secondMonday == $today || $secondTuesday == $today || $secondWednesday == $today || $secondThursday == $today || $secondFriday == $today || $secondSaturday == $today || $secondSunday == $today): ?> style=color:red <?php endif ?> >12</td>
              <td class="alert" <?php if ($thirdMonday == $today || $thirdTuesday == $today || $thirdWednesday == $today || $thirdThursday == $today || $thirdFriday == $today || $thirdSaturday == $today || $thirdSunday == $today || $fourthMonday == $today || $fourthTuesday == $today || $fourthWednesday == $today || $fourthThursday == $today || $fourthFriday == $today || $fourthSaturday == $today || $fourthSunday == $today): ?> style=color:red <?php endif ?> >16</td>
              <td class="alert" <?php if ($fifthMonday == $today || $fifthTuesday == $today || $fifthWednesday == $today || $fifthThursday == $today || $fifthFriday == $today || $fifthSaturday == $today || $fifthSunday == $today): ?> style=color:red <?php endif ?> >22</td>
          </tr>

        </table>
