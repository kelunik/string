<?php

namespace Kelunik\String;

use PHPUnit\Framework\TestCase;

class StartsWithTest extends TestCase
{
    public function test(): void
    {
        $this->assertTrue(startsWith('foobar', 'foo'));
        $this->assertTrue(startsWith('foobar', 'f'));
        $this->assertFalse(startsWith('foobar', 'oobar'));
        $this->assertFalse(startsWith('foobar', 'foobarb'));
    }

    public function testEmptyNeedle(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->assertTrue(startsWith('foobar', ''));
    }
}
