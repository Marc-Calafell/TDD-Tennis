<?php

class Player {
        protected $score;
        protected $name;

    /**
     * Player constructor.
     * @param $score
     * @param $name
     */
    public function __construct($score, $name)
    {
        $this->score = $score;
        $this->name = $name;
    }

    public function getScore()
    {
        return $this->score;
    }


    public function setScore($score)
    {
        $this->score = $score;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }



}