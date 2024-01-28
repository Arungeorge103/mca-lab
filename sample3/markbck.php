<html>
<head></head>
<?php
$conn=mysqli_connect('localhost','root','','student2');
$ktu=$_POST['ktu'];
$seri1=$_POST['seri1'];
$seri2=$_POST['seri2'];
$ass=$_POST['ass'];
$atten=$_POST['atten'];
$q="insert into mark values('$ktu','$seri1','$seri2','$ass','$atten')";
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
