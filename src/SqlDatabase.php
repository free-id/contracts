<?php

declare(strict_types=1);

namespace FreeId\Contracts;

interface SqlDatabase
{
    /**
     * @param array{username: string, password: string} $credentials
     */
    public function __construct(
        string $host,
        string $port,
        string $db,
        string $table,
        array $credentials,
        string $column = 'id',
        string $charset = 'utf8',
        int $start_id = 1,
    );

    public function find(): int;
}
