<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form method="post" action="">
        <label for="test1">English:</label>
        <input type="number" id="test1" name="test1" required>
        <br><br>
        <label for="test2">Math Mark:</label>
        <input type="number" id="test2" name="test2" required>
        <br><br>
        <label for="test3">Bangla Mark:</label>
        <input type="number" id="test3" name="test3" required>
        <br><br>
        <input type="submit" value="Calculate">
    </form>

<?php

function calculateGrade($marks = []) {
   
    if (empty($marks) || !is_array($marks)) {
        return ["average" => 0, "grade" => "Invalid Input"];
    }

  
    $total = array_sum($marks);
   
    $average = $total / count($marks);


    if ($average >= 80 && $average <= 100) {
        $grade = 'A+';
    } elseif ($average >= 70 && $average <= 79) {
        $grade = 'A';
    } elseif ($average >= 60 && $average <= 69) {
        $grade = 'A-';
    } elseif ($average >= 50 && $average <= 59) {
        $grade = 'B';
    } elseif ($average >= 40 && $average <= 49) {
        $grade = 'C';
    } elseif ($average >= 33 && $average <= 39) {
        $grade = 'D';
    } elseif ($average <= 32 && $average >= 0) {
        $grade = 'F';
    } else {
        $grade = "Invalid Input";
    }

    return ["average" => round($average, 2), "grade" => $grade];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $test1 = $_POST["test1"];
    $test2 = $_POST["test2"];
    $test3 = $_POST["test3"];


    $result = calculateGrade([$test1, $test2, $test3]);

    echo "<p>Average Score: {$result['average']}</p>";
    echo "<p>Grade: {$result['grade']}</p>";
}
?>
</body>
</html>
