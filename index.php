<?php
$result = NULL;
$error = array();

if (isset($_POST['addition'])) {
    if (!empty($_POST['chiffre1']) && !empty($_POST['chiffre2'])) {
        $result = $_POST['chiffre1'] + $_POST['chiffre2'];
    } else {
        $error['addition'] = 'merci de remplir les champs';
    }
}

if (isset($_POST['soustraction'])) {
    if (!empty($_POST['chiffre1']) && !empty($_POST['chiffre2'])) {
        $result = $_POST['chiffre1'] - $_POST['chiffre2'];
    } else {
        $error['soustraction'] = 'merci de remplir les champs';
    }
}

if (isset($_POST['multiplication'])) {
    if (!empty($_POST['chiffre1']) && !empty($_POST['chiffre2'])) {
        $result = $_POST['chiffre1'] * $_POST['chiffre2'];
    } else {
        $error['multiplication'] = 'merci de remplir les champs';
    }
}

if (isset($_POST['division'])) {
    if (!empty($_POST['chiffre1']) && !empty($_POST['chiffre2']) && $_POST['chiffre2'] != 0) {
        $result = $_POST['chiffre1'] / $_POST['chiffre2'];
    } else {
        $error['division'] = 'merci de remplir les champs';
    }
}

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/slate/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <title>Partie 11 php Bonus</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="offset-1 col-10 offset-sm-4 col-sm-4 offset-md-4 col-md-4 offset-lg-4 col-lg-4 registration">
                    <h1>Une calculatrice en PHP</h1>
                    <form action="index.php" method="POST">
                        <input type="number" name="chiffre1" value="0" />
                        <input type="number" name="chiffre2" value="0" />
                        <input type="submit" name="addition" value="+" />
                        <input type="submit" name="soustraction" value="-" />
                        <input type="submit" name="multiplication" value="*" />
                        <input type="submit" name="division" value="/" />
                    </form>
                    <h2>Résultat : <?= $result ?> </h2>
                </div>
            </div>
        </div>
    </body>
</html>