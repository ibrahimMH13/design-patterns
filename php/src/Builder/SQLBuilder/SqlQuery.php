<?php

namespace Ibrahim13\PdPhp\Builder\SqlBuilder;



class SqlQuery 
{
	
	public	$table;

	public $orderBy;

	public $conditions = [];

	public $fields = [];

	public $limit;



public function __toString() {
    // Handle fields
    $fields = empty($this->fields) ? '*' : implode(', ', (array) $this->fields);

    // Start query
    $query = "SELECT {$fields} FROM {$this->table}";

    // Handle WHERE clause
    if (!empty($this->conditions)) {
        $query .= " WHERE " . implode(' AND ', $this->conditions);
    }

    // Handle ORDER BY clause
    if (!empty($this->orderBy)) {
        $query .= " ORDER BY {$this->orderBy}";
    }

    // Handle LIMIT clause
    if (!empty($this->limit)) {
        $query .= " LIMIT {$this->limit}";
    }

    return $query;
}

	
}
