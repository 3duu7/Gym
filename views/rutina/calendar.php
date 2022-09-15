<?php 

  $headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');?>

 	<table border="1">

   		<tr>
		   <?php foreach($headings as $head){
		     echo "<th>".$head."</th>";
		 	}

			$for_month = date("m");
			$for_year = date("Y");
			/*$for_month = 02; //You can change this
			$for_year = 2017;*/

			$start_from =  date('w',strtotime(date("$for_year-$for_month-01")));
			$total_days = cal_days_in_month(CAL_GREGORIAN,$for_month, $for_year);

		 	?>

  		</tr>
 		<tr>
			 <?php  for($i=1;$i<=($total_days+$start_from);$i++){
			  if($i>$start_from){

			   echo "<td>".($i-$start_from)."<input type='checkbox' id='$i' name='$i' value='$i'>"."</td>";
				if(isset($_POST['$i'])){
				echo "checked='checked'"; 
				}
				 }else{
				  echo "<td>"."&nbsp;".".</td>";
				}
			    if($i%7 == 0){
			      echo "</tr><tr>";
			   }
			}?>
		</tr>
	</table>
	
      <script>
		$(function(){
		    var test = localStorage.input === 'true'? true: false;
		    $('input').prop('checked', test || false);
		});

		$('input').on('change', function() {
		    localStorage.input = $(this).is(':checked');
		    console.log($(this).is(':checked'));
		});
	</script>