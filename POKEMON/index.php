<?php include_once ('./html/include_page.php') ?>




<?php

    $Carapuce = new Carapuce(18);
    $Bulbizare = new Bulbizare(18);
    //$Salameche = new Salameche(18);

    $Pokeball = new pokeball();
    $Super_Ball = new pokeball();
    $Hyper_Ball = new pokeball();
    $Master_Ball = new pokeball();

    
    do{
        $Carapuce->attack($Bulbizare);
        $Bulbizare->attack($Carapuce);

    }while(($Bulbizare->current_life > $Bulbizare->percent_life()) && ($Carapuce->current_life > $Carapuce->percent_life()));
    
    // If they are 3 pokemons
    
    //}while(($Salameche->current_life > $Salameche->percent_life()) && ($Carapuce->current_life > $Carapuce->percent_life()) && ($Bulbizare->current_life > $Bulbizare->percent_life()));
    
    
    // Capture pokemon
    
    // do{
    //    $captured = $Pokeball->catch($Bulbizare); 
    // }while($captured);
    
?>

<?php include_once ('./html/footer.php') ?>