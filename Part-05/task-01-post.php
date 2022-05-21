<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 01 Post</title>
</head>
<body>
    <h1>Data komentar anda</h1>
    <hr />
    <?php
    $nama=$_POST ["nama"];
    $email=$_POST ["email"];
    $komen=$_POST ["komen"];
    
    echo "Nama Anda : $nama<br />";
    echo "Email Anda : $email<br />";
    echo "Komentar Anda : $komen<br />";
    ?>
    <a href="task-01.php">Input data lagi</a>
</body>
</html>