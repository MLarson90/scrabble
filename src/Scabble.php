<?php
  Class Scrabble{


    function prepare($input){
      $input = strtolower($input);
      $split = str_split($input);
      return $split;
    }
    function addUP($input){
      $counter = count($input);
      $score = 0;
      for($i=0; $i<count($input); $i++){
        if(($input[$i] == 'q') || ($input[$i] == 'z')){
          $score += 10;
        }elseif(($input[$i] == 'j') || ($input[$i] == 'x')){
          $score += 8;
        }elseif($input[$i] == 'k'){
          $score += 5;
        }elseif(($input[$i] == 'f') || ($input[$i] == 'h') || ($input[$i] == 'v') || ($input[$i] == 'w') || ($input[$i] == 'y')){
          $score += 4;
        }elseif(($input[$i] == 'b') || ($input[$i] == 'c') || ($input[$i] == 'm') || ($input[$i] == 'p')){
          $score += 3;
        }elseif(($input[$i] == 'd') || ($input[$i] == 'g')){
          $score += 2;
        }else{
          $score += 1;
        }
      }
      return $score;
    }
  }
 ?>
