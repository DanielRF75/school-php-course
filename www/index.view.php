<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
    
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
                <a href="<?= $book['url'] ?>">
                    <li> <?= $book['title'] ?> </li>
                </a>
        <?php endforeach; ?>

    </ul>
</body>
</html>