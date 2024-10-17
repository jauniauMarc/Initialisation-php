<?php

$pwd= "12345678";

function verificationPassword($pwd){
    if (strlen($pwd) < 8) { 
        return false; 
    }
    if (!preg_match('/[0-9]/', $pwd)) {
        return false; 
    }
    if (!preg_match('/[A-Z]/', $pwd) || !preg_match('/[a-z]/', $pwd)) {
        return false; 
    }
    return true; 
}
?>