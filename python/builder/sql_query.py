


class SqlQuery:

    def __init__(self):
        
        self.table = ''
        self.fields = []
        self.conditions = []
        self.limit = ''
        self.orderBy = ''


    def __str__(self) -> str:
       
       fields = "*" if not self.fields else ", ".join(self.fields)
       
       sql =f"SELECT {fields} FROM {self.table}"    
       
       if self.conditions:
           sql += " WHERE " + "AND".join( self.conditions )
        
       if self.limit :
           sql += f" LIMIT {self.limit}"
        
       if self.orderBy :
           sql += f" ORDER BY {self.orderBy}"

       return sql