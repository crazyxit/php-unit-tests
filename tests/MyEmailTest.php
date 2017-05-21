<?php
/**
 * Created by PhpStorm.
 * User: Antonia Dimitrova
 * Date: 21.5.2017 г.
 * Time: 16:27
 */
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../classes/MyEmail.php";

/**
 * @covers MyEmail
 */
class MyEmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            MyEmail::class,
            MyEmail::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        MyEmail::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            MyEmail::fromString('user@example.com')
        );
    }
}
