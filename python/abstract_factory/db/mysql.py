from .contract.mysql_contract import MysqlContract


class Mysql(MysqlContract):

    def connect(self):
        return True


    def execute(self):
        return "Mysql dumy data"