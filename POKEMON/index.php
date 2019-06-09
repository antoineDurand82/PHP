<?php include_once ('./html/include_page.php') ?>




<?php

    $Carapuce = new Carapuce(18);
    $Bulbizarre = new Bulbizarre(18);
    //$Salameche = new Salameche(18);

    $Pokeball = new pokeball();
    $Super_Ball = new pokeball();
    $Hyper_Ball = new pokeball();
    $Master_Ball = new pokeball();

    
    do{
        $Carapuce->attack($Bulbizarre);
        $Bulbizarre->attack($Carapuce);

    }while(($Bulbizarre->current_life > $Bulbizarre->percent_life()) && ($Carapuce->current_life > $Carapuce->percent_life()));
    
    // If they are 3 pokemons
    
    //}while(($Salameche->current_life > $Salameche->percent_life()) && ($Carapuce->current_life > $Carapuce->percent_life()) && ($Bulbizarre->current_life > $Bulbizarre->percent_life()));
    
    
    // Capture pokemon
    
    do{
       $captured = $Pokeball->use($Bulbizarre); 
    }while($captured);
    
?>

<?php include_once ('./html/footer.php') ?>