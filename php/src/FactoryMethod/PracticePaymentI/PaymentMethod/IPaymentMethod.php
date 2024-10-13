<?php


namespace Ibrahim13\PdPhp\FactoryMethod\PracticePaymentI\PaymentMethod;


interface IPaymentMethod{

	public function pay(int $amount) :string;

}