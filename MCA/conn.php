<?php
$conn=mysqli_connect('localhost','root','','arun1');
if($conn)
{
    echo "Connection Successful";
}
else
{
    echo "Connection Failed";
}
?>