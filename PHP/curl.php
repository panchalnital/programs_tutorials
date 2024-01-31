<?php
/*

 In PHP, you can use the cURL (Client URL) library to make HTTP requests. Here's a basic example of a cURL request in PHP

curl_init() initializes a cURL session.
curl_setopt() is used to set various options for the cURL session, such as the URL, whether to return the response as a string, and SSL verification.
curl_exec() executes the cURL session and fetches the response.
curl_errno() checks for cURL errors, and curl_error() retrieves the error message if there is an error.
curl_close() closes the cURL session.
*/

$url="http://www.example.com/api/v2/employee.php";
$data=array('name'=>'shiv','address'=>'Nifinity',
"username"=>"abc123",
"password"=>'1234');

$username='ABC';
$password='XYZ';

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CUROPT_RETURNTRANFER,TRUE);
curl_setopt($ch,CURLOPT_FIFELDS,$data);
curl_setopt($ch,CURLOPT_SSL_VERFICATION,TRUE);
curl_setopt($ch,CURLOPT_USERPWD,"$username:$password");
curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Set

$res=curl_exec($ch);
if(curl_error($res)){
    echo curl_error();
}
curl_close($ch);

?>