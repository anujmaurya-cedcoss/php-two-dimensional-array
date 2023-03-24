<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- given input array -->
    <?php
    $marks = array(
        "Student 1" => array(
            "Roll" => 101,
            "Maths" => 65,
            "Science" => 94,
        ),
        "Student 2" => array(
            "Roll" => 102,
            "Maths" => 87,
            "Science" => 81,
        ),
        "Student 3" => array(
            "Roll" => 103,
            "Maths" => 91,
            "Science" => 68,
        ),
    );
   
    $mathsTopper = "";
    $mathsMarks = 0;

    $scienceTopper = "";
    $scienceMarks = 0;

    $topper = "";
    $totalMarks = 0;
    foreach ($marks as $student => $prop) {
        if($prop['Maths'] > $mathsMarks) {
            $mathsMarks = $prop['Maths'];
            $mathsTopper = $student;
        }

        if($prop['Science'] > $scienceMarks) {
            $scienceMarks = $prop['Science'];
            $scienceTopper = $student;
        }

        if($prop['Maths'] + $prop['Science']> $totalMarks) {
            $totalMarks = $prop['Maths'] + $prop['Science'];
            $topper = $student;
        }
    }
        echo "Student with highest marks in Maths $mathsTopper <br>";
        echo "Student with highest marks in Science $scienceTopper <br>";
        echo "Student with highest marks in all subjects $topper <br>";
    ?>
</body>

</html>