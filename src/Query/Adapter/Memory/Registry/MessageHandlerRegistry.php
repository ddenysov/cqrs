<?php

namespace Ddenysov\CQRS\Query\Adapter\Memory\Registry;

use Ddenysov\CQRS\Query\Query;
use Ddenysov\CQRS\Query\QueryHandler;

class MessageHandlerRegistry
{
    /**
     * @var array
     */
    private static array $handlers = [];

    /**
     * @param string $query
     * @param string $handler
     * @return void
     */
    public static function register(string $query, string $handler): void
    {
        self::$handlers[$query] = $handler;
    }

    /**
     * @param string $key
     * @return string
     */
    public static function get(string $key): string
    {
        return self::$handlers[$key];
    }
}