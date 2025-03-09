<?php
function calculateTotalSize($files) {
    $totalSize = 0;
    foreach ($files as $file) {
        $totalSize += $file['size'];
    }
    return $totalSize;
}

function sortFilesBySize($files, $order = 'asc') {
    usort($files, fn($a, $b) => $order === 'asc' ? $a['size'] <=> $b['size'] : $b['size'] <=> $a['size']);
    return $files;
}

// Example usage
$files = [
    ['name' => 'file1.txt', 'size' => 200],
    ['name' => 'file2.txt', 'size' => 100],
    ['name' => 'file3.txt', 'size' => 300]
];

$totalSize = calculateTotalSize($files);
echo "Total size: " . $totalSize . " bytes\n";

$sortedFilesAsc = sortFilesBySize($files, 'asc');
echo "Files sorted by size (ascending):\n";
print_r($sortedFilesAsc);

$sortedFilesDesc = sortFilesBySize($files, 'desc');
echo "Files sorted by size (descending):\n";
print_r($sortedFilesDesc);
?>

// output is :Total size: 600 bytes Files sorted by size (ascending): Array ( [0] => Array ( [name] => file2.txt [size] => 100 ) [1] => Array ( [name] => file1.txt [size] => 200 ) [2] => Array ( [name] => file3.txt [size] => 300 ) ) Files sorted by size (descending): Array ( [0] => Array ( [name] => file3.txt [size] => 300 ) [1] => Array ( [name] => file1.txt [size] => 200 ) [2] => Array ( [name] => file2.txt [size] => 100 ) )