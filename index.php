<?php

require 'functions.php';
require 'Database.php';
//require 'router.php';

// connect to our MariaDB database and execute a query
$config = require 'config.php';

$db    = new Database($config['database'], 'root', 'firstdb2025.');
$posts = $db->query('select * from posts')->fetchAll();

dd($posts);
