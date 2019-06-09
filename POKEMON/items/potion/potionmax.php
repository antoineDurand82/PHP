<?php

        
    class Potionmax extends Heal
    {

        public function __construct ()
        {
            $name = 'Potionmax';
            $level = 0;
            $percent = 100;

            parent::__construct ($name, $level, $percent);
        }
    }

?>