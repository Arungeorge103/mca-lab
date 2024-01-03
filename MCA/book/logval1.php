<?php
$conn=mysqli_connect('localhost','root','','book');
if($conn)
{
    echo"Connected";
}
else
{
    echo"Failed";
}
if($_POST)
{
    if(isset($_POST['name']))
    {
        $name=$_POST['name'];
        $password=$_POST['pass'];
        $q="SELECT * FROM users WHERE name='$name' and password='$password'";
        $s=mysqli_query($conn,$q);
        if(mysqli_num_rows($s)==1)
        {
            header("Location:bookreg.php");
        }
        else
        {
            echo"Login Failed!";
        }
    }
    else
    {
        echo"Invalid username or password!";    
    }
}
else
{
    echo"No Data recieved";
}