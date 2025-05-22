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
$posts = $db->query('select * from posts')->fetchAll();

dd($posts);
