<?php
$students = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

// Calculate the class average
$total = 0;
foreach ($students as $student) {
    $total += $student[1];
}
$class_average = $total / count($students);

// Find and display students with grades above the class average
echo "Students with grades above the class average ($class_average):<br>";
foreach ($students as $student) {
    if ($student[1] > $class_average) {
        echo "Name: {$student[0]}, Grade: {$student[1]}<br>";
    }
}
?>
