<?php

function capital($country){
    switch ($country) {
        case "France":
            return "Paris";
        case "Berlin":
            return "Allemagne ";
        case "Rome":
            return "Italie ";
        case "Rabat":
            return "Maroc ";
        case "Madrid":
            return "Espagne ";
        case "Lisbonne":
            return "Portugal ";
        case "Londres":
            return "Angleterre ";
        default: 
            return "Inconnu";
        }
    }

?>