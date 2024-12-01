from builder.Contract.sql_builder_contract import SqlBuilderContract
from .sql_query import SqlQuery


class SqlBuilder(SqlBuilderContract):

    def __init__(self):
        super().__init__()
        self.sql_query = SqlQuery()
    

    def select(self,columns: list)-> SqlBuilderContract:
       self.sql_query.fields = columns
       return self


    def limit(self,limit: int)-> SqlBuilderContract:
        self.sql_query.limit = limit
        return self
    
    
    def where(self,where: list)-> SqlBuilderContract:
        self.sql_query.conditions = where
        return self


    def order_by(self,order: str,dirct ='asc') -> SqlBuilderContract:
        orderBy = f"{order} {dirct}"
        self.sql_query.orderBy = orderBy 
        return self

    
    def from_table(self,table: str)-> SqlBuilderContract:
        self.sql_query.table = table
        return self
    

    def get_query(self) -> SqlQuery:
        return self.sql_query
