<?php
    $paragrafo = $_GET["paragrafo"];

    $censuraP = $paragrafo;


    $censura = $_GET["censura"];


    $lengthP = str_replace(' ', '', $paragrafo);
    $realLengthP = strlen($lengthP);

    
    /*
    echo '<pre>';
    var_dump($paragrafo);
    echo '</pre>';

    echo '<pre>';
    var_dump($censura);
    echo '</pre>';
    */

    $arrayP = explode(' ', $censuraP);

    /*
    echo '<pre>';
    var_dump($arrayP);
    echo '</pre>';
    */

    $censuredText = str_replace($censura, '***', $arrayP);

    /*
    echo '<pre>';
    var_dump($censuredText);
    echo '</pre>';
    */

    $tryImplode = implode(' ', $censuredText);

    $tryImplodeLength = str_replace(' ', '', $tryImplode);
    $langBadP = strlen($tryImplodeLength);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <link rel="stylesheet" href="./style/style.css">
    
</head>
<body>
    <main>

        <p><?php echo $paragrafo; ?></p>
        <p><?php echo 'è lungo ' . $realLengthP . ' caratteri'; ?></p>

        <p><?php echo $tryImplode; ?></p>
        <p><?php echo 'è lungo ' . $langBadP . ' caratteri'; ?></p>

    </main>
</body>
</html>