<?php

namespace Ibrahim13\PdPhp\AbstractFactory\Theme\Contract;


interface LightModeFactoryInterface extends UIAbstractFactoryInterface {

    public function createButton():string;
    public function createText(): string;
}