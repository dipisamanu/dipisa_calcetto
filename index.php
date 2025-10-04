<?php
$title = 'Calcetto';

$sql = "SELECT * FROM campi";
try {
    $pdo = new PDO("mysql:host=localhost;dbname=dipisa_calcetto", "root", "");
} catch (PDOException $e) {
    die("Errore di connessione " . $e->getMessage());
}
$stmt = $pdo->prepare($sql);
$stmt->execute();
$campi = $stmt->fetchAll(PDO::FETCH_ASSOC); //prende tutti i dati e li mette in un arr

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
<h1><?= $title ?></h1>

<a href="crea_campo.php">Crea Campo</a>

<?php foreach ($campi as $campo) { ?>
    <div>
        <div> Nome: <?= $campo["nome"]; ?> </div>
        <div> Spettatori: <?= $campo["spettatori"]; ?> </div>
        <div><img src="<?=$campo["url"]; ?>" style="width: 300px; height=200px"> </div>

    </div>
<?php } ?>

</body>
</html>
