<?php
/**
 * Created by PhpStorm.
 * User: Vivek
 * Date: 7/13/2016
 * Time: 1:35 PM
 */

include_once 'configurations.php';
include_once 'victorslib.php';

echo "<h1>Hellow workd</h1>";

$timeStamp= date('Y-m-d h:i:s');

if(!isset($_POST["signup"]))
    die("Something went wrong");
$email=$_POST['useremail'];
$password = $_POST['password'];
$location = $_POST['Location'];
$country = $_POST['country'];
$name =$_POST['username'];
$gender =$_POST['gender'];
$ipAddress= get_client_ip();

echo var_dump($_POST);

$connection = sqlConnect('localhost','root','','myproject');

if(!isset($_POST["signup"]))
    die("Something went wrong");

$sqlQuery = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `gender`, `country`, `userlevel`, `avatar`, `signup`, `lastlogin`, `notescheck`, `activated`, `ip`)".
                         "VALUES (NULL, '$email', '$password', '$email', '$gender', '$country', 'a', 'image', '$timeStamp', '$timeStamp', '$timeStamp', '0', '$ipAddress');";

$result= $connection->query($sqlQuery);

Redirect('../home.php');

echo var_dump($result);