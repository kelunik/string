<?php

namespace Kelunik\String;

function starts_with(string $haystack, string $needle): bool
{
    if ($needle === '') {
        throw new \InvalidArgumentException('Empty needle');
    }

    return \strncmp($haystack, $needle, \strlen($needle)) === 0;
}

function ends_with(string $haystack, string $needle): bool
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
