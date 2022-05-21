<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 01</title>
</head>
<body>
    <h2>Rumus - Rumus</h2>
    <form action="task-01-post.php" method="POST">
        <table border="1">
            <tr>
                <td>Nilai 1</td>
                <td><input name="n1" type="number"></td>
            </tr>
            <tr>
                <td>Nilai 2</td>
                <td><input name="n2" type="number"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="radio" name="rumus" value="rumus1" />Segitiga
                    <br />
                    <input type="radio" name="rumus" value="rumus2" />Persegi Panjang
                </td>
            </tr>
        </table>
        <input type="submit" value="Hitung">
        <input type="reset" value="Batal">
    </form>
</body>
</html>