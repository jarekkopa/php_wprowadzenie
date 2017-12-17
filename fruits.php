<?php
$fruits = ['Apple', 'Orange', 'Plum'];
$box = [];

for ($i = 0; $i < 2; ++$i){
    foreach ($fruits as $fruit) {
        $boxMax = 2;

        while ($boxMax) {
            //if ($fruit === 'Orange'){
            if ($boxMax === 1){
                //break;//wychodzimy z pętli while (z pętli jeden poziom wyżej )
                //continue;//
                //break 2;//wychodzimy z pętli dwa poziomy wyżej czyli foreach
                //continue 2;//
                //break;
                break 3;
            }
            $box[] = $fruit;
            --$boxMax;
            
        }
    }
}
var_export($box);