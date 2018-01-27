<?php

declare(strict_types=1);

// 1. Tworzy pojedynczy plik
// $poster = file_get_contents('https://upload.wikimedia.org/wikipedia/en/4/4f/The_Hobbit_-_The_Desolation_of_Smaug_theatrical_poster.jpg');

// file_put_contents('posters/The_Hobbit_-_The_Desolation_of_Smaug_theatrical_poster.jpg', $poster);

// 2. pobieramy plakaty

$log1 = 'Rozpoczęcie pobierania: ';
$log2 = 'Zakoczenie pobierania: ';
$date = date('Y-m-j h:i:s');

$titles = ['Piraci z Karaibów', 'Ring', 'Blade Runner 2049', 'Thor', 'Get Out', 'Star Wars: Last Jedi', 'Okja', 'London', 'Tarzan', 'The Founder', 'Kapitan Ameryka: Civil War', 'Spectre'];

for ($i=1; $i < 13; $i++)
{
    // $i - nazwa pod jaką jest zapisyany plik; $img - wskazuje jaki plik jest zapisywany
    $imgType = "plakat";
    $img = file_get_contents("https://cytaty.eu/img/sda/posters/". $i . ".jpg");
    file_put_contents('logs/filmoteka.log', " Data: ".$date." - ".$log1. $titles[$i-1]." - ".$imgType.PHP_EOL,FILE_APPEND);
    file_put_contents('posters/'.$i.".jpg", $img); 
    file_put_contents('logs/filmoteka.log', " Data: ".$date." - ".$log2. $titles[$i-1]." - ".$imgType.PHP_EOL,FILE_APPEND);
}
// 3. Pobieramy ujęcia
for($i = 1; $i < 13; $i++)
{
    $imgType = 'Shot';
    $img = file_get_contents("https://cytaty.eu/img/sda/shots/".$i.".jpg");
    file_put_contents('logs/filmoteka.log', " Data: ".$date." - ".$log1. $titles[$i-1]." - ".$imgType.PHP_EOL,FILE_APPEND);
    file_put_contents('shots/'.$i.".jpg", $img);
    file_put_contents('logs/filmoteka.log', " Data: ".$date." - ".$log2. $titles[$i-1]." - ".$imgType.PHP_EOL,FILE_APPEND);
}