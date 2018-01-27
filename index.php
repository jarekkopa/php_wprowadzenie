<?php

declare(strict_types=1);

$poster = file_get_contents('https://upload.wikimedia.org/wikipedia/en/4/4f/The_Hobbit_-_The_Desolation_of_Smaug_theatrical_poster.jpg');

file_put_contents('posters/The_Hobbit_-_The_Desolation_of_Smaug_theatrical_poster.jpg', $poster);

for($i = 1; $i < 13; $i++)
{
    $img = file_get_contents("https://cytaty.eu/img/sda/posters/".$i.".jpg");
    file_put_contents('posters/'.$i.".jpg", $img);
}
