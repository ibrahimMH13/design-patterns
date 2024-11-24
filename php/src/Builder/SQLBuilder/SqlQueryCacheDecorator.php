<?php

namespace Ibrahim13\PdPhp\Builder\SQLBuilder;

use Ibrahim13\PdPhp\Builder\SQLBuilder\SqlQueryDecorator;


class SqlQueryCacheDecorator extends SqlQueryDecorator{

	private static $cache = [];

	public function __toString(){

		$query = parent::__toString();
		
		$hash = md5($query);

		if(isset(self::$cache[$hash])){
			echo "\n".$hash."\n";
			return self::$cache[$hash];

		}
		
		echo "cacheeeeeeed"."\n";
		self::$cache[$hash] = $query;
		return $query;
	}
} 