<?php
$connect=mysqli_connect('localhost','root','123','mydatabase');

if(mysqli_connect_errno($connect))
{
echo'failed to connect';
}
?>