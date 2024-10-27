from factory_method.practice_payment.factories.paypal_factory import PaypalFactory

def test_factory_payment_method():
    # Instantiate the PaypalFactory
    method = PaypalFactory()

    # Process payment with the method created by PaypalFactory
    payment = method.process_payment(50)
    print('\n!@####--------->\n',payment)
    # Assert the expected output
    assert "paypal process your transaction" == payment
