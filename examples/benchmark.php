<?php

use function Kelunik\String\startsWith;

require __DIR__ . '/../vendor/autoload.php';

function bench(string $name, callable $callable): void
{
    $start = \hrtime(true);
    $callable();
    print $name . ' took ' . ((\hrtime(true) - $start) / 10 ** 9) . 's' . PHP_EOL;
}

function testcase(string $haystack, string $needle): void
{
    bench('strpos(…) === 0', static function () use ($haystack, $needle) {
        for ($i = 0; $i < 1000000; $i++) {
            \strpos($haystack, $needle) === 0;
        }
    });

    bench('strncmp(…) === 0', static function () use ($haystack, $needle) {
        for ($i = 0; $i < 1000000; $i++) {
            \strncmp($haystack, $needle, \strlen($needle)) === 0;
        }
    });

    bench('starts_with(…)', static function () use ($haystack, $needle) {
        for ($i = 0; $i < 1000000; $i++) {
            startsWith($haystack, $needle);
        }
    });
}

testcase('foobar', 'foo');
testcase('foobar', 'HTTP/1.1 200 OK');
testcase(\str_repeat('foobar', 10000), 'foobarfoobarfoobarfoobar');
testcase(\str_repeat('foobar', 10000), \str_repeat('foobar', 1000));
