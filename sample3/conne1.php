<?php
$conn2=mysqli_connect('localhost','root','','student2');
if($conn2)
{
    echo "connection succesfull";
}
else
{
    echo"connection failed";
}
?>