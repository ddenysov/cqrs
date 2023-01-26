<?php

namespace Ddenysov\CQRS\Query;

interface QueryResult
{
    /**
     * @return array
     */
    public function toArray(): array;
}