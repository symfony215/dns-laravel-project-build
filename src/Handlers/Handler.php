<?php

namespace Spatie\Dns\Handlers;

use Spatie\Dns\Records\Record;
use Spatie\Dns\Support\Factory;

abstract class Handler
{
    protected ?string $nameserver = null;

    public function __construct(protected Factory $factory)
    {
    }

    public function useNameserver(?string $nameserver): self
    {
        $this->nameserver = $nameserver;

        return $this;
    }

    /**
     * @param string $domain
     * @param int $flag
     * @param string $type
     * @return \Spatie\Dns\Records\Record[]
     */
    abstract public function __invoke(string $domain, int $flag, string $type): array;

    abstract public function canHandle(): bool;

    protected function transform(string $type, array $records): array
    {
        return array_map(
            fn ($record): Record => is_string($record)
                ? $this->factory->parse($type, $record)
                : $this->factory->make($type, $record),
            $records
        );
    }
}
