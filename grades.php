<?php
fwrite(STDOUT, 'What is your name? ');
$studentName = fgets(STDIN);
$subjects = [];
do {
    fwrite(STDOUT, 'Subject: ');
    $name = trim(fgets(STDIN));
    fwrite(STDOUT, 'Grade: ');
    $grade = trim(fgets(STDIN));
    $subjects[] = ['name' => $name, 'grade' => $grade];
    fwrite(STDOUT, 'Another subject? (y or n) ');
    $answer = trim(fgets(STDIN));
} while ($answer === 'y');
$myGrades = [];
foreach ($subjects as $array) {
    $myGrades[] = (int)$array['grade'];
}
function calculateAverage(Array $numbers)
{
    $total = 0;
    foreach($numbers as $number) {
        $total += $number;
    }
    $average = $total / count($numbers);
    return $average;
}
$studentsAverage = calculateAverage($myGrades);
echo round($studentsAverage, 2) . PHP_EOL;
if ($studentsAverage >= 80) {
    echo 'You\'re Awesome!' . PHP_EOL;
} else {
    echo 'You\'re pretty dumb :(' . PHP_EOL;
}