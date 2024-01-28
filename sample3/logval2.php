<?php
$conn=mysqli_connect('localhost','root','','student2');
if($_POST)
{
    if(isset($_POST['name']))
    {
        $username=$_POST['name'];
        $password=$_POST['pass'];
        $p="select * from login2 where username='$username' and password='$password'";
        $q=mysqli_query($conn,$p);
        if((mysqli_num_rows($q))==1)
        {
            header("Location:home2.php");
        }
        else
        {
            echo"Invalid Username or password";
        }
    }
    else
    {
        echo"No username recieved";
    }
}
else
{
    echo"No data recieved";
}
?>