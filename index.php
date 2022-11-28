<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hex encode</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Azeret+Mono:wght@500&family=Rubik+Mono+One&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="card">
        <form action="index.php" method="post">
            <h2>String:<h2>
            <textarea name="str" cols="30" rows="10" placeholder="Tempelkan string yang akan di konversi ke hexadecimal di sini"></textarea>
            <br>
            <input type="submit" value="submit">
        </form>
        <br>
        <h2>Hasil:</h2>
        <textarea name="hasil"cols="30" rows="10" placeholder="Hasil konversi akan muncul di sini"><?php echo bin2hex($_POST["str"]);?></textarea><br>
    </div>
    <div class="footer-content">
        <p>Tools konversi Teks ke hexadecimal</p>
        <p>Tools By GreyMedia.ID</p>
    </div>
</body>
</html>