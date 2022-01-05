<!DOCTYPE html>
<html>
<body>

<?php
$totaldays = 0;
$year_index = 2021;
$counter = 0;
$specific_years = 10;

function formatBelow9($day){
  if ($day <= 9){
   $day = "0" . $day;
  }
  return $day;
}

for ($year_counter=0; $year_counter<= $specific_years; $year_counter++){
    echo "<br /><br /> Year Is: " . $year_index . "<br /><br />";
    $year_index += 1;
  
    for ($month=1; $month<13; $month++){
      $d=cal_days_in_month(CAL_GREGORIAN,$month,$year_index);
      $counter += $d;
      for ($day=1; $day<$d+1; $day++){
      $current_date =  formatBelow9($day) . "-" . formatBelow9($month) . "-" . $year_index;
      $day_date =  date($current_date);
      $formated_date = date('D, d M m, Y', strtotime($day_date));
      echo "<br >" . $formated_date . "<br >";
      echo $day_date . "<br />";
      echo "<br >---<br >";
      $totaldays+=1;
    }
  }
  
}

echo "<br />--------</br>Total Days: " . $totaldays . "In " . 1 . "Years";

?>

</body>
</html>
