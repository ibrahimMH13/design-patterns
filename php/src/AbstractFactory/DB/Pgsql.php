<?php

namespace Ibrahim13\PdPhp\AbstractFactory\DB;
use Ibrahim13\PdPhp\AbstractFactory\DB\Contract\PgsqlInterface;
class Pgsql implements PgsqlInterface{

    public function connection():bool{
        return true;
    }

    public function execute():mixed{
        return "Pgsql dumy data";
    }
}