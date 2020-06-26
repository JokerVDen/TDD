<?php


namespace Core\Validation\Rules;


class Max implements Rule
{

    /**
     * @inheritDoc
     */
    public function passes(string $verifiable, ...$args): bool
    {
        if (empty($args[0]))
            throw new \InvalidArgumentException();

        if (!is_numeric($args[0]))
            throw new \InvalidArgumentException();

        $len = mb_strlen($verifiable);

        return $len <= (int) $args[0];
    }

    /**
     * @inheritDoc
     */
    public function message(): string
    {
        return '';
    }
}