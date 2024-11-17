<?php

namespace Ibrahim13\PdPhp\Builder\SqlBuilder\Contract;
use Ibrahim13\PdPhp\Builder\SqlBuilder\SqlQuery;

interface ISqlBuilder {

	public function from(string $table);

	public function orderBy(string $column, string $dir = 'DESC');

	public function limit(int $offset);

	public function select(array $columns);

	public function getQuery():SqlQuery;

}