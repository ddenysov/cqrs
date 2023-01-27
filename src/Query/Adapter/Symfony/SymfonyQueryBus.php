<?php

namespace Ddenysov\CQRS\Query\Adapter\Symfony;

use Ddenysov\CQRS\Query\Query;
use Ddenysov\CQRS\Query\QueryBus;
use Ddenysov\CQRS\Query\QueryResult;
use Ddenysov\CQRS\Query\QueryResultSingle;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;

class SymfonyQueryBus implements  QueryBus
{
    use HandleTrait;

    /**
     * @param MessageBusInterface $messageBus
     */
    public function __construct(private MessageBusInterface $messageBus)
    {
    }

    public function execute(Query $query): QueryResult
    {
        $result = $this->handle($query);

        return new QueryResultSingle();
    }
}