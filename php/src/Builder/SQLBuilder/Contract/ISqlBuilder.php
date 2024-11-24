<?php

namespace Ibrahim13\PdPhp\Builder\SQLBuilder\Contract;
use Ibrahim13\PdPhp\Builder\SQLBuilder\SqlQuery;

interface ISqlBuilder {

	public function from(string $table):self;

	public function orderBy(string $column, string $dir = 'DESC'):self;

	public function limit(int $offset):self;

	public function select(array $columns):self;

	public function getQuery():SqlQuery;

}