
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $testoVariabile=$_GET["testo"];
    $parola=$_GET["censura"];
    echo $testoVariabile . $parola;
    echo strlen ($testoVariabile);
    echo str_replace ($parola, '***', $testoVariabile );
    
    ?>
</body>
</html>