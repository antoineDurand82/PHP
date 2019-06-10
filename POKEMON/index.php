<?php include_once ('./html/include_page.php') ?>




<?php

    $Carapuce = new Carapuce(5);
    // $Bulbizarre = new Bulbizarre(18);
    $Salameche = new Salameche(8);

    $Pokeball = new pokeball();
    // $Super_Ball = new pokeball();
    // $Hyper_Ball = new pokeball();
    // $Master_Ball = new pokeball();


    $Potion = new potion();
    $Super_potion = new superpotion();


    $nbpotions = 2;
    $nbsuperpotion = 1;
    $nbpokeball = 3;

    while($Carapuce->current_life > 0 || $Salameche->current_life > 0)
    {

        if($nbsuperpotion > 0 && $Carapuce->current_life < $Carapuce->percent_life(15))
        {
            $Super_potion->use($Carapuce);
            $nbsuperpotion -= 1;
        } elseif($nbpotions > 0 && $Carapuce->current_life < $Carapuce->percent_life(40))
            {
                $Potion->use($Carapuce);
                $nbpotions -= 1;
            }
            elseif($Salameche->current_life < $Salameche->percent_life(100) )
                {
                    if($nbpokeball == 0)
                    {
                        $Salameche->attack($Carapuce);
                        $Carapuce->attack($Salameche);
                        continue;

                    } else {
                        $captured = $Pokeball->use($Salameche);
                        $nbpokeball -= 1;
                        if ($captured == true)
                        {
                            break;
                        } else {
                                $Salameche->attack($Carapuce);
                                continue;
                            }

                    }
                    
                }




        if($nbsuperpotion > 0 && $Carapuce->current_life < $Carapuce->percent_life(15))
        {
            $Super_potion->use($Carapuce);
            $nbsuperpotion -= 1;
        } elseif($nbpotions > 0 && $Carapuce->current_life < $Carapuce->percent_life(40))
            {
                $Potion->use($Carapuce);
                $nbpotions -= 1;
            }
            elseif($Salameche->current_life < $Salameche->percent_life(50))
            {
                if($nbpokeball == 0)
                {
                    $Salameche->attack($Carapuce);
                    $Carapuce->attack($Salameche);
                    continue;

                } else {
                    $captured = $Pokeball->use($Salameche);
                    $nbpokeball -= 1;
                    if ($captured == true)
                    {
                        break;
                    } else {
                            $Salameche->attack($Carapuce);
                            continue;
                        }

                }
                
            }




        if($nbsuperpotion > 0 && $Carapuce->current_life < $Carapuce->percent_life(15))
        {
            $Super_potion->use($Carapuce);
            $nbsuperpotion -= 1;
        } elseif($nbpotions > 0 && $Carapuce->current_life < $Carapuce->percent_life(40))
            {
                $Potion->use($Carapuce);
                $nbpotions -= 1;
            }
            elseif($Salameche->current_life < $Salameche->percent_life(30))
            {
                if($nbpokeball == 0)
                {
                    $Salameche->attack($Carapuce);
                    $Carapuce->attack($Salameche);
                    continue;

                } else {
                    $captured = $Pokeball->use($Salameche);
                    $nbpokeball -= 1;
                    if ($captured == true)
                    {
                        break;
                    } else {
                            $Salameche->attack($Carapuce);
                            continue;
                        }
                        
                    }

            } 

    }
    
?>

<?php include_once ('./html/footer.php') ?>