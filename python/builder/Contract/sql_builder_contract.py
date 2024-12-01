from abc import ABC, abstractmethod
from builder.sql_query import SqlQuery
class SqlBuilderContract(ABC):
    
    @abstractmethod
    def select (self):
        pass


    @abstractmethod
    def order_by(self):
        pass

    @abstractmethod
    def where(self):
        pass

    @abstractmethod
    def limit(self):
        pass

    @abstractmethod
    def get_query(self)-> SqlQuery:
        pass
    

    @abstractmethod
    def from_table(self):
        pass