<?php

function isPasswordValid($pass) {
     if (strlen($pass) <> '8') {
            echo "salah";
        }
        elseif(!preg_match("#[0-9]+#",$pass)) {
            return false;
        }
        elseif(!preg_match("#[A-Z]+#",$pass)) {
            return false;
        }
        elseif(!preg_match("#[a-z]+#",$pass)) {
            return false;
        }
        elseif(!preg_match("#[\W-_]+#",$pass)) {
            return false;
        }
        else{
            return true;
        }
}

//example password
$pass = "ssdga_A7";
echo isPasswordValid($pass);

?>