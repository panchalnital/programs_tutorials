<?php
?>

setcookie(
    string $name,
    string $value = "",
    int $expires_or_options = 0,
    string $path = "",
    string $domain = "",
    bool $secure = false,
    bool $httponly = false
): bool 

name => The name of the cookie
value => The value of the cookie
expires_or_options => time()+60*60*24*30 will set the cookie to expire in 30 days
path => foo/bar/
domain=> he (sub)domain that the cookie is available to. Setting this to a subdomain (such as        'www. example.com')

secure=>Indicates that the cookie should only be transmitted over a secure HTTPS connection from the client. When set to true, the cookie will only be set if a secure connection exists. On the server-side, it's on the programmer to send this kind of cookie only on secure connection (e.g. with respect to $_SERVER["HTTPS"]).

httponly=>When true the cookie will be made accessible only through the HTTP protocol

setcookie("TestCookie", $value, time()+3600)

echo $_COOKIE["TestCookie"]; //accesss

setcookie() delete example

setcookie() delete example
----------------------------------------------------------------
Laravel 

1: add to Facades
     use Illuminate\Support\Facades\Cookie;

2: Basic Cookie Usage
    $cookie = cookie('user_name', 'John Doe', 60);
3:  Retrieving Cookies
    $userName = request()->cookie('user_name');
4:  Cookie Expiration
    $cookie = cookie('user_name', 'John Doe', -1); 

5: Cookie Security
    $cookie = cookie()->forever('user_name', encrypt('John Doe'));
6: Working with Arrays in Cookies
    $userData = ['name' => 'John Doe', 'email' => 'john@example.com'];
    $cookie = cookie('user_data', serialize($userData))

---------------------------------------------------
Yii

of yii\web\Cookie. Both yii\web\Request and yii\web\Response maintain a collection of cookies via the property named cookies

Reading Cookie
    $cookies = Yii::$app->request->cookies;

    $language = $cookies->getValue('language', 'en');
    $language = $cookie->value;
    $language = $cookies['language']->value;

Sending Cookie
    $cookies = Yii::$app->response->cookies;

    $cookies->add(new \yii\web\Cookie([
    'name' => 'language',
    'value' => 'zh-CN',
    ]));

    // remove a cookie
    $cookies->remove('language');
    // equivalent to the following
    unset($cookies['language']);

--------------------------------------
codeignite

    $this->load->helper('cookie');

    $cookie_data = array(
   'name'   => 'user_id',
   'value'  => '123',
   'expire' => '3600',  // Cookie expiration time in seconds
   'domain' => '.yourdomain.com',
   'path'   => '/',
   'prefix' => 'myprefix_',
   'secure' => TRUE,
   'httponly' => TRUE
);

$this->input->set_cookie($cookie_data);

Reading Cookies:
$user_id = $this->input->cookie('user_id', TRUE);

Deleting Cookies:
delete_cookie('user_id');

<?php

class parant {

  
}

?>