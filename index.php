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
        <form method="GET" action="censura.php">

        <label for="paragrafo">Inserire Paragrafo:</label>
        <input type="text" id="paragrafo" name="paragrafo" placeholder="...">

        <label for="censura">Inserire parola censurata:</label>
        <input type="text" id="censura" name="censura" placeholder="***">

        <button type="submit">Invia</button>
        </form>
    </main>

</body>
</html>