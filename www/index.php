<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php
        $book = "El principito";
        $readed = false;
            
        if ($readed) {
            $message = "Ha leido $book";
        } else {
            $message = "NO ha leido $book";
        }
    ?>
    <h1>
        <?= $message ?>
    </h1>
</body>
</html>