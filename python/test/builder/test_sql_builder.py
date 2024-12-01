from builder.sql_query import SqlQuery
from builder.sql_builder import SqlBuilder


def test_sql_query():

   stmt = SqlQuery() 
   stmt.table = "users"
   stmt.fields = ['id', 'first_name', 'last_name' , 'email', 'salary']
   stmt.conditions = ["salary > 5000"]
   stmt.limit = 12
   stmt.orderBy ="id DESC"

   assert str(stmt) == "SELECT id, first_name, last_name, email, salary FROM users WHERE salary > 5000 LIMIT 12 ORDER BY id DESC"



def test_sql_builder():
   
   sql_builder = SqlBuilder()
   sql = (sql_builder.select(['id','first_name','last_name','email','salary'])
                    .from_table('users')
                    .limit(5)
                    .where(['salary > 5000'])
                    .order_by('id','DESC'))
  
   assert str(sql.get_query()) == "SELECT id, first_name, last_name, email, salary FROM users WHERE salary > 5000 LIMIT 5 ORDER BY id DESC"
