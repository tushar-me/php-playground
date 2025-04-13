<?php
$users = json_decode(file_get_contents('users.json'), true);

// filtert all developers
$developer = array_filter($users, fn($user) => $user['role'] === 'developer');

print_r($developer);


