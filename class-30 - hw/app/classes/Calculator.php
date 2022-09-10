<?php


class Calculator
{

    public $firstNumber;
    public $lastNumber;
    public $result;
    public $choose;

    public function calculate($cal){
        $this->firstNumber = $cal['firstNumber'];
        $this->lastNumber = $cal['lastNumber'];
        $this->choose = $cal['addition'];
        switch (  $this->choose){
            case 'plus' :
               $this->result = $this->firstNumber + $this->lastNumber;
               break;

            default:
                echo '404';
        }
        return $this->result;
        }
    }