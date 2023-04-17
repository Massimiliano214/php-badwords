<?php
    $paragrafo = $_GET["paragrafo"];
    $censura = $_GET["censura"];

    $langP = strlen($paragrafo);

    $censuraP = $paragrafo;

    echo '<pre>';
    var_dump($paragrafo);
    echo '</pre>';

    echo '<pre>';
    var_dump($censura);
    echo '</pre>';

    $arrayP = explode(' ', $paragrafo);

    echo '<pre>';
    var_dump($arrayP);
    echo '</pre>';

    str_replace($censura, '***', $censuraP);

    echo '<pre>';
    var_dump($censuraP);
    echo '</pre>';
    

    $langBadP = strlen($censuraP);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    
</head>
<body>
    <main>

        <p><?php echo $paragrafo; ?></p>
        <p><?php echo 'è lungo ' . $langP . ' caratteri'; ?></p>

        <p><?php echo $censuraP; ?></p>
        <p><?php echo 'è lungo ' . $langBadP . ' caratteri'; ?></p>

    </main>
</body>
</html>