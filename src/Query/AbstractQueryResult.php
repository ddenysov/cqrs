<?php

namespace Ddenysov\CQRS\Query;

abstract class AbstractQueryResult implements QueryResult
{
    /**
     * @param array $item
     * @return array
     */
    protected function transform(array $item): array
    {
        return $item;
    }
}