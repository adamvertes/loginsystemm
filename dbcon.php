<?php

//$DB_HOST = 'localhost';
//$DB_USER = 'root';
//$DB_PASS = 'root';
//$DB_NAME = 'login';
//$DB_PORT = '8889';

$DB_HOST = 'adamvertes.com.mysql';
$DB_USER = 'adamvertes_com';
$DB_PASS = 'pxprAQ3B';
$DB_NAME = 'adamvertes_com';
$DB_PORT = '3306';




$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);
//$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);
if ($link->connect_error) { 
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8'); 
?>
