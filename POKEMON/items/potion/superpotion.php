<?php

        
    class Superpotion extends Heal
    {

        public function __construct ()
        {
            $name = 'Superpotion';
            $level = 50;
            $percent = 0;

            parent::__construct ($name, $level, $percent);
        }
    }

?>