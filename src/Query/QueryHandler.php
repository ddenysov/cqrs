<?php

namespace Ddenysov\CQRS\Query;

interface QueryHandler
{
    /**
     * @param Query $query
     * @return QueryResult
     */
    public function handle(Query $query): QueryResult;
}