<?php
function grades($marks) {
    if ($marks >= 80) {
        return ["A+", 4.00];
    } elseif ($marks >= 75) {
        return ["A", 3.75];
    } elseif ($marks >= 70) {
        return ["A-", 3.50];
    } elseif ($marks >= 65) {
        return ["B+", 3.25];
    } elseif ($marks >= 60) {
        return ["B", 3.00];
    } elseif ($marks >= 55) {
        return ["B-", 2.75];
    } elseif ($marks >= 50) {
        return ["C+", 2.50];
    } elseif ($marks >= 45) {
        return ["C", 2.25];
    } elseif ($marks >= 40) {
        return ["D", 2.00];
    } elseif ($marks < 40) {
        return ["F", 0.00];
    } else {
        return ["I", "Incomplete"];
    }
}

// Example:
$marks = 88;
$result = grades($marks);
echo "Marks: $marks <br>";
$grade = $result[0];
$point = $result[1];
echo "Grade: " . $grade . "<br>";
echo "Grade Point: " . $point . "<br>";
?>
