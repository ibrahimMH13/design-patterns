from builder.sql_query import SqlQuery



def test_sql_query():

   stmt = SqlQuery() 
   stmt.table = "user"
   stmt.fields = ['id', 'first_name', 'last_name' , 'email', 'salary']
   stmt.conditions = ["salary  > 5000"]
   stmt.limit = 12
   stmt.orderBy ="id DESC"

   assert str(stmt) == "SELECT id, first_name, last_name, email, salary FROM user WHERE salary  > 5000 LIMIT 12 ORDER BY id DESC"