<?php

namespace Ddenysov\CQRS\Query;

class QueryResultSingle extends AbstractQueryResult
{
    protected array $result;

    /**
     * @return array
     */
    final public function toArray(): array
    {
        return $this->transform($this->result);
    }
}