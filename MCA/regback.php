<?php
$conn=mysqli_connect('localhost','root','','arun1');
if($conn)
{
    echo"Connected";
}
else
{
    echo"connection failed";
}
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['pass'];
$repassword=$_POST['repass'];
if($password!=$repassword)
{
    echo"Passwords do not match!!";
}
else
{
    $q = "INSERT INTO login VALUES('$name','$age','$email','$phone','$password')";
    $sq=mysqli_query($conn,$q);
    if($sq)
    {
        echo "<script>
        alert('Insertion Successful')
        </script>";
    }  
    else
    {
        echo"<script>
             alert('Insertion Failed')
             </script>";
    }     
}
?>



