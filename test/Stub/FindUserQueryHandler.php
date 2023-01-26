<?php

namespace Test\Stub;

use Ddenysov\CQRS\Query\Query;
use Ddenysov\CQRS\Query\QueryHandler;
use Ddenysov\CQRS\Query\QueryResult;

class FindUserQueryHandler implements QueryHandler
{
    /**
     * @param Query $query
     * @return QueryResult
     */
    public function handle(Query $query): QueryResult
    {
        return new QueryResult([]);
    }
}