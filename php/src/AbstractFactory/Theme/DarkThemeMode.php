<?php
namespace Ibrahim13\PdPhp\AbstractFactory\Theme;

use Ibrahim13\PdPhp\AbstractFactory\Theme\Contract\DarkModeFactoryInterface;

class DarkThemeMode implements DarkModeFactoryInterface{

    public function createText():string{

        return "dark mode input text style";
        
    }

    public function createButton():string{

        return "dark theme button";
    }
}

