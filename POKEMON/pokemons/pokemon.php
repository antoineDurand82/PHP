<?php
        
    abstract class Pokemon
    {
        public $name;
        public $max_life;
        public $current_life;
        public $level;
        public $type;
        public $strength;

        public function __construct ($name, $max_life, $level, $type, $strength)
        {
            $this->name = $name;
            $this->max_life = $max_life;
            $this->current_life = $max_life;
            $this->level = $level;
            $this->type = $type;
            $this->strength = $strength;
            static::say_hi();
        }

        public function level_up ()
        {
            $this->level += 1;
            $this->max_life += 5;
            $this->strength += 2;

            $level_up_text = $this->name . ' lvl up to ' . $this->level . "<br>. He rewards 5 life points and 2 strength points.<br>";

            echo $level_up_text;
        }


        public function attack ($pokemon_attacked)
        {
            $damage = ceil($this->strength * (rand(900, 1100) / 1000));
            
            $made_damage = $this->name . ' deals ' . $damage . ' damage to ' . $pokemon_attacked->name . "<br>";
            echo $made_damage;
            $pokemon_attacked->take_damage($damage);
            
        }

        public function take_damage($damage_taken)
        {
            $this->current_life -= $damage_taken;

            $after_damage = $this->name . ' has ' . $this->current_life . ' hp now.<br>';

            echo $after_damage;
        }

        public function percent_life($percent)
        {
           $percent = ($this->max_life / 100 ) * $percent;
           return $percent;
        } 

        abstract public function say_hi();
    }

?>