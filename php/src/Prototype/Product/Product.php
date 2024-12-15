<?php

namespace Ibrahim13\PdPhp\Prototype\Product;

use Ibrahim13\PdPhp\Prototype\Product\Contract\IProductPrototype;

class Product implements IProductPrototype{

    private string $name;
    private int $price;
    private string $category;
    
    
    public function __construct(string $name, int $price, string $category){

        $this->name = $name;

        $this->price = $price;

        $this->category = $category;

    }

    public function setName(string $name){

        $this->name = $name;

    }

    public function setCategory(string $category){

        $this->category = $category;
        
    }

    public function setPrice(int $price){

        $this->price = $price;

    }

    public function getInfo(){

        return $this->name .", ". $this->price .", " . $this->category;

    }

    public function clone(){

        return clone $this;

    }

}
