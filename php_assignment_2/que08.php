<?php
// Original array
$array = [1, 2, 3, 4, 5];

// Position to insert the new item
$position = 3;

// New item to insert
$newItem = '$';

// Insert the new item into the array
array_splice($array, $position, 0, $newItem);

// Display the original array
echo "Original array : 1 2 3 4 5\n";

// Display the modified array
echo "After inserting '$' the array is : ";
foreach ($array as $item) {
    echo $item . " ";
}
?>
// output is : Original array : 1 2 3 4 5