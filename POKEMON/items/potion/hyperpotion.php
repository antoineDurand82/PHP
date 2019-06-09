<?php

        
    class Hyperpotion extends Heal
    {

        public function __construct ()
        {
            $name = 'Hyperpotion';
            $level = 200;
            $percent = 0;

            parent::__construct ($name, $level, $percent);
        }
    }

?>