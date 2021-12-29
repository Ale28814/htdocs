<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- creare una variabile contenente un testo, stampare la lunghezza del paragrafo.
    tramite GET l'utente passa una parola da censurare che dovrò sostituire con tre asterischi. -->

    <?php
    $title = 'esercitazione utilizzando PHP';
    $censure = $_GET['name'];
    $censureTitle = str_replace($censure, '***', $title)
    ?>

    <h1>
        <?php echo $title; ?>
    </h1>

    <p>
        title length:
        <?php echo strlen($title); ?>
    </p>

    <form action="">
        <input type="text" placeholder="insert badword">
    </form>

    <h2>
        <?php echo $censureTitle; ?>
    </h2>

    <p>
        new title length:
        <?php echo strlen($censureTitle); ?>
    </p>
</body>
</html>