<?php

function drawImage($number) {
    settype($number, "integer");
     
     for ($x=1; $x <= $number; $x++) { 
         for ($y=1; $y <= $number; $y++) { 
             if ($x == 1 && $y == 1){
             	echo "*";
             }else if($x == 1 && $y == $number){
             	echo "*";
             }else if($x == $number && $y == 1){
             	echo "*";
             }else if($x == $number && $y == $number){
             	echo "*";
             }else if($x == round($number/2) || $y == round($number/2)){
             	echo "*";
             }else{
             	echo "=";
             }
         }
         ?>
         	<br>
         <?php
     }
}

//example draw
$number = 10;
drawImage($number);
?>