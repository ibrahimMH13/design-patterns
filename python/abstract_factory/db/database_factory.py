from .contract.database_contract import DatabaseContract

class DataBaseFactory():


    def conenct(self, db: DatabaseContract)-> bool:
        
        return db.connect()