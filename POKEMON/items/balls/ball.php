<?php

    abstract class Ball implements Usable
    {
        public $name;
        public $level;

        public function __construct ($name, $level)
        {
            $this->name = $name;
            $this->level = $level;
        }

        public function use($pokemon_caught)
        {
            $rand = rand(0, 100) / 100;
            $chance_catch = (($pokemon_caught->max_life - $pokemon_caught->current_life) / $pokemon_caught->max_life) * (1+ ($this->level - $pokemon_caught->level) /25);

            if ($this->level != 100)
             {
                if ($chance_catch > $rand)
                {
                    echo $pokemon_caught->name . " is caught <br>";
                } else {
                    echo $pokemon_caught->name . " break your " . $this->name;
                }

             } else {
                echo $pokemon_caught->name . " is caught <br>";
             }
            
        }


    }




?>