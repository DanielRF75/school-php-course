<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php
        $books = [
            [
                "title" => "La odisea",
                "author" => "Homero",
                "url" => "http://la_odisea"
            ],
            [
                "title" => "La dama de las camelias",
                "author" => "nose",
                "url" => "http://la_dama"
            ],
            [
                "title" => "El Quijote",
                "author" => "Cerbantes",
                "url" => "http://El_Quijote"
            ],
            [
                "title" => "Alicia en el pais de las maravillas",
                "author" => "nose",
                "url" => "http://Alicia"
            ]
        ];
        function filterByAuthor($books, $author){
            $filteredBooks = [];
            foreach ($books as $book) {
                if($book['author'] === $author){
                    $filteredBooks[] = $book;
                }
            }     
            return $filteredBooks;       
        }

    ?>
    
    <ul>
        <?php foreach (filterByAuthor($books, 'nose') as $book) : ?>
                <a href="<?= $book['url'] ?>">
                    <li> <?= $book['title'] ?> </li>
                </a>
        <?php endforeach; ?>

    </ul>
</body>
</html>