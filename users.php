<?php

$users = [
    [
        'name' => 'Arkadiusz',
        'birthYear' => 1977,
        'hobby' => 'stamps',
        'sport' => 'basketball',
        'occupation' => 'programmer',
        'status' => 'hidden',
    ],
    [
        'name' => 'Nadia',
        'birthYear' => 1988,
        'hobby' => 'sport',
        'sport' => 'volleyball',
        'occupation' => 'singer',
        'status' => 'activated',
    ],
    [
        'name' => 'Klara',
        'birthYear' => 1988,
        'hobby' => 'sport',
        'sport' => 'volleyball',
        'occupation' => 'programmer',
        'status' => 'disabled',
    ],
    [
        'name' => 'Juliusz',
        'birthYear' => 1984,
        'hobby' => 'sport',
        'sport' => 'sqush',
        'occupation' => 'programmer',
        'status' => 'activated',
    ],
];

$newUsers = [];

foreach($users as $user){
        //var_export($user);
        //var_export($user['status']);
        if($user['status'] === 'hiden'){
            continue;
        }
        if($user['status'] === 'disabled'){
            continue;
        }
        if($user['birthYear'] < 1987){
            continue;
        }
        $newUsers[] = $user;
};
var_export($newUsers);