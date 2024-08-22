<?php
function getSum(int $firsNunber, int $secondNumber): int
{
    return $firsNunber + $secondNumber;
}
echo getSum(4, 9) . "\n";

function getSub(int $firsNunber, int $secondNumber): int
{
    return $firsNunber - $secondNumber;
}
echo getSub(4, 9) . "\n";

function getMulti(float $firsNunber, float $secondNumber)
{
    return $firsNunber * $secondNumber;
}
echo getMulti(4.8, 9.2) . "\n";

function getDiv(float $firsNunber, float $secondNumber)
{
    return round($firsNunber / $secondNumber,2);
}
echo getDiv(4.8, 9.2) . "\n";
