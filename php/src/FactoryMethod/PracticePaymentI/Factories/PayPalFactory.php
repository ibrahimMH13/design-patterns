<?php

namespace Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\Factories;

use Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\Factories{
	PayPalPayment,
	PaymentMethod,
	PaymentFactory
};

class PayPalFactory extends PaymentFactory{


	public function createPaymentMethod():PaymentMethod{

			return PayPalPayment();
	}
}