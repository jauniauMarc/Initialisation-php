<?php
$array = array(
    10,
    5,
);

function plusPetit($array){
    if ($array == null) { 
        return null; 
    }
    return min($array); 
}
?>

