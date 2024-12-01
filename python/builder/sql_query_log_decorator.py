from builder.sql_query_decorator import SqlQueryDecorator
from builder.sql_query import SqlQuery

class SqlQueryLogDecorator(SqlQueryDecorator):


    def __init__(self,sql: str):
       
        super().__init__(sql)
        with open('query.log','a') as file:
            file.write("py#"+str(self.sql_query) +"\n")
        
    


    def __str__(self):
        return str(self.sql_query)

    
