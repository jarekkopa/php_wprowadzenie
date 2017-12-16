<?php
$userRole = 2;
$userRole = 1;
$userRole = 0;

if ($userRole == 2){
    echo 'admin';
}

if ($userRole == 2 || $userRole == 1){
    echo 'moderator';
}

echo 'user';
