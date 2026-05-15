<?php



$correctEmail = "b251210593@ogr.sakarya.edu.tr";
$correctPassword = "b251210593";

$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";

?>

<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Sonucu</title>

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <div class="card p-5 shadow text-center">

<?php

if ($email === $correctEmail && $password === $correctPassword) {

    echo "<h1>Hoşgeldiniz B251210593</h1>";
 
    echo "<p>Giriş başarılı.</p>";
  
    echo "<a href='index.html' class='btn btn-dark mt-3'>Ana Sayfaya Dön</a>";

} else {

    echo "<h1>Hatalı giriş yaptınız!</h1>";
    echo "<p>Tekrar deneyiniz.</p>";
    echo "<a href='login.html' class='btn btn-danger mt-3'>Tekrar Dene</a>";
}

?>

    </div>

</div>

</body>

</html>