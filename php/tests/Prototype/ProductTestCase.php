<?php

namespace Ibrahim13\PdPhp\Test\Prototype;

use Ibrahim13\PdPhp\Test\BaseTest;

use Ibrahim13\PdPhp\Prototype\Product\Product;

class ProductTestCase extends BaseTest{


    public function testCloneProduct(){

        $product = new Product(name: "car",price:22000,category: "normal");

        echo $product->getInfo() . PHP_EOL;

        $suport = $product->clone();

        $suport->setCategory("suport");
        $suport->setPrice(50000);


        echo $suport->getInfo().PHP_EOL;
        echo $product->clone()->getInfo(). PHP_EOL;

        $this->assertEquals("car, 22000, normal",$product->getInfo());
        $this->assertEquals("car, 50000, suport",$suport->getInfo());
        $this->assertEquals("car, 22000, normal",$product->getInfo());
    }

}