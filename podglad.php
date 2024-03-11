<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/chrupek.png">
    <title>CHRUPINGO</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>    
    <main id="main">
        <?php 
            include "load_podglad.php";
        ?>
        <h1>CHRUPINGO</h1>
        <h2 id="info">Sprawdź swoje wyniki:</h2>
        <table class="bingo">
            <tr>
                <td id="col1" class="niezaznaczone"><?php load_preds("col1"); ?></td>
                <td id="col2" class="niezaznaczone"><?php load_preds("col2"); ?></td>
                <td id="col3" class="niezaznaczone"><?php load_preds("col3"); ?></td>
            </tr>
            <tr>
                <td id="col4" class="niezaznaczone"><?php load_preds("col4"); ?></td>
                <td id="col5" class="niezaznaczone"><?php load_preds("col5"); ?></td>
                <td id="col6" class="niezaznaczone"><?php load_preds("col6"); ?></td>
            </tr>
            <tr>
                <td id="col7" class="niezaznaczone"><?php load_preds("col7"); ?></td>
                <td id="col8" class="niezaznaczone"><?php load_preds("col8"); ?></td>
                <td id="col9" class="niezaznaczone"><?php load_preds("col9"); ?></td>
            </tr>
        </table>
    </main>
    
</body>
</html>
