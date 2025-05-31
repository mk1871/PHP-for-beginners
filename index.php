<?php

require 'functions.php';
require 'Database.php';
//require 'router.php';

// connect to our MariaDB database and execute a query
$config = require 'config.php';

// variable para Linux
//$db    = new Database($config['database'], 'root', 'firstdb2025.');


// Variable para Windows
$db    = new Database($config['database'], 'root', 'password');
$id = ($_GET['id']);

$query = "select * from posts where id = :id";

//dd($query);

$posts = $db->query($query, ['id' => $id])->fetch();



dd($posts);
