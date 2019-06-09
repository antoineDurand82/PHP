<?php

        
    class Carapuce extends Pokemon 
    {

        public function __construct ($level, $current_life = null)
        {
            $name = 'Carapuce';
            $max_life = 100 + 5 * $level;
            $current_life = $current_life ?? $max_life;
            $type = 'Water';
            $strength = 10 + 2 * $level;

            parent::__construct($name, $max_life, $level, $type, $strength);
        }

        public function say_hi ()
        {
            echo "CARA CARA CARAPUCEEE <br>";
        }

    }

?>