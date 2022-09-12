<?php

declare(strict_types=1);

namespace Dzusmin\POCPackage\Tests;

use Dzusmin\POCPackage\ArrayReturningService;
use PHPUnit\Framework\TestCase;

class ArrayReturningServiceTest extends TestCase
{
    /** @test */
    public function it_should_return_same_array(): void
    {
        $subject = new ArrayReturningService();
        $array = [];

        $newArray = $subject->returnArray($array);

        $arrayToAssert = ['new data'];
        $this->assertSame($arrayToAssert, $newArray);
    }


    /** @test */
    public function it_should_return_one(): void
    {
        $subject = new ArrayReturningService();

        $this->assertSame(2, $subject->returnInt());
    }
}
