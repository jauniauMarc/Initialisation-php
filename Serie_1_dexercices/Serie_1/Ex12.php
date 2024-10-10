<?php
$petit= 5 ;
$moyen= 10 ;
$grand= 15 ;
    function plusPetit($petit,$moyen,$grand){
        if ($grand <$moyen <$petit)
            return $grand;
        if ($moyen <$grand<$petit)
            return $moyen;
        if ($petit <$moyen <$petit)
            return $petit;
    }
?>
/* pas fini juste l'idée*/