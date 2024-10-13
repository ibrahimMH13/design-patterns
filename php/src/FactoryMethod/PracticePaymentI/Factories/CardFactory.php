<?php

namespace Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\Factories;

use Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\Factories\PaymentFactory;

use Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\PaymentMethod\{
    IPaymentMethod,
    CardPayment
};


class CardFactory extends PaymentFactory{


	public function createPaymentMethod():IPaymentMethod{

		return new CardPayment();
	}


}