<?php

function findSecondLargest($arr) {
    // Initialize variables to keep track of the largest and second largest numbers
    $largest = $arr[0];
    $secondLargest = $arr[0];

    // Loop through the array, updating the largest and second largest as needed
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $arr[$i];
        } else if ($arr[$i] > $secondLargest && $arr[$i] != $largest) {
            $secondLargest = $arr[$i];
        }
    }

    // Return the second largest number
    return $secondLargest;
}

$numbers = [5, 10, 2, 8, 15];
$secondLargest = findSecondLargest($numbers);
echo "The second largest number is: " . $secondLargest;
