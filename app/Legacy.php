<?php

namespace App;

class Legacy
{
    public function compare(object $a, object $b): bool
    {
        return $a === $b;
    }

    public function compareAgain(object $x, object $y): bool
    {
        return $x == $y;
    }
}
