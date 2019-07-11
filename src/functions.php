<?php

namespace Kelunik\String;

function startsWith(string $haystack, string $needle): bool
{
    if ($needle === '') {
        throw new \InvalidArgumentException('Empty needle');
    }

    return \strncmp($haystack, $needle, \strlen($needle)) === 0;
}

function endsWith(string $haystack, string $needle): bool
{
    if ($needle === '') {
        throw new \InvalidArgumentException('Empty needle');
    }

    return \substr($haystack, -\strlen($needle)) === $needle;
}

function contains(string $haystack, string $needle): bool
{
    return \strpos($haystack, $needle) !== false;
}
