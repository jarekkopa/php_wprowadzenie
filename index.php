<?php

declare(strict_types=1);

// 1. Tworzy pojedynczy plik
// $poster = file_get_contents('https://upload.wikimedia.org/wikipedia/en/4/4f/The_Hobbit_-_The_Desolation_of_Smaug_theatrical_poster.jpg');

// file_put_contents('posters/The_Hobbit_-_The_Desolation_of_Smaug_theatrical_poster.jpg', $poster);

// 2. pobieramy plakaty

$titles = ['Piraci z Karaibow', 'Ring', 'Blade Runner 2049', 'Thor', 'Get Out', 'Star Wars Last Jedi', 'Okja', 'London', 'Tarzan', 'The Founder', 'Kapitan Ameryka Civil War', 'Spectre'];

$log1 = 'Rozpoczęcie pobierania: ';
$log2 = 'Zakoczenie pobierania: ';
$date = date('Y-m-j h:i:s');
$files = file_get_contents('https://cytaty.eu/img/sda/posters/');
$matches = [];
preg_match_all('/href="([0-9]+)\.jpg"/', $files, $matches);
$remoteFileNames = ($matches[1]);

foreach ($remoteFileNames as $remoteFileName)
{
    // $name - nazwa pod jaką jest zapisyany plik; $img - wskazuje jaki plik jest zapisywany
    $imgType = "plakat";
    $img = file_get_contents("https://cytaty.eu/img/sda/posters/". $remoteFileName . ".jpg");
    file_put_contents('logs/filmoteka.log', " Data: ".$date." - ".$log1. $titles[$remoteFileName-1]." - ".$imgType.PHP_EOL,FILE_APPEND);
    $name = str_ireplace(' ', '-', strtolower($titles[$remoteFileName-1]));
    file_put_contents('posters/'.$name.".jpg", $img); 
    file_put_contents('logs/filmoteka.log', " Data: ".$date." - ".$log2. $titles[$remoteFileName-1]." - ".$imgType.PHP_EOL,FILE_APPEND);
}
$files2 = file_get_contents('https://cytaty.eu/img/sda/shots/');
$matches2 = [];
preg_match_all('/href="([0-9]+)\.jpg"/', $files2, $matches2);
$remoteFileNames2 = ($matches2[1]);

foreach ($remoteFileNames2 as $remoteFileName)
{
    // $name - nazwa pod jaką jest zapisyany plik; $img - wskazuje jaki plik jest zapisywany
    $imgType = "shot";
    $img = file_get_contents("https://cytaty.eu/img/sda/shots/". $remoteFileName . ".jpg");
    file_put_contents('logs/filmoteka.log', " Data: ".$date." - ".$log1. $titles[$remoteFileName-1]." - ".$imgType.PHP_EOL,FILE_APPEND);
    $name = str_ireplace(' ', '-', strtolower($titles[$remoteFileName-1]));
    file_put_contents('shots/'.$name.".jpg", $img); 
    file_put_contents('logs/filmoteka.log', " Data: ".$date." - ".$log2. $titles[$remoteFileName-1]." - ".$imgType.PHP_EOL,FILE_APPEND);
}