<?php

namespace Ibrahim13\PdPhp\AbstractFactory\Theme;

use Ibrahim13\PdPhp\AbstractFactory\Theme\Contract\UIAbstractFactoryInterface;
class UIBUild {


    public function render(UIAbstractFactoryInterface $uiFactory):string {

        return $uiFactory->createText();

    }

    
}