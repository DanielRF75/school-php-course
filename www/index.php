<?php
require "functions.php";
//require "router.php";

$dns = "mysql:host=contendor_mysql;port=3306;dbname=myapp;charset=utf8mb4";

$pdo = new PDO($dns, "daniel", "dsecret");

$statements = $pdo -> prepare("SELECT * FROM posts");

$statements -> execute();

$posts = $statements->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post["title"] . "</li>";
}