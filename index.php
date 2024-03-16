<?php

include './config/db.php';

$db->insert('test')
    ->set([
        'meta' => 'test',
        'value' => 'test',
        'user' => 1
    ]);


$db->update('test')
    ->where('id', $db->lastInsertId())
    ->set([
        'meta' => 'test',
        'value' => 'test2',
        'user' => 1
    ]);

var_dump($db->from('test')
    ->where('id', $db->lastInsertId())
    ->all());