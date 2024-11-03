<?php
namespace Ibrahim13\PdPhp\AbstractFactory\Theme\Contract;


interface UIAbstractFactoryInterface{

    public function createButton():string;
    public function createText(): string;

}