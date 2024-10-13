<?php

namespace Ibrahim13\PdPhp\Test\FactoryMethod;

use Ibrahim13\PdPhp\Test\BaseTest;
use Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\Factories\{
	CardFactory,
	PaymentFactory,
	PayPalFactory
	};
use Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\PaymentMethod\IPaymentMethod;

/**
 * 
 */
class PaymentMethodTestCase extends BaseTest
{
	


	public function testCardPaymentMethod1(){

		$paymentMethod = new CardFactory();

		$this->assertInstanceOf(PaymentFactory::class, $paymentMethod);

		$getway = $paymentMethod->proccessPayment(100);

		$this->assertIsString($getway);

	}

	public function testPaypalPaymentMethod1(){

		$paymentMethod = new PayPalFactory();

		$this->assertInstanceOf(PaymentFactory::class, $paymentMethod);

		$response = $paymentMethod->proccessPayment(100);

		$this->assertIsString($response);
	}
}