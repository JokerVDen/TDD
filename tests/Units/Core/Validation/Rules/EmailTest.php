<?php

namespace Tests\Units\Core\Validation\Rules;


use Core\Validation\Rules\Email;

class EmailTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider emailProvider
     * @param $email
     * @param $expected
     */
    public function testPassesWithData($email, $expected)
    {
        $ruleEmail = new Email();

        $result = $ruleEmail->passes($email);

        $this->assertSame($result, $expected);
    }

    /**
     * @return array[]
     */
    public function emailProvider(): array
    {
        return [
            ['j@mail.com', true],
            ['jmail.com', false],
        ];
    }
}