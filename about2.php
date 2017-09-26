<?php
public function func($userNumber, $x = 1, $y = 1)
    {
        if ($x > $userNumber){
            print_r('задуманное число не входит в чис ряд');
        }else{

            if ($x != $userNumber){
                $z = $x;
                $x += $y;
                $y = $z;
                
                $this->func($userNumber,$x,$y);
            }else{
                print_r('входит в числовой ряд');

            }
        }
        
    }
>/?



