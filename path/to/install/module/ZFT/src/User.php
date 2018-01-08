<?php

namespace ZFT;

class User {

public function calculate($var){
   // $var = true;      
 
    if ($var !== null && stripos($var, "42") !== false) {
        return true;
    } else {
        return false;
    }
}

public function sluggify($string, $separator = '-', $maxLength = 96)
    {
        $title = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $title = preg_replace("%[^-/+|\w ]%", '', $title);
        $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
        $title = preg_replace("/[\/_|+ -]+/", $separator, $title);

        return $title;
    }

}