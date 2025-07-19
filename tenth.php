<?php
function sum($hindi = "0", $math = "0", $science = "0", $social_science = "0", $drawing = "0", $english = "0")
{
    $sumt = $hindi + $math + $science + $social_science + $drawing + $english;
    return $sumt;
}
function percent($tol)
{
    $per = $tol / 6;
    echo "Percentage : $per%<br>";       // return statement is used for return value store in another variable
}
$total = sum(59, 63, 69,88,82,60);
percent(($total))

?>