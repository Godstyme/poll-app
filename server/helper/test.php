<?php


// $bytes = random_bytes(5);
// var_dump(bin2hex($bytes));
function RandomToken($length = 8){
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

function Salt(){
   return substr(strtr(base64_encode(hex2bin(RandomToken(8))), '+', '.'), 0, 44);
}

// echo (RandomToken());
var_dump( RandomToken());
echo "\n";
echo '<br>';
// echo Salt();
var_dump( Salt());
function uniqidReal($lenght = 13) {
   // uniqid gives 13 chars, but you could adjust it to your needs.
   if (function_exists("random_bytes")) {
       $bytes = random_bytes(ceil($lenght / 2));
   } elseif (function_exists("openssl_random_pseudo_bytes")) {
       $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
   } else {
       throw new Exception("no cryptographically secure random function available");
   }
   return substr(bin2hex($bytes), 0, $lenght);
}
echo '<br>';
// echo uniqidReal();







?>