<?php

class calculation{
    public function sum($hindi = 0, $math = 0, $science = 0, $social_science = 0, $drawing = 0, $english = 0)
    {
        return $hindi + $math + $science + $social_science + $drawing + $english;
    }

    public function percent($total)
    {
        return (float)$total / 6;
    }
}

$calculation = new calculation();
$total =  $calculation->sum(59, 63, 69,88,82,60)."<br>";
echo $calculation->percent($total)."<br>";  
?>