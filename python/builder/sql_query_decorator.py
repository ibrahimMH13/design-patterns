from builder.sql_query import SqlQuery



class SqlQueryDecorator():

    def __init__(self,sql: str):
        self.sql_query = sql

    

    def __str__(self):
        return self.sql_query


    