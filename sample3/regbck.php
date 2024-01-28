<html>
<head></head>
<?php
$conn=mysqli_connect('localhost','root','','student2');
$name=$_POST['name'];
$ktu=$_POST['ktuid'];
$sem=$_POST['sem'];
$q="insert into ktu_reg values('$name','$ktu','$sem')";
$p=mysqli_query($conn,$q);
if($p)
{
    echo"<script>
    alert('You have successfully regestered');
    </script>";
}
else
{
    echo"<script>
    alert('Regestration failed');
    </script>";
}
?>
</html>
