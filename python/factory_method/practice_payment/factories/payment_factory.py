from abc import ABC, abstractmethod
from factory_method.practice_payment.payment_method.payment_method_contract import PaymentMethodContract


class PaymentFactory(ABC):

    @abstractmethod
    def create_payment_method(self) -> PaymentMethodContract:
        pass

    def process_payment(self, amount) -> str:
        payment_process = self.create_payment_method()
        return payment_process.pay(amount)
