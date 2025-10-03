<?php
require "CampoDaCalcio.php";
require_once "CampoDaCalcio.php";

$title = 'Crea campo';

if (!empty($_POST)) {
    $nome = $_POST['nome'];
    $spettatori = $_POST['spettatori'];
    $url = $_POST['url'];
    var_dump($nome, $spettatori, $url);

    $nuovoCampo = new CampoDaCalcio($nome, $spettatori, $url);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <style>
        .label {
            display: inline-block;
            width: 100px;
        }

        .form-row {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<h1><?= $title ?></h1>

<form action="" method="post">
    <div class="form-row">
        <span class="label">Nome: </span>
        <input type="text" name="nome">
    </div>
    <div class="form-row">
        <span class="label">Spettatori: </span>
        <input type="number" name="spettatori">
    </div>
    <div class="form-row">
        <span class="label">Url: </span>
        <input type="url" name="url">
    </div>
    <div class="form-row">
        <input type="submit" value="Crea">
    </div>
</form>
</body>
</html>