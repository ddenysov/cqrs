<?php

namespace Ddenysov\CQRS\Query\Adapter\Memory;

use Ddenysov\CQRS\Query\Adapter\Memory\Registry\MessageHandlerRegistry;
use Ddenysov\CQRS\Query\Query;
use Ddenysov\CQRS\Query\QueryBus;
use Ddenysov\CQRS\Query\QueryHandler;
use Ddenysov\CQRS\Query\QueryResult;

class MemoryQueryBus implements QueryBus
{
    /**
     * @param Query $query
     * @return QueryResult
     */
    public function execute(Query $query): QueryResult
    {
        $handler = MessageHandlerRegistry::get(get_class($query));

        return (new $handler)->handle($query);
    }
}