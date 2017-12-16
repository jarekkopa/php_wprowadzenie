<?php
if($userRole === 2){
    echo 'admin';
} elseif($userRole === 1){
    echo 'moderator';
} else {
    echo 'user';
}