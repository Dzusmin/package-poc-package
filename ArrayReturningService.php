<?php

declare(strict_types=1);

namespace Dzusmin\POCPackage;

class ArrayReturningService
{
    public function returnArray(array $array): array
    {
        $array[] = 'new data';
        return $array;
    }

    public function returnInt(): int
    {
        return 2;
    }
}
