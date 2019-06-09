<?php

        
    class Salameche extends Pokemon 
    {

        public function __construct ($level, $current_life = null)
        {
            $name = 'Steven';
            $max_life = 100 + 5 * $level;
            $current_life = $current_life ?? $max_life;
            $type = 'fire';
            $strength = 10 + 2 * $level;

            parent::__construct($name, $max_life, $level, $type, $strength);
        }

        public function say_hi ()
        {
            echo "STE STE STEVEEEEN <br>";
        }

    }

?>