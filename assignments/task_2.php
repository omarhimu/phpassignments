<?php
function removeEvenNumbers($numbers) {
    // Use array_filter to remove even numbers
    $filteredNumbers = array_filter($numbers, function($number) {
        return $number % 2 != 0;
    });
    
    // Print the resulting array
    print_r($filteredNumbers);
}

$numbers = range(1, 10);
removeEvenNumbers($numbers);

?>
