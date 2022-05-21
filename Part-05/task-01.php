<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 01</title>
</head>
<body>
    <p>Komentar dan saran anda sangat kami butuhkan<br />Untuk meningkatkan kualitas situs kami</p>
    <hr />
    <form action="task-01-post.php" method="POST">
        <p>Nama Anda : <input type="text" name="nama" placeholder="Jhon Doe"></p>
        <p>Email Anda : <input type="email" name="email" placeholder="email@example.com"></p>
        <p>Komentar Anda : <textarea  type="text" name="komen" placeholder="Komentar"></textarea></p>
        <input type="submit" value="kirim"> <input type="reset" value="batal">
    </form>
</body>
</html>