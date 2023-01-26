<?php

namespace Ddenysov\CQRS\Query;

class QueryResultCollection extends AbstractQueryResult
{
    public function __construct(private iterable $source)
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