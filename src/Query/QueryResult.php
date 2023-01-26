<?php

namespace Ddenysov\CQRS\Query;

class QueryResult
{
    public function __construct(private array $data)
    {

    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->data;
    }
}