<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
    <h1>SELAMAT DATANG!</h1>
    <h2>Terima Kasih Telah Bergabung Di Website Kami. Media Belajar Kami Bersama.</h2>
    <?php 
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $gender= isset ($_POST['gender']) ?  $_POST['gender']: "tidak ada";
    $country=$_POST["country"];
    $bahasa = isset ($_POST["bahasa"]) ? implode(", ", $_POST["bahasa"]) :"Tidak ada";
    $bio = $_POST["bio"];

    ?>
    <div>
        <p>nama depan:<?=$fname?></p>
        <p>nama belakang:<?=$lname?></p>
        <p>Gender:<?=$gender?></p>
        <p>Nationality:<?=$country?></p>
        <p>Bahasa:<?=$bahasa?></p>
        <p>Bio:<?=$bio?></p>
    </div>
</body>
</html>