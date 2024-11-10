<?php

namespace Ibrahim13\PdPhp\AbstractFactory\DB\Contract;

interface DatabaseInterface{

    public function connection() :bool;
    public function execute() :mixed;
}