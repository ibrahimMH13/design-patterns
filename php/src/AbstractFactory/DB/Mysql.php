<?php

namespace Ibrahim13\PdPhp\AbstractFactory\DB;

use Ibrahim13\PdPhp\AbstractFactory\DB\Contract\MySqlInterface;

class Mysql implements MySqlInterface{

    public function connection():bool{

        return true;
    }

    public function execute():mixed{

        return "Mysql dumy data";
    }
}

