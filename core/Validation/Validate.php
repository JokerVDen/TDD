<?php

namespace Core\Validation;

use Core\Validation\Rules\Max;

class Validate
{

    public function getRuleClassByName(): Rules\Rule
    {
        $a = 1/0;
        return new Max();
    }

    public function getVerifiable()
    {
        $a = 1/0;
        return '';
    }

    public function getArgs()
    {
        $a = 1/0;
        return [];
    }

    public function validate()
    {
        $rule = $this->getRuleClassByName();

        $verifiable = $this->getVerifiable();
        $args = $this->getArgs();

        return $rule->passes($verifiable, $args);
    }
}