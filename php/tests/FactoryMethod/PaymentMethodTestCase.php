<?php

namespace Ibrahim13\PdPhp\Test\FactoryMethod;

use Ibrahim13\PdPhp\Test\BaseTest;
use Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\Factories\CardFactory;
/**
 * 
 */
class PaymentMethodTestCase extends BaseTest
{
	


	public function testPaymentMethod1(){

		$paymentMethod = new CardFactory();

		$getway = $paymentMethod->proccessPayment(100);

		echo "\n----------->".$getway;

		$this->assertIsString($getway);

	}
}