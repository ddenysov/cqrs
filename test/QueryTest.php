<?php

namespace Test;

use Ddenysov\CQRS\Query\Adapter\Memory\MemoryQueryBus;
use Ddenysov\CQRS\Query\Adapter\Memory\Registry\MessageHandlerRegistry;
use Ddenysov\CQRS\Query\QueryResult;
use PHPUnit\Framework\TestCase;
use Test\Stub\FindUserQuery;
use Test\Stub\FindUserQueryHandler;

class QueryTest extends TestCase
{
    public function testQuery()
    {
        MessageHandlerRegistry::register(FindUserQuery::class, FindUserQueryHandler::class);
        $queryBus = new MemoryQueryBus();
        $result   = $queryBus->execute(new FindUserQuery());

        $this->assertInstanceOf(QueryResult::class, $result);
        $data = $result->toArray();
        $this->assertEquals('gendalf@gmail.com', $data[0]['user_email']);
        $this->assertFalse(isset($data[0]['email']));
    }
}
