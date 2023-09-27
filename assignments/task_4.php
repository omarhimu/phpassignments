<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $average = array_sum($grades) / count($grades);
        echo "Average grade for $student: $average\n";
    }
}

$studentGrades = [
    'Student1' => [85, 92, 78],
    'Student2' => [88, 95, 90],
    'Student3' => [75, 80, 85]
];

calculateAverageGrades($studentGrades);

?>
