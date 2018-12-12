<?php
        $file = fopen( 'users.txt', 'r');
        while (!feof($file)){
            $stroke[] =fgets($file);
        }
        fclose($file);

        foreach ($stroke as $value){
            $substr = explode("\t",$value);
                $arr [] = $substr;
            }

        foreach ($arr as $user){
            foreach ($user as $item=> $value) {
                echo $item.'=>'.$value.'<br>';
            }
        }
        array_pop($arr);


        include 'OutputFile.HTML.php';