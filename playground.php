<?php
$data = [
    'name' => 'Tushar',
    'age' => '23',
    'skills' => ['PHP','Express','Nuxt']
];

file_put_contents('users.json', json_encode($data, JSON_PRETTY_PRINT));

$data = json_decode(file_get_contents('users.json'), true);

$data['name'] = "Tushar Imran Al Manun";

file_put_contents('users.json', json_encode($data, JSON_PRETTY_PRINT));

