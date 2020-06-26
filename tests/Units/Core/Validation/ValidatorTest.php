<?php


namespace Units\Core\Validation;


use Core\Validation\Rules\Max;
use Core\Validation\Validate;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    public function testValidate()
    {
        $rule = $this->createStub(Max::class);
        $rule->method('passes')->willReturn(true);

        $validation = $this->getMockBuilder(Validate::class)
            ->onlyMethods(['getRuleClassByName', 'getArgs', 'getVerifiable'])
            ->getMock();

        $validation->method('getRuleClassByName')->willReturn($rule);

        $validation->method('getArgs')->willReturn(['1']);
        $validation->method('getVerifiable')->willReturn('asdfasdf');

        $result = $validation->validate();

        $this->assertTrue($result);
    }
}