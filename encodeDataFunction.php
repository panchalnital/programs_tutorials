<?php
//1)  htmlentities() This function will convert characters to HTML entities like < , > or “ 
$str = "<a href='https://canopas.com'>Let's explore</a>";
$str1=htmlentities($str); // &lt;a href=&#039;https://canopas.com&#039;&gt;Let&#039;s explore&lt;/a&gt;
error_log(htmlentities($str));

//2)  html_entity_decode() It is reverse function for htmlentities() . Means it converts HTML entities to characters.
echo "<br>";
error_log(html_entity_decode($str1));

//3)Encode : convert_uuencode()
//This function encodes strings using uuencode algorithm.
//This encoding is a form of binary-to-text conversion in the Unix system. 
//It is used for encoding and decoding files exchanged between users or systems in a network.

$strue = 'We move fast and break things!!';
$strue1=convert_uuencode($strue);
error_log($strue1);
$strud1=convert_uudecode($strue1);
error_log($strud1);

//urlencode()
//Returns a string in which all non-alphanumeric characters except -_. have been replaced with a percent (%) sign followed 
//by two hex digits and spaces encoded as plus (+) signs. 

echo $urlen=urlencode("https://canopas.com?data=test");
echo "<\n>".urldecode($urlen);


echo strip_tags("Hello <b>world!</b>");
//The strip_tags() function strips a string from HTML, XML, and PHP tags.

//Note: HTML comments are always stripped. This cannot be changed with the allow parameter.

//Note: This function is binary-safe.

//Base64
//Base64 conversion is used for securing data over the network. 
//Here is a nice explanation for why base64 is used for.

$strbase64 = 'We do what matters the most!!';
echo $strbase64e=base64_encode($strbase64);
echo "\n ".base64_decode($strbase64e);
//utf8_encode Encode: utf8_encode()
//This function encodes an ISO-8859–1 string to UTF-8. learn more about it on

//convert the script to in string code 

$htmlspecial="<script>alert('test')</script>";
echo htmlspecialchars($htmlspecial);

//------------------------------------------------------------------------------------
echo "\n ";
// (A) PHP PASSWORD HASH
$start = microtime(true);
$clear = "MyPassw@rd!23";
$hash = password_hash($clear, PASSWORD_DEFAULT);
$endA = microtime(true);
$verified = password_verify("MyPassw@rd!23", $hash);
$endB = microtime(true);

$tenc = $endA - $start;
$tdec = $endB - $endA;
$ted = $tenc + $tdec;
echo "PHP password_hash() + password_verify()<br>";
echo "Time taken to encode = " . $tenc . " sec <br>";
echo "Time taken to verify = " . $tdec . " sec <br>";
echo "Total time taken = " . $ted . " sec <br><br>";

// (B) OPENSSL (AES-128-ECB)
$text = "this is testing";
$cipher = "AES-128-ECB";
$secert="1234567890123456";//16 bite
$enchash = openssl_encrypt($text, $cipher,$secert);

$decrypt = openssl_decrypt($enchash,$cipher,$secert);


// 
// (B) OPENSSL (AES-256-CBC)
$text = "this is testing";
$cipher = "AES-256-CBC";
$secert="12345678901234567890123456789012";//32 bite
$option=0;
$iv=str_repeat("0",openssl_cipher_iv_lenght($cipher));
$enchash = openssl_encrypt($text, $cipher,$secert,$option,$iv);

$decrypt = openssl_decrypt($enchash,$cipher,$secert,$option,$iv);


$tenc = $endA - $start;
$tdec = $endB - $endA;
$ted = $tenc + $tdec;
echo "OpenSSL 128-bit AES<br>";
echo "Time taken to encode = " . $tenc . " sec <br>";
echo "Time taken to verify = " . $tdec . " sec <br>";
echo "Total time taken = " . $ted . " sec <br><br>";

// (C) CRYPT
$start = microtime(true);
$clear = "MyPassw@rd!23";
$salt = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 14);
$hash = crypt($clear, $salt);
$endA = microtime(true);
$verified = hash_equals($hash, crypt($clear, $hash));
$endB = microtime(true);

$tenc = $endA - $start;
$tdec = $endB - $endA;
$ted = $tenc + $tdec;
echo "Salted Crypt + Hash Equals<br>";
echo "Time taken to encode = " . $tenc . " sec <br>";
echo "Time taken to verify = " . $tdec . " sec <br>";
echo "Total time taken = " . $ted . " sec <br><br>";

// (D) SALTY MD5 
$start = microtime(true);
$clear = "MyPassw@rd!23";
$salt = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 14);
$hash = $salt . md5($salt . $clear);
$endA = microtime(true);
$dbSalt = substr($hash,0,14);
$dbPass = substr($hash,14);
$verified = md5($dbSalt . $clear) == $dbPass;
$endB = microtime(true);

echo "MD5 Salted<br>";
echo "Time taken to encode = " . $tenc . " sec <br>";
echo "Time taken to verify = " . $tdec . " sec <br>";
echo "Total time taken = " . $ted . " sec <br><br>";

//error handing in 
header('HTTP/1.1 503 Service Temporarily Unavailable');
header('Status: 503 Service Temporarily Unavailable');
header('Retry-After: 300');//300 seconds



/*
strip_tags(): Removes HTML and PHP tags from a string. It is designed to sanitize user input or text containing markup tags to prevent security vulnerabilities. The function accepts two parameters and returns a string with all NULL bytes, HTML, and PHP tags stripped from a given $str.
htmlspecialchars(): Converts special HTML entities back to characters. It can be used when the input is allowed to contain HTML that you want to be able to display as such in the web page.
htmlentities(): Converts all applicable characters to HTML entities.
html_entity_decode(): Converts HTML entities in the string to their corresponding characters
 */
?>