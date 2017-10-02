<?php
 
  $obj = new main ();

  class main {
  
    private $html;

    public function __construct () {
      $date =  date('Y-m-d', time());
      $this->html .= htmlTags::changeRow ("The value of \$date: " . $date);

      $tar = "2017/05/24";
      $this->html .= htmlTags::changeRow ("The value of \$tar: " . $tar);
    
      $year = array("2012", "396", "300","2000", "1100", "1089");
      $this->html .= "The value of \$year: ";
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis ($year));
      //1st
      $this->html .= htmlTags::horizontalRule ();
      $this->html .= htmlTags::changeRow (htmlTags::changeRow ('Replace “-“ in $date with “/“ and print out the result.: '));
      $this->html .= htmlTags::changeRow (stringFunctions::strReplace ('-','/',$date));
      $date = stringFunctions::strReplace ('-','/',$date);
      //2nd
      $this->html .= htmlTags::horizontalRule ();
      $this->html .= htmlTags::changeRow (htmlTags::changeRow ('Compare $date with $tar and then if the result is greater than 0, you should print out “the
      future”; if the result is less than 0, you should print out “the past”; if the result is equal to 0,you should print out “Oops”. You must use if-elseif
      statement in this question: '));
      //if (($date <=> $tar) > 0 ) {
      //  echo 'the future</br>';
      //} elseif (($date < $tar) < 0) {
      //  echo 'the past</br>';
      //} else {
      //  echo 'Oops</br>';
      //}
      //3rd
      $this->html .= htmlTags::horizontalRule ();
      $this->html .= htmlTags::changeRow (htmlTags::changeRow ('Search for “/“ in $date and print out all positions. If there are more than one position,
      please delimit each position value with space:'));
      $pos = stringFunctions::strPosition ($date, '/', 0);
      if ($pos  === false ) {
        $this->html .= htmlTags::changeRow ('"/" was not found in "$date"');
      } else {
        $this->html .= $pos;
        $i = 1;
        while ($i > 0) {
          $pos2 = stringFunctions::strPosition ($date, '/', $pos + 1);
          if ($pos2  === false) {
            $this->html .= '</br>';
            break;
          } else {
	    $this->html .= ' ' . $pos2;
            $pos = $pos2;
          } 
        }
      }   
      //4th
      $this->html .= htmlTags::horizontalRule ();
      $this->html .= htmlTags::changeRow (htmlTags::changeRow ('Count the number of words in $date and print out the result: '));
      $this->html .= htmlTags::changeRow (stringFunctions::strWordCount ($date, 0));
      //5th
      $this->html .= htmlTags::horizontalRule ();
      $this->html .= htmlTags::changeRow (htmlTags::changeRow ('Return the length of a string and print out the result: '));
      $this->html .= htmlTags::changeRow (stringFunctions::strLength ($date));
      //6th
      $this->html .= htmlTags::horizontalRule ();
      $this->html .= htmlTags::changeRow (htmlTags::changeRow ('Return the ASCII value of the first character of a string and print out the result: '));
      $this->html .= htmlTags::changeRow (stringFunctions::strASCII (stringFunctions::subString ($date,0,1)));
      //7th
      $this->html .= htmlTags::horizontalRule ();
      $this->html .= htmlTags::changeRow (htmlTags::changeRow ('Return the last two characters in $date and print out the result'));
      $this->html .= htmlTags::changeRow (stringFunctions::subString ($date, stringFunctions::strLength ($date)-2,2));
    }
    public function __destruct () {
      $this->html .= htmlTags::horizontalRule ();
      $this->html .= htmlTags::changeRow ('I\'m Done');
      stringFunctions::printThis ($this->html);
    }
  }

  class stringFunctions {
    static public function printThis ($input) {
      print($input);
    }

    static public function strReplace ($input, $input2, $input3) {
      return str_replace($input, $input2, $input3);
    }

    static public function strPosition ($input, $input2, $input3) {
      return strpos($input, $input2, $input3);
    }

    static public function strWordCount ($input, $input2) {
      return str_word_count($input, $input2);
    }

    static public function strLength ($input) {
      return strlen($input);
    }

    static public function strASCII ($input) {
      return ord($input);
    }

    static public function subString ($input, $input2, $input3) {
      return substr($input, $input2, $input3);
    }
  }

  class arrayFunctions {
    static public function printThis ($input) {
      return print_r($input, true);
    }
  }

  class htmlTags {
    static public function horizontalRule () {
      $html = '<hr />';
      return $html;
    }

    static public function changeRow ($html) {
      $html = $html . '</br>';
      return $html;
    }
  }
?>
