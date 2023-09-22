<?php

/**
 * 1 : How Attackers Perform Sql injection?
 * 2 : How to avoid Sql injection ?
 * 3 : how to write prepared statments?
 * 4 : how to avoid display errors in live application
 * 5 : how attackers perfom cross-site scripting
 * 6 : how attackers steal cookies
 * 7 : what is corss-site request forgery
 * 8 : how write regular expression
 * 9 : how  to validate user input  using regular expression
 *
 * 
 * 
 * 1 cross-site scripting: (XSS) attacks are a type of injection, in which malicious scripts are injected into otherwise benign and trusted websites 
 * 
 *  Data Theft: Attackers can steal sensitive information, such as login credentials or session cookies, from users who unwittingly execute the malicious scripts.

*    Session Hijacking: By stealing session cookies, attackers can impersonate users and gain unauthorized access to their accounts.
*    Malware Distribution: Malicious scripts can redirect users to websites containing malware, leading to malware infections.
*    Defacement: Attackers can modify the content of web pages, defacing a website or spreading false information.

*    XSS attacks can be classified into three main types:
*    Stored XSS: Malicious scripts are permanently stored on a web server, and when a user visits a page containing the injected script, it's executed.
*    Reflected XSS: The injected script is reflected off a web server and executed immediately when a user visits a manipulated URL. This type often involves tricking users into clicking on malicious links.
*   DOM-based XSS: The attack occurs on the client-side, where the DOM (Document Object Model) is manipulated by the injected script.

*  To prevent XSS attacks, web developers should employ secure coding practices, such as input validation and output encoding, to sanitize user input and prevent the execution of malicious scripts. Additionally, implementing security mechanisms like Content Security Policy (CSP) can help mitigate the risk of XSS. */
     $pre_stmt=$con->prepare('inert into conatct(name,message) VALUES(?,?)');
     $name=htmlspecialchars($_post['name']); //This function returns the converted string. If there is an invalid input string then an empty string will be returned. 
     $message=htmlspecialchars($_post['message']);
     $pre_stmt->bind_param("ss",$name,$message);
     $pre_stmt->execute();

/*
 * 1 type in <script>alert('hey ,if you can stop me to then stop')</script> 
 * 2 type in <script>window.location="http://www.google.com"</script> 
 *  
 * $str = "<a href='https://canopas.com'>Let's explore</a>";
 *  $str1=htmlentities($str); //convert special characters and html tag to convert special entiti charater 
 *  < to &lt;
 *  " to &quot
 *  > &gt;
 * html_enitty_decode(string,flag) //decode htmentites though convert code
 * 
 * vs 
 * htmlspecialchars(string,flag)// & " , < > convert into string 
 * htmlspecialchars_decode(string,flag)//
 */
