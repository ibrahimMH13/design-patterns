<?php

namespace Ibrahim13\PdPhp\Test\AbstractFactory;

use Ibrahim13\PdPhp\Test\BaseTest;
use Ibrahim13\PdPhp\AbstractFactory\DB\{
                                        Mysql,
                                        DataBaseFactory,
                                        Pgsql
                                    };

class DBConnectionTestCase extends BaseTest{


    public function testMysqlConnect(){

        $db = new DataBaseFactory();
        $this->assertTrue($db->connect(new Mysql()));
    }

    public function testPgSqlConnect(){

        $db = new DataBaseFactory();
        $this->assertTrue($db->connect(new Pgsql()));

    }
}
