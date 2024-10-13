<?php

namespace Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\Factories;

use Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\PaymentMethod\IPaymentMethod;

abstract class PaymentFactory {

    abstract public function createPaymentMethod(): IPaymentMethod;

	public function proccessPayment(int $amount) :string {

		$paymentMethod = $this->createPaymentMethod();

		 return $paymentMethod->pay($amount); 
	}
}