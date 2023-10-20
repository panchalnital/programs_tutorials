

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


=====================
session_abort — Discard session array changes and finish session
session_cache_expire — Get and/or set current cache expire
session_cache_limiter — Get and/or set the current cache limiter
session_commit — Alias of session_write_close
session_create_id — Create new session id
session_decode — Decodes session data from a session encoded string
session_destroy — Destroys all data registered to a session
session_encode — Encodes the current session data as a session encoded string
session_gc — Perform session data garbage collection
session_get_cookie_params — Get the session cookie parameters
session_id — Get and/or set the current session id
session_module_name — Get and/or set the current session module
session_name — Get and/or set the current session name
session_regenerate_id — Update the current session id with a newly generated one
session_register_shutdown — Session shutdown function
session_reset — Re-initialize session array with original values
session_save_path — Get and/or set the current session save path
session_set_cookie_params — Set the session cookie parameters
session_set_save_handler — Sets user-level session storage functions
session_start — Start new or resume existing session
session_status — Returns the current session status
session_unset — Free all session variables
session_write_close — Write session data and end session

session_start()
$_SESSION['last_access']


session_destroy()
