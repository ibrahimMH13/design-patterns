from abc import ABC , abstractmethod



class PaymentMethodContract(ABC):

	@abstractmethod
	def pay(self, amount: float) -> str:
		pass