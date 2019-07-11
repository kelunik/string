<?php

namespace Kelunik\String;

use PHPUnit\Framework\TestCase;

class ContainsTest extends TestCase
{
    public function test(): void
    {
        $this->assertTrue(contains('foobar', 'foo'));
        $this->assertTrue(contains('foobar', 'foobar'));
        $this->assertTrue(contains('foobar', 'bar'));
        $this->assertTrue(contains('foobar', 'r'));
        $this->assertTrue(contains('foobar', 'fooba'));
        $this->assertTrue(contains('foobar', 'ba'));
        $this->assertFalse(contains('foobar', 'ffoobar'));
    }
}
