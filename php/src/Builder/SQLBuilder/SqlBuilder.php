<?php

namespace Ibrahim13\PdPhp\Builder\SQLBuilder;

use Ibrahim13\PdPhp\Builder\SQLBuilder\Contract\ISqlBuilder;
use Ibrahim13\PdPhp\Builder\SQLBuilder\SqlQuery;


class SqlBuilder implements ISqlBuilder{

	private $sqlQuery;

	public function __construct(){

		$this->sqlQuery = new SqlQuery();

	}

	public function from(string $table):self{

		$this->sqlQuery->table = $table;

		return $this;

	}

	public function orderBy(string $column, string $dir = 'DESC'):self{

		$this->sqlQuery->orderBy = $column . $dir;

		return $this;

	}

	public function limit(int $offset):self{

		$this->sqlQuery->limit = $offset;

		return $this;

	}

	public function select(array $columns):self{

		$this->sqlQuery->fields = $columns;
		return $this;
	}

	public function getQuery():string{
		return $this->sqlQuery;
	}

}