<?php

class Test extends PHPUnit_Framework_TestCase {
    /**
     * @test
     */
    function startsWith () {
        $this->assertTrue(startsWith("foobar", "foo"));
		$this->assertTrue(startsWith("foobar", "f"));
		$this->assertTrue(startsWith("foobar", ""));

		$this->assertFalse(startsWith("foobar", "oobar"));
    }

	/**
     * @test
     */
    function endsWith () {
        $this->assertTrue(endsWith("foobar", "bar"));
		$this->assertTrue(endsWith("foobar", "r"));
		$this->assertTrue(endsWith("foobar", ""));

		$this->assertFalse(endsWith("foobar", "fooba"));
    }
}
