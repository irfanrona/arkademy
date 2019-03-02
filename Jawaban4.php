<?php

function HitungKembalian($cost, $money) {
    $limapuluh=0;
    $duapuluh=0;
    $sepuluh=0;
    $limaribu=0;
    $duaribu=0;
    $seribu=0;
    $lima=0;
    
    $kembalian = $money - $cost;
     while($kembalian!=0){
        if ($kembalian>=50000) {
            $kembalian = $kembalian - 50000;
            $limaribu = $limaribu +1;
        }elseif ($kembalian>=20000) {
            $kembalian = $kembalian - 20000;
            $duapuluh = $duapuluh + 1;
        }
        elseif ($kembalian>=10000) {
            $kembalian = $kembalian - 10000;
            $sepuluh = $sepuluh + 1;
        }
        elseif ($kembalian>=5000) {
            $kembalian = $kembalian - 5000;
            $limaribu = $limaribu + 1;
        }
        elseif ($kembalian>=2000) {
            $kembalian = $kembalian - 2000;
            $duaribu = $duaribu + 1;
        }
        elseif ($kembalian>=1000) {
            $kembalian = $kembalian - 1000;
            $seribu = $seribu + 1;
        }
        elseif ($kembalian>=500) {
            $kembalian = $kembalian - 500;
            $lima = $lima + 1;
        }
     }

     if ($limapuluh!=0) {
         echo $limapuluh . " x 50000"; ?><br><?php
     }
     if ($duapuluh!=0) {
         echo $duapuluh . " x 20000"; ?><br><?php
     }
     if ($sepuluh!=0) {
         echo $sepuluh . " x 10000"; ?><br><?php
     }
     if ($limaribu!=0) {
         echo $limaribu . " x 5000"; ?><br><?php
     }
     if ($duaribu!=0) {
         echo $duaribu . " x 2000"; ?><br><?php
     }
     if ($seribu!=0) {
         echo $seribu . " x 1000"; ?><br><?php
     }
     if ($lima!=0) {
         echo $lima . " x 500"; ?><br><?php
     }
}

//example amount
$money = 50000;
$cost = 15500;
HitungKembalian($cost, $money);

?>