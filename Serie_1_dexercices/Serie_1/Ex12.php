<?php
$petit = 5;
$moyen = 10;
$grand = 15;

function plusPetit($petit, $moyen, $grand) {
    if ($petit < $moyen && $petit < $grand) {
        return $petit;
    } elseif ($moyen < $petit && $moyen < $grand) {
        return $moyen;
    } else {
        return $grand;
    }
}
?>
