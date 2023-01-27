<?php
function get_password($length) {
    $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
 $uppercase = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
 $numbers = ['1','2','3','4','5','6','7','8','9'];
 $symbols = ['@','#','*','/','&','%'];

 $all_charaters = array_merge($alphabet, $uppercase, $numbers, $symbols);

  $password = "";
  for($i = 0; $i < $_GET['length']; $i++){
    $random_character_index = rand(0, count($all_charaters) - 1);
    $password .= $all_charaters[$random_character_index];
  }
 

 return [
     "password" => $password
 ];
}

