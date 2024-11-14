<?php
$budget = 1553.89;
$achats = 1554.76;

if ($budget >= $achats){
    echo "Tu peux te permettre de payer les achats de " . $achats . "€";
} if ($budget < $achats){
    echo "Tu ne peux pas te permettre de payer les achats de " . $achats . "€";
}
?>