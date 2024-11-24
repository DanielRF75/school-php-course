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
                "url" => "http://la_odisea",
                "year" => 1234
            ],
            [
                "title" => "La dama de las camelias",
                "author" => "nose",
                "url" => "http://la_dama",
                "year" => 2345
            ],
            [
                "title" => "El Quijote",
                "author" => "Cerbantes",
                "url" => "http://El_Quijote",
                "year" => 1637
            ],
            [
                "title" => "Alicia en el pais de las maravillas",
                "author" => "nose",
                "url" => "http://Alicia",
                "year" => 3425
            ]
        ];
        
        //No se usa !!!
        function filter($items, $fn){
            $filteredItems = [];
            foreach ($items as $item) {
                if($fn($item)){
                    $filteredItems[] = $item;
                }
            }     
            return $filteredItems;       
        }


        $filteredBooks = array_filter($books, function ($book) {
            return $book['year'] === 1234;
        })

    ?>
    
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
                <a href="<?= $book['url'] ?>">
                    <li> <?= $book['title'] ?> </li>
                </a>
        <?php endforeach; ?>

    </ul>
</body>
</html>