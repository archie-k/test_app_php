<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';


// $posts = $statement->fetch(PDO::FETCH_ASSOC);
// dd($posts);
// echo "<li>" . $posts["title"] . "</li>";




$db = new Database;

$posts = $db->query("select * from posts")->fetch(PDO::FETCH_ASSOC);

// dd($posts);

