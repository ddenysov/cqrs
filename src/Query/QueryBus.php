<?php

namespace Ddenysov\CQRS\Query;

interface QueryBus
{
    /**
     * @param Query $query
     * @return QueryResult
     */
    public function send(Query $query): QueryResult;
}