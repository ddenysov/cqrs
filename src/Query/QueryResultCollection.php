<?php

namespace Ddenysov\CQRS\Query;

class QueryResultCollection extends AbstractQueryResult
{
    final public function __construct(private readonly iterable $source)
    {
    }

    /**
     * @return array
     */
    final public function toArray(): array
    {
        $result = [];
        foreach ($this->source as $item) {
            $result[] = $this->transform($item);
        }

        return $result;
    }
}