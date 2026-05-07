<?php

$email = $_POST["email"];
$password = $_POST["password"];

$correctEmail = "b251210593@ogr.sakarya.edu.tr";
$correctPassword = "b251210593";

?>

<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Sonucu</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <div class="card p-5 shadow text-center">

<?php

if($email == $correctEmail && $password == $correctPassword){

    echo "<h1>Hoşgeldiniz</h1>";

    echo "<p>Giriş başarılı.</p>";

}
else{

    echo "<h1>Hatalı giriş yaptınız!</h1>";

    echo "<p>Email veya şifre yanlış.</p>";

}

?>

    </div>

</div>

</body>

</html>