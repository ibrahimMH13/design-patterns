<?php

namespace Ibrahim13\PdPhp\Builder\SqlBuilder;

use Ibrahim13\PdPhp\Builder\SqlBuilder\Contract\ISqlBuilder;
use Ibrahim13\PdPhp\Builder\SqlBuilder\SqlQuery;
class SqlBuilder implements ISqlBuilder{

	private $sqlQuery;

	public function __constractor(){

		$this->sqlQuery = new SqlQuery();

	}

	public function from(string $table){

		$this->sqlQuery->table = $table;

		return $this;

	}

	public function orderBy(string $column, string $dir = 'DESC'){

		$this->sqlQuery->orderBy = $column . $dir;

		return $this;

	}

	public function limit(int $offset){

		$this->sqlQuery->limit = $offset;

		return $this;

	}

	public function select(array $columns){

		$this->sqlQuery->fields = $columns;
	}

	public function getQuery():SqlQuery{

		return $this->sqlQuery;

	}

}