<?php
$birthYear = 1987;

switch ($birthYear%12) {
    case 0:
        echo 'małpa';
        break;
    case 1:
        echo 'koguta';
        break;
    case 2:
        echo 'psa';
        break;
    case 3:
        echo 'świnia';
        break;
    case 4:
        echo 'szczur';
        break;
    case 5:
        echo "bawół";
        break;
    case 6:
        echo "tygrys";
        break;
    case 7:
        echo "królik";
        break;
    case 8:
        echo "smok";
        break;
    case 10: 
        echo 'wąż';
        break;
    case 11:
        echo 'kon';
        break;
    default:
        echo "owca";
        break;
}