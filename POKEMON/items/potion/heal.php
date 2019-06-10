<?php

    abstract class Heal implements Usable
    {
        public $name;
        public $level;

        public function __construct ($name, $level, $percent)
        {
            $this->name = $name;
            $this->level = $level;
            $this->percent = $percent;
        }

        public function use($pokemon_heal)
        {
            $pokemon_heal->current_life += $this->level + ($pokemon_heal->max_life / 100 * $this->percent);

            if ($pokemon_heal->current_life > $pokemon_heal->max_life)
            {
                echo " You used " . $this->name;
                $pokemon_heal->current_life = $pokemon_heal->max_life;
                echo $pokemon_heal->name . " has " . $pokemon_heal->current_life . "<br>";
            } else {
                echo " You used " . $this->name;
                echo $pokemon_heal->name . " has " . $pokemon_heal->current_life . "<br>";
            }
        }


    }




?>