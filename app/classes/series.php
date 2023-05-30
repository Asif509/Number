<?php

namespace App\classes;

class Series
{
    public $firstNumber, $secondNumber, $result, $option, $message;

    public function __construct()
    {
        $this->firstNumber = $_POST ['first_number'];
        $this->secondNumber = $_POST ['second_number'];

    }

    public function getSeriesResult()
    {
        if ($this->firstNumber < $this->secondNumber)
        {
            for ($this->firstNumber; $this->firstNumber <= $this->secondNumber; $this->firstNumber++)
            {
                $this->result .= $this->firstNumber.',';
            }

        }

        elseif ($this->firstNumber > $this->secondNumber)
        {
            for ($this->secondNumber; $this->secondNumber <= $this->firstNumber; $this->secondNumber++)
            {
                $this->result .= $this->secondNumber. ',';
            }
        } else {
            $this->result = $this->firstNumber;
        }


//        for ($this->firstNumber; $this->firstNumber >= $this->secondNumber; $this->firstNumber--)
//        {
//            $this->result .= $this->firstNumber.' ';
//        }



        //header('Location: route.php?page=series&result='.$this->result);
        return rtrim($this->result, ',');
    }

}