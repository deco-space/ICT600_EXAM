<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User's Information</h1>

    <form action="../process/add_exe.php" method="post">

        <div>
            <label for="">Student Number:*</label>
            <input type="text" name="studentNumber" id="">
        </div>

        <div>
            <label for="">Full Name:*</label>
            <input type="text" name="fullName" id="">
        </div>

        <div>
            <label for="">Midterm Grade:</label>
            <input type="text" name="midtermGrade" id="">
        </div>

        <div>
            <label for="">Final Grade:*</label>
            <input type="text" name="finalGrade" id="">
        </div>

        <input type="submit" value="Register">
    </form>
</body>
</html>