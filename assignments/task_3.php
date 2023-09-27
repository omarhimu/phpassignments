<?php
function sortGradesDescending($grades) {
    // Sort the array in descending order
    rsort($grades);
    
    // Print the sorted grades as an array
    print_r($grades);
}

$grades = [85, 92, 78, 88, 95];
sortGradesDescending($grades);

?>
