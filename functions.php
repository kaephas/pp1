<?php

/**
 * Prints out the values in an array each on a line
 * @param array to print
 */
function printArr($myArray) {
    foreach($myArray as $item) {
        echo "<p>$item</p>";
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