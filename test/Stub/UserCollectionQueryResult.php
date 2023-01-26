<?php

namespace Test\Stub;

use Ddenysov\CQRS\Query\QueryResultCollection;

class UserCollectionQueryResult extends QueryResultCollection
{
    protected function transform(array $item): array
    {
        return [
            'user_email' => $item['email'],
        ];
    }

}