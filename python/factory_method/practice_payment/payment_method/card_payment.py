from .payment_method_contract import PaymentMethodContract


class CardMethod(PaymentMethodContract):

	def pay(self, amount: float) -> str:

		return "bank process your transaction"