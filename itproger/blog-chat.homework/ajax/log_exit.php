<?php

// Удаление куки log_name из браузера
setcookie('log_name', '', time()-3600*24*30, "/");
// Удаляю значение из глобального массива $_COOKIE['log_name']
unset($_COOKIE['log_name']);

// Удаление куки log_email из браузера
setcookie('log_email', '', time()-3600*24*30, "/");
// Удаляю значение из глобального массива $_COOKIE['log_email']
unset($_COOKIE['log_email']);

// Удаление куки log_login из браузера
setcookie('log_login', '', time()-3600*24*30, "/");
// Удаляю значение из глобального массива $_COOKIE['log_login']
unset($_COOKIE['log_login']);