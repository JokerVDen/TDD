<?php

namespace Tests\Units\Core\Validation\Rules;


use Core\Validation\Rules\Max;

class MaxTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider maxDataProviderMaxTypeInt
     * @param string $string
     * @param int|string $max
     * @param bool $expected
     */
    public function testPassesWithDataMaxIsInt(string $string, $max, bool $expected)
    {
        $ruleMax = new Max();

        $result = $ruleMax->passes($string, $max);

        $this->assertSame($result, $expected);
    }

    /**
     * @dataProvider argsNotValidDataProvider
     * @param $max
     */
    public function testExpectedInvalidArgumentExceptionWhenNoValidArgs($max)
    {
        $ruleMax = new Max();

        $this->expectException(\InvalidArgumentException::class);

        $ruleMax->passes('asdfasdf', $max);
    }

    public function testExpectedInvalidArgumentExceptionWhenArgsNotExists()
    {
        $ruleMax = new Max();

        $this->expectException(\InvalidArgumentException::class);

        $ruleMax->passes('asdfasdf');
    }

    /**
     * @return array|array[]
     */
    public function argsNotValidDataProvider(): array
    {
        return [
            [''],
            ['asdfasdfas'],
        ];
    }

    /**
     * @return array[]
     */
    public function maxDataProviderMaxTypeInt()
    {
        return [
            ['asdfasdfasdf', 14, true],
            ['1234567890_', 10, false],
            ['1234567890_', '12', true],
            ['1234567890_', '8', false],
        ];
    }
}