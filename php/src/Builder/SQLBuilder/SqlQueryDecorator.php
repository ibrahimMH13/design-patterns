<?php


namespace Ibrahim13\PdPhp\Builder\SQLBuilder;

use Ibrahim13\PdPhp\Builder\SQLBuilder\SqlQuery;

class SqlQueryDecorator extends SqlQuery{

	protected $sqlQuery;

	public function __construct(SqlQuery $sqlQuery){

		$this->sqlQuery = $sqlQuery;
	}

	public function __toString(){

	return	$this->sqlQuery;
	
	}
}