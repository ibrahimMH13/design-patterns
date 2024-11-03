<?php

namespace Ibrahim13\PdPhp\AbstractFactory\Theme;

use Ibrahim13\PdPhp\AbstractFactory\Theme\Contract\LightModeFactoryInterface;
class LightThemeMode implements LightModeFactoryInterface {

    public function createText() : string {

        return "light mode input text style";
    }

    public function createButton():string{
        return "light mode button style";
    }
}