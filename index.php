<?php

include './config/db.php';

$db->insert('test')
    ->set([
        'meta' => 'test',
        'value' => time(),
        'user' => 1
    ]);



var_dump($db->from('test')
    ->all());