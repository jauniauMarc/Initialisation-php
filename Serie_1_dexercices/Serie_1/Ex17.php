<?php

$pwd= "12345678";

function verificationPassword($pwd){
    if (strlen($pwd) >= 8) { 
        return true; 
    }else{
        return false;
    }    
}
?>

