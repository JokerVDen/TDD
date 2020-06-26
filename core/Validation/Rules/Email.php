<?php

namespace Core\Validation\Rules;

class Email implements Rule
{
    /**
     * @param string $verifiable
     * @param mixed ...$args
     * @return bool
     */
    public function passes(string $verifiable, ... $args): bool
    {
        return filter_var($verifiable, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @return string
     */
    public function message(): string
    {
        return 'Не правильный email!';
    }
}