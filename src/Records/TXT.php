<?php

namespace Spatie\Dns\Records;

/**
 * @method string txt()
 */
class TXT extends Record
{
    protected string $txt;

    public static function parse(string $line): self
    {
        $attributes = static::lineToArray($line, 5);

        return static::make([
            'host' => $attributes[0],
            'ttl' => $attributes[1],
            'class' => $attributes[2],
            'type' => $attributes[3],
            'txt' => $attributes[4],
        ]);
    }

    public function __toString(): string
    {
        return "{$this->host}.\t\t{$this->ttl}\t{$this->class}\t{$this->type}\t\"{$this->txt}\"";
    }

    protected function castTxt(string $value): string
    {
        return $this->prepareText($value);
    }
}
