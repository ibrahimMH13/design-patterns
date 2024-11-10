from abc import ABC, abstractmethod


class DatabaseContract(ABC):

    
    @abstractmethod
    def connect() ->bool:
        pass


    @abstractmethod    
    def execute()-> str:
        pass