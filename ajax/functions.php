<?php

function XOR_encrypt($message, $key){
	//iconv("UTF-8", "ASCII", $text) 
	
  $message = iconv("UTF-8", "ASCII", $message);
  $key = iconv("UTF-8", "ASCII", $key);
	
	
  $ml = strlen($message);
  $kl = strlen($key);
  $newmsg = "";

  for ($i = 0; $i < $ml; $i++){
    $newmsg = $newmsg . ($message[$i] ^ $key[$i % $kl]);
  }

  return base64_encode($newmsg);
}

function XOR_decrypt($encrypted_message, $key){
  $msg = base64_decode($encrypted_message);
 
 $msg = iconv("UTF-8", "ASCII", $msg);
 $key = iconv("UTF-8", "ASCII", $key);
  
  $ml = strlen($msg);
  $kl = strlen($key);
  $newmsg = "";

   for ($i = 0; $i < $ml; $i++){
    $newmsg = $newmsg . ($msg[$i] ^ $key[$i % $kl]);
  }

  return $newmsg;
}
?>