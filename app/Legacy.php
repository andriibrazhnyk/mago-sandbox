<?php

namespace App;

class Legacy
{
    public function compare(object $a, object $b): bool
    {
        return $a == $b;
    }
}
