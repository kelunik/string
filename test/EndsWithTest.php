<?php

namespace Kelunik\String;

use PHPUnit\Framework\TestCase;

class EndsWithTest extends TestCase
{
    public function test(): void
    {
        $this->assertTrue(endsWith('foobar', 'bar'));
        $this->assertTrue(endsWith('foobar', 'r'));
        $this->assertFalse(endsWith('foobar', 'fooba'));
        $this->assertFalse(endsWith('foobar', 'ffoobar'));
    }

    public function testEmptyNeedle(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->assertTrue(endsWith('foobar', ''));
    }
}
