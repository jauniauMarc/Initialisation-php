<?php
   $prix_ht = 50;
   $tva = 20;
   $prix_ttc = (50 * (1 +(20 / 100)));
   echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
?>