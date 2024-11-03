<?php
namespace Ibrahim13\PdPhp\AbstractFactory\Theme\Contract;

use Ibrahim13\PdPhp\AbstractFactory\Theme\Contract\UIAbstractFactoryInterface;

interface DarkModeFactoryInterface extends UIAbstractFactoryInterface {

    public function createButton(): string;
    public function createText(): string;
}