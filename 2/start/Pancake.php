<?php

class Pancake
{
    private $description;

    private $price;


    public function __construct()
    {
        $this->description = 'un pancake';
        $this->price       = 2.50;
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