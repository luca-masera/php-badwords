<?php 
echo 'ciao mi chiamo'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="censura.php" method="GET">
        <input type="text" name="testo" placeholder=" testo da inserire">
        <input type="text" name="censura" placeholder="parola non desiderata">
        <input type="submit" value="clicca qui">
        

    </form>
</body>
</html>