<?php
$array = array(
    "123" => "456",
    "abc" => "def",
);

function dernierElementTableau($array){
    if ($array == null) {
        return null; 
    }
    return end($array); 
}
?>
