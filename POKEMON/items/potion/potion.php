<?php

        
    class Potion extends Heal
    {

        public function __construct ()
        {
            $name = 'Potion';
            $level = 20;
            $percent = 0;

            parent::__construct ($name, $level, $percent);
        }
    }

?>