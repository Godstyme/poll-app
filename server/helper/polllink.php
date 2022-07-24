<?php

function uniqURL($length = 8){
    if(!isset($length) || intval($length) <= 4 ){
      $length = 8;
    }
    if (function_exists('random_bytes')) {
        return bin2hex(random_bytes($length));
    }
    if (function_exists('openssl_random_pseudo_bytes')) {
        return bin2hex(openssl_random_pseudo_bytes($length));
    }
 }




?>