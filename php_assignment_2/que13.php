<?php
function areAllValuesStrings($array) {
    foreach ($array as $value) {
        if (!is_string($value)) {
            return false;
        }
    }
    return true;
}

// Example usage
$testArray = ["apple", "banana", "cherry"];
$result = areAllValuesStrings($testArray);
if ($result) {
    echo "All values are strings.";
} else {
    echo "Not all values are strings.";
}
?>
// output is :All values are strings.