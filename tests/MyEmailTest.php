<?php
/**
 * Created by PhpStorm.
 * User: Antonia Dimitrova
 * Date: 21.5.2017 г.
 * Time: 16:27
 */
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/MyEmail.php";

/**
 * @covers MyEmail
 */
class MyEmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()
    {
        $this->assertInstanceOf(
            MyEmail::class,
            MyEmail::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress()
    {
        $this->expectException(InvalidArgumentException::class);

        MyEmail::fromString('invalid');
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'user@example.com',
            MyEmail::fromString('user@example.com')
        );
    }
}
