<?php


namespace Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI;
use Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\IPaymentMethod;



class Paypal implements IPaymentMethod{


	public function pay(int $amount):string{

		return "Paypal proccess transaction";
	}
}