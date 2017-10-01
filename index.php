<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo '<hr />Replace “-“ in $date with “/“ and print out the result.: </br></br>';
$date = str_replace ('-','/',$date);
print ($date . '</br>');

echo '<hr />Compare $date with $tar and then if the result is greater than 0, you should print out “the
future”; if the result is less than 0, you should print out “the past”; if the result is equal to 0,
you should print out “Oops”. You must use if-elseif statement in this question: </br></br>';
//if (($date <=> $tar) > 0 ) {
//  echo 'the future</br>';
//} elseif (($date < $tar) < 0) {
//  echo 'the past</br>';
//} else {
//  echo 'Oops</br>';
//}

echo '<hr />Search for “/“ in $date and print out all positions. If there are more than one position, please
delimit each position value with space: </br></br>';
$pos = strpos ($date, '/');
if ($pos  === false ) {
  echo '"/" was not found in "$date"</br>';
} else {
  print ($pos);
  $i = 1;
  while ($i > 0) {
    $pos2 = strpos ($date, '/', $pos + 1);
    if ($pos2  === false) {
      echo '</br>';
      break;
    } else {
      print (' ' . $pos2);
      $pos = $pos2;
    }
  }
}

echo '<hr />Count the number of words in $date and print out the result: </br></br>';
print (str_word_count($date, 0));

?>
