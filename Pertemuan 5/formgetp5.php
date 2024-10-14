<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="formp6.php">
        Nama Lengkap: <input type="text"name="namalengkap"> <br>
        Email: <input type="text"email="email"><br>
        <input type="submit"value="kirim" name="tombol">
    </form>
    <?php
    if (isset($_GET['tombol'])) {
        $nLengkap = $_GET['namalengkap'];
        $email = $_GET['email'];
        echo "Nama Lengkap = ".$nLengkap;
        echo "<br>Email = ".$email;
    }
</body>
</html>