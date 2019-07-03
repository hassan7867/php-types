<?php
declare(strict_types=1);

namespace Jsys\strings\Test;
use jsys\types\strings\Text;
use PHPUnit\Framework\TestCase;


class IsEmptyTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function test_must_not_initialize_with_non_empty_string()
    {
        $testString = 'hello';
        $this->expectExceptionCode(1021);
        $this->expectExceptionMessage("Non empty '$testString' is not Allowed");
        $emptyString = new Text($testString);
        $emptyString->isEmpty($testString);
    }
    public function test_must_initialize_with_empty_string()
    {
        $testString = "";
        $emptyString = new Text($testString);
        $emptyString->isEmpty($testString);
        $this->assertInstanceOf('jsys\types\strings\Text', $emptyString);
        $this->assertEquals('jsys\types\strings\Text', get_class($emptyString));
        $this->assertEquals($emptyString->value(), $testString, 'Both must get the same value');
    }



    public function tearDown(): void
    {
    }
}