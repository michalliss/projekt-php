<?php

use PHPUnit\Framework\TestCase;

require_once("hello.php");

final class HelloTest extends TestCase 
{
    public function testHello(): void
    {
        $input = 'michal';
        $result = hello($input);
        $this->assertSame($result, "hello michal");
    }
}