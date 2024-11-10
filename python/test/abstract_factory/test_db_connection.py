from abstract_factory.db.database_factory import DataBaseFactory
from abstract_factory.db.mysql import Mysql
from abstract_factory.db.pgsql import Pgsql


def test_db_connection():

    db = DataBaseFactory()
    assert db.conenct(Mysql()) == True