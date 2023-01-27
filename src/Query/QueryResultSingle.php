<?php

namespace Ddenysov\CQRS\Query;

class QueryResultSingle extends AbstractQueryResult
{
    final public function __construct(private readonly array $result)
    {
    }

    /**
     * @return array
     */
    final public function toArray(): array
    {
        return $this->transform($this->result);
    }
}