<?php

namespace Spatie\Dns\Exceptions;

use RuntimeException;
use Symfony\Component\Process\Process;

class CouldNotFetchDns extends RuntimeException
{
    public static function noHandlerFound(): self
    {
        return new static('A runnable handler could not be found');
    }

    public static function digReturnedWithError(Process $process): self
    {
        $output = trim($process->getErrorOutput());

        return new static("Dig command failed with message: `{$output}`");
    }

    public static function dnsGetRecordReturnedWithError(string $error): self
    {
        if ($error === '') {
            $error = 'dns_get_record function failed';
        }

        return new static($error);
    }
}
