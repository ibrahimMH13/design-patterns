<?php


namespace Ibrahim13\PdPhp\Test\Builder;


use Ibrahim13\PdPhp\Test\BaseTest;
use Ibrahim13\PdPhp\Builder\SQLBuilder\SqlBuilder;
use Ibrahim13\PdPhp\Builder\SQLBuilder\SqlQuery;

class SqlBuilderTestCase extends  BaseTest{


	public function testSqlBuilder(){


		$Builder = new SqlBuilder();

		$query = $Builder->from('tester')
						->select(['id','label', 'status'])
						->limit(4)
						->orderBy('status')
						->getQuery();

		$this->assertIsString($query);
	}

	public function testSqlQuery(){

		$sql = new SqlQuery();

		$sql->table = 'text';
		$sql->fields = ['id','label'];
		$sql->limit = 4;
		$sql->orderBy ='desc';
		$sql->conditions= ['id > 3'];
		$this->assertIsString((string)$sql);	


	}

}