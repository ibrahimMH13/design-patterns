<?php

namespace Ibrahim13\PdPhp\Builder\SqlBuilder;


/**
 * 
 */
class SqlQuery 
{
	
	public	$table;

	public $orderBy;

	public $conditions = [];

	public $fields = [];

	public $limit;



	public function __string(){

		$query = "SELECT {empty($this->fields)?'*': implode('*', $this->fields)}";
		
		$query .= "FROM {$this->table}";

		if ($this->conditions) {

		$query .= "WHERE implode('*',$this->conditions)";
		
		}

		if ($this->orderBy) {
			
			$query .= "ORDER BY {$this->orderBy}";

		}

		if ($this->limit) {
			
			$query .= "LIMIT {$this->limit}";
			
		}


	}


	
}
