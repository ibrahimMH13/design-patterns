<?php


namespace Ibrahim13\PdPhp\Test\Builder;


use Ibrahim13\PdPhp\Test\BaseTest;
use Ibrahim13\PdPhp\Builder\SQLBuilder\SqlBuilder;

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

}