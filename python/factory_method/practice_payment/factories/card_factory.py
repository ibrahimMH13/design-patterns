from factory_method.practice_payment.factories.payment_factory import PaymentFactory
from factory_method.practice_payment.payment_method.card_payment import CardMethod


class CardFactory(PaymentFactory):

	def create_payment_method(self):

	    return CardMethod()
