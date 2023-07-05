$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
header("Location: https://lord-of-the-iot.github.io/tools/gif_ip_grabber/hello.gif"); 
exit();
