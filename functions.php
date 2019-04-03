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
 * @param $myArray array to find largest
 * @return $largest largest value
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


function distribution($myArray) {
    sort($myArray);
    $newArray = [];
    foreach($myArray as $item) {
        if(array_key_exists($item, $newArray)) {
            $newArray[$item]++;
        } else {
            $newArray[$item] = 1;
        }
    }
    return $newArray;
}

function printKeyValue($myArray) {
    foreach($myArray as $key => $item) {
        echo "$key => $item<br>";
    }
}
