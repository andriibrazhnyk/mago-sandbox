<?php

namespace App;

class Errors
{
    public function login(string $email, string $password): bool
    {
        return @file_get_contents($password) !== false;
    }
}
