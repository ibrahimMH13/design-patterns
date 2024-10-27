from .payment_method_contract import PaymentMethodContract


class PaypalMethod(PaymentMethodContract):


	def pay(self, amount: float) -> str:

		return "paypal process your transaction"