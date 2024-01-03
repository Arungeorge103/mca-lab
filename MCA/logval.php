<?php
$conn=mysqli_connect('localhost','root','','arun1');
if($_POST)
{
    if(isset($_POST['name']))
    {
        $username=$_POST['name'];
        $password=$_POST['pass'];
        $q="SELECT * FROM login WHERE name='$username' and password='$password'";
        $s=mysqli_query($conn,$q);
        if(mysqli_num_rows($s)==1)
        {
            header("Location:homeframes.php");
        }
        else
        {
            echo"Login failed";
        }
    }
    else
    {
        echo"Invalid Username or Password!";
    }
}
else
{
    echo "No data recieved!!";
}
?>