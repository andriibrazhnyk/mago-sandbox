<?php

namespace App;

class Warnings
{
    public function same(object $a, object $b): bool
    {
        return $a == $b;
    }

    public function has(string $needle, array $haystack): bool
    {
        return in_array($needle, $haystack);
    }
}
