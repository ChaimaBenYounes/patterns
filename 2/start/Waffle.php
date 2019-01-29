<?php

class Waffle
{
    private $description;

    private $price;


    public function __construct()
    {
        $this->description = 'une gauffre';
        $this->price       = 4.0;
    }


    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }
}