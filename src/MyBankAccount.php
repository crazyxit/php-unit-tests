<?php
/**
 * Created by PhpStorm.
 * User: Antonia Dimitrova
 * Date: 21.5.2017 г.
 * Time: 17:20
 */
class MyBankAccount{
    private $age;
    private $sum;

    private $minSum = 100;
    private $maxSum = 10000;

    public function __construct($age, $sum)  {
        $this->age = $age;
        $this->sum = $sum;
    }
}