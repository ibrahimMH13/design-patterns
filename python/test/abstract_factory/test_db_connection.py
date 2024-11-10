from abstract_factory.db.database_factory import DataBaseFactory
from abstract_factory.db.mysql import Mysql
from abstract_factory.db.pgsql import Pgsql


def test_mysql_db_connection():

    db = DataBaseFactory()
    assert db.conenct(Mysql()) == True



def test_pgsql_db_connection():

    db = DataBaseFactory()
    assert db.conenct(Pgsql()) == True