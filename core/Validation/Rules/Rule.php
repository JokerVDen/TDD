<?php

namespace Core\Validation\Rules;

interface Rule
{
    /**
     * @param string $verifiable
     * @param mixed ...$args
     * @return bool
     */
    public function passes(string $verifiable, ...$args): bool;

    /**
     * @return string
     */
    public function message(): string;
}