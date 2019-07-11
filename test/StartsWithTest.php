<?php

namespace Kelunik\String;

use PHPUnit\Framework\TestCase;

class StartsWithTest extends TestCase
{
    public function test(): void
    {
        $this->assertTrue(starts_with('foobar', 'foo'));
        $this->assertTrue(starts_with('foobar', 'f'));
        $this->assertFalse(starts_with('foobar', 'oobar'));
        $this->assertFalse(starts_with('foobar', 'foobarb'));
    }

    public function testEmptyNeedle(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->assertTrue(starts_with('foobar', ''));
    }
}
