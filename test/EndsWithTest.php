<?php

namespace Kelunik\String;

use PHPUnit\Framework\TestCase;

class EndsWithTest extends TestCase
{
    public function test(): void
    {
        $this->assertTrue(ends_with('foobar', 'bar'));
        $this->assertTrue(ends_with('foobar', 'r'));
        $this->assertFalse(ends_with('foobar', 'fooba'));
        $this->assertFalse(ends_with('foobar', 'ffoobar'));
    }

    public function testEmptyNeedle(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->assertTrue(ends_with('foobar', ''));
    }
}
