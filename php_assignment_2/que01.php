<?php
function rearrangeArray(&$array) {
    if (empty($array)) {
        return; // Handle empty arrays gracefully
    }
    
    $min = min($array); // Find the smallest value
    $max = max($array); // Find the largest value

    // Remove the smallest and largest values from their original positions
    $minKey = array_search($min, $array);
    unset($array[$minKey]);

    $maxKey = array_search($max, $array);
    unset($array[$maxKey]);

    // Rebuild the array with the smallest and largest values in desired positions
    $array = array_values($array); // Re-index the array
    array_unshift($array, $min);   // Add the smallest value to the front
    $array[] = $max;              // Add the largest value to the back
}

// Example usage
$sampleArray = [12, 4, 56, 7, 89, 1];
rearrangeArray($sampleArray);
print_r($sampleArray);
?>
// output is :Array ( [0] => 1 [1] => 12 [2] => 4 [3] => 56 [4] => 7 [5] => 89 )
