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
    private $interest = 0;

    private $minSum = 100;
    private $maxSum = 10000;

    public function __construct(int $age, float $sum)  {
        $this->age = $age;
        $this->sum = $sum;

        $this->calcInterest();
    }

    public function getSum(){
        return $this->sum;
    }

    public function getInterest(){
        return $this->interest;
    }

    public function calcInterest(){
        if($this->age >= 60){
            $this->interest = 0.02; //2%
        }
        else if($this->age >= 18){
            if ($this->sum >= $this->maxSum){
                $this->interest = 0.015; //1.5%
            }
            else if ($this->sum >= 1000){
                $this->interest = 0.013; //1.3%
            }
            else if ($this->sum >= $this->minSum){
                $this->interest = 0.01; //1.0%
            }
        }
    }

    public function getAmount(){
        return $this->sum + ($this->sum * $this->interest);
    }
}