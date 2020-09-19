<?php

global $con;
$con = mysqli_connect('localhost','root','','ajax-crud');
if(!$con)
{
 echo 'unable to connect with db';
 die();
}