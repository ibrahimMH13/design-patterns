from factory_method.practice_payment.factories.paypal_factory import PaypalFactory
from factory_method.practice_payment.factories.card_factory import CardFactory

def test_factory_payment_method():
    # Instantiate the PaypalFactory
    method = PaypalFactory()

    # Process payment with the method created by PaypalFactory
    payment = method.process_payment(50)
    # Assert the expected output
    assert "paypal process your transaction" == payment

    method = CardFactory()

    payment = method.process_payment(50)

    assert "bank process your transaction" == payment
