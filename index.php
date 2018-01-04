<?php

require __DIR__.'/autoload.php';

$db = new \App\Db();
$data  = $db->query('select * from foo');
var_dump($data);

