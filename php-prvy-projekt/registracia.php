<?php

$meno = null;
$heslo = null;
$vysledok = null;

//DATABASE CONNECTION 
$db = new PDO(
    "mysql:host=localhost;dbname=users;charset=utf8",
    "root",
    "", // heslo
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ),
);

//CREATING ACC AFTER CLICK ON REGISTER BUTTON
if (array_key_exists("zaregistrovat", $_GET)) {
    $meno = $_GET["name"];
    $heslo = $_GET["password"];

// HASING PASSWORD
    $hashed_password = password_hash($heslo, PASSWORD_DEFAULT);
    
//INSERTING INTO DATABASE VALUES FROM INPUTS
    $dotaz = $db->prepare("INSERT INTO `users`(`meno`, `heslo`) VALUES ('$meno','$hashed_password')");
    $dotaz->execute();
    header("Location: ./login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrácia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/registracia.css">
</head>

<body>
<main class="form-signin w-100 m-auto">
  <form method="get">
    
    <h1 class="h3 mb-3 fw-normal" id="hacko">Zaregistrujte sa </h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="login" name="name">
      <label for="floatingInput">Meno</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Heslo</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit" name="zaregistrovat">Zaregistrovat</button>
    <a href="./login.php" id="acko">Máte už účet? Prihláste sa -></a>
  
  </form>
</main>
</body>

</html>