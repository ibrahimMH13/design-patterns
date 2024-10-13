<?php


namespace Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\PaymentMethod;
use Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\PaymentMethod\IPaymentMethod;



class PaypalPayment implements IPaymentMethod{


	public function pay(int $amount): string{

		return "Paypal proccess transaction";
	}
}