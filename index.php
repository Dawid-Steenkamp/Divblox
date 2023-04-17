<?php

// Task: Create a function "addAll()" that will take an array as input parameter.
// The function will sum all the elements in the array and then remove the first element of the array.
// The function should repeat this until the array is empty and then return the total.
// For example: For the array [1,1,1,1,1], the result should be 15 -> 5+4+3+2+1=15
// Optimize your solution as far as possible.

function addAll($Array)
{
    $sum = 0;
    while (!empty($Array)) {
        $sum += sizeof($Array);
        array_shift($Array);
    }
    return $sum;
}

$Array = [1, 1, 1, 1, 1]; //5+4+3+2+1=15
echo "Task 1.1 </br>";
echo "answer: " . addAll($Array);
echo "</br>";
echo "</br>";
$sum = 0;
function addAllRecursive($Array)
{
    
    if (empty($Array)) {
        return;
    } else {
        global $sum;
        $sum += sizeof($Array);
        array_shift($Array);
        addAllRecursive($Array);
        return $sum;
    };
}
echo "</br>";
$Array2 = [1, 1, 1, 1, 1]; //5+4+3+2+1=15
echo "Task 1.2 </br>";
echo "answer: " . addAllRecursive($Array2);
?>