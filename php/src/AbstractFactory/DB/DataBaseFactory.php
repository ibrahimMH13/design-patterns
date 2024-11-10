<?php

namespace Ibrahim13\PdPhp\AbstractFactory\DB;

use Ibrahim13\PdPhp\AbstractFactory\DB\Contract\DatabaseInterface;


class DataBaseFactory{

    public function connect(DatabaseInterface $database): bool{
        
         return  $database->connection();
    }
}