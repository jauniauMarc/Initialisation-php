<?php
$array = array(
    10,
    5,
);

function plusGrand($array){
    if ($array == null) { 
        return null; 
    }
    return max($array); 
}
?>

