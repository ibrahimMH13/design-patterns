<?php

namespace Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\PaymentMethod;

use Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\PaymentMethod\IPaymentMethod;



class CardPayment implements IPaymentMethod{


	public function pay(int $amount):string{

		return "bank has beeen proccess your card";
	}

}