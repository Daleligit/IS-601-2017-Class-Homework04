<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo '<hr />Replace “-“ in $date with “/“ and print out the result.: </br>';
print (str_replace ('-','/',$date) . '</br>');

echo '<hr />Compare $date with $tar and then if the result is greater than 0, you should print out “the
future”; if the result is less than 0, you should print out “the past”; if the result is equal to 0,
you should print out “Oops”. You must use if-elseif statement in this question.</br>';
if ($date > $tar) {
  echo 'the future</br>';
} elseif ($date < $tar) {
  echo 'the past</br>';
} else {
  echo 'Oops</br>';
  print ($date-$tar);
}
  


?>
