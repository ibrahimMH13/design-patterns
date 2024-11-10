from .contract.pgsql_contract import PgsqlContract


class Pgsql(PgsqlContract):

    def connect(self):
        
        return True
    


    def execute(self):
        
        return "Pgsql Dumpy data"