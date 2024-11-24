<?php


namespace Ibrahim13\PdPhp\Builder\SQLBuilder;

use Ibrahim13\PdPhp\Builder\SQLBuilder\SqlQueryDecorator;

class SqlQueryLogDecorator extends SqlQueryDecorator{


	public function __toString(){

		$query = parent::__toString();
		
		file_put_contents('query.log',$query.PHP_EOL,FILE_APPEND );

		return $query;
	}
} 