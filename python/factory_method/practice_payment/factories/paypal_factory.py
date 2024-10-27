from factory_method.practice_payment.factories.payment_factory import PaymentFactory
from factory_method.practice_payment.payment_method.paypal_payment import PaypalMethod



class PaypalFactory(PaymentFactory):


	def create_payment_method(self):

		return PaypalMethod()

