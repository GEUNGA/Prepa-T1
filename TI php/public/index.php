<?php

if(isset($_GET["p"])){
    switch($_GET["p"]){
        case "accueil":
            include "../templates/accueilView.php";
            break;
        case "apropos":
            include "../templates/aproposView.php";
            break;
        case "contact":
            include "../templates/contactView.php";
            break;
        case "histoire":
            include "../templates/histoireView.php";
            break;
        default:
        include "../templates/erreur404View.php";
    }   
   }   else{
            include "../templates/accueilView.php";

    }

    


?>