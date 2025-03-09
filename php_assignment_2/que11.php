<?php
function removeDuplicates($array) {
    return array_values(array_unique($array));
}

// Example usage:
$inputArray = array("apple", "banana", "apple", "orange", "banana");
$resultArray = removeDuplicates($inputArray);

print_r($resultArray);
?>
// output is :Array ( [0] => apple [1] => banana [2] => orange )    