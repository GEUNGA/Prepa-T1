<?php

if(isset($_GET["p"])){
    switch($_GET["p"]){
        case "accueil":
            $title = "accueil";
            include "../templates/accueilView.php";
            break;
        case "aboutme":
            $title ="aboutme";
            include "../templates/aproposView.php";
            break;
        case "contact":
            $title ="contact";
            include "../templates/contactView.php";
            break;
        case "history":
            $title ="history";
            include "../templates/histoireView.php";
            break;
        default:
        include "../templates/erreur404View.php";
    }   
   }   else{
            include "../templates/accueilView.php";

    }

    


?>