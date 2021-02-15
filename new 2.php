<?php
//include("isagogi-diefthinsis.php");
//$latitude1=$_POST["x1"];//38.2496339505123
//$longitude1=$_POST["y1"];//21.738292113193917
$lat3="38.249835999999999995";
$lon3="21.7382489";
function distance( $lat1, $lon1, $lat2, $lon2, $unit) {

  $theta =   $lon1 - $lon2 ;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}
//echo . $_POST['x'] .;
echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
//echo distance(.$_POST['x']. , .$_POST['y']. , $lat3 , $lon3, "K") . " Kilometers<br>";
echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";

?>

<?php
 //echo "<script>document.write(p1)</script>";
 echo "dklsnfjkgsnk;kgnfklgndflkg";
?>