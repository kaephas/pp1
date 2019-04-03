<?php

/**
 * Prints out the values in an array each on a line
 * @param array to print
 */
function printArr($myArray) {
    foreach($myArray as $item) {
        echo "$item<br>";
    }
}

/**
 * Finds the largest value in an array
 * @param array to find largest
 */
function largest($myArray) {
    $largest = $myArray[0];
    foreach($myArray as $item) {
        if($item > $largest) {
            $largest = $item;
        }
    }
    return $largest;
}

function average($myArray) {
    $sum = 0;
    foreach($myArray as $item) {
        $sum += $item;
    }
    return $sum / sizeof($myArray);
}

function removeDups($myArray) {
    $newArray = array();
    foreach($myArray as $item) {
        if(!in_array($item, $newArray)) {
            $newArray[] = $item;
        }
    }
    return $newArray;

//    return array_unique($myArray);
}