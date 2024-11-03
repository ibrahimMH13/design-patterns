<?php
namespace Ibrahim13\PdPhp\Test\AbstractFactory;

use Ibrahim13\PdPhp\Test\BaseTest;

use Ibrahim13\PdPhp\AbstractFactory\Theme\UIBUild;
use Ibrahim13\PdPhp\AbstractFactory\Theme\{
    DarkThemeMode,
    LightThemeMode
};
use Ibrahim13\PdPhp\AbstractFactory\Theme\Contract\UIAbstractFactoryInterface;

class ThmeModeTestCase extends BaseTest{

    public function testDarkThemeMode(){

        $uiDarkMode = new UIBUild();
        $darkMode = new DarkThemeMode();
        $this->assertInstanceOf(UIAbstractFactoryInterface::class, $darkMode);
        $this->assertEquals("dark mode input text style",$uiDarkMode->render($darkMode));
       
    }

    public function testLightDarkThemeMode(){

        $uiDarkMode = new UIBUild();
        $darkMode = new LightThemeMode();
        $this->assertInstanceOf(UIAbstractFactoryInterface::class, $darkMode);
        $this->assertEquals("light mode input text style",$uiDarkMode->render($darkMode));
       
    }

}