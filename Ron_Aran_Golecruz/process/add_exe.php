<?php

// change the value inside quote '' to the directory of your database
include_once('../config/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo '<br>' . $studentNumber    = $_POST['studentNumber'];
    echo '<br>' . $fullName         = $_POST['fullName'];
    echo '<br>' . $midtermGrade     = $_POST['midtermGrade'];
    echo '<br>' . $finalGrade       = $_POST['finalGrade'];
    echo '<br>' . $date_created     = date('Y-m-d');

    $query = "INSERT INTO students (
                            studentNumber, 
                            fullName, 
                            midtermGrade, 
                            finalGrade,
                            date_created) 
            VALUES (
                    '$studentNumber', 
                    '$fullName', 
                    '$midtermGrade', 
                    '$finalGrade', 
                    '$date_created')";

    if (mysqli_query($conn, $query)) {
        echo '<br>' . "User was Added Successfully!";
    }
    else {
        echo '<br>' . "Error: " . $query . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>