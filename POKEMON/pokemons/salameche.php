<?php

        
    class Salameche extends Pokemon 
    {

        public function __construct ($level, $current_life = null)
        {
            $name = 'Salameche';
            $max_life = 5 * $level;
            $current_life = $current_life ?? $max_life;
            $type = 'Fire';
            $strength = 1.5 * $level;

            parent::__construct($name, $max_life, $level, $type, $strength);
        }

        public function say_hi ()
        {
            echo "SALA SALA SALAMECHEEE<br>";
        }

    }

?>