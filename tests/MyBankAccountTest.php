<?php

/**
 * Created by PhpStorm.
 * User: Antonia Dimitrova
 * Date: 21.5.2017 г.
 * Time: 17:32
 */
use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/MyBankAccount.php";

class MyBankAccountTest extends TestCase
{
    public function testCanBeCreated(){
        $BA = new MyBankAccount(25, 120);

        $this->assertEquals(
            0.01,
            $BA->getInterest()
        );
    }

    public function testCannotBeCreated(){
        $this->expectException(InvalidArgumentException::class);
        $BA = new MyBankAccount(15, 120);
    }
}
