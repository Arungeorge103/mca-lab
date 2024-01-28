<html>
<head></head>
<?php
$conn=mysqli_connect('localhost','root','','student2');
$q="select * from mark";
$p=mysqli_query($conn,$q);
if($p)
{
    echo"<center><table border=1px width=400px height=400px>
        <h1>Mark Details</h1>
        <th>KTU ID</th>
        <th>Series 1</th>
        <th>Series 2</th>
        <th>Assignment</th>
        <th>Attendence</th>";
    while($qp=mysqli_fetch_assoc($p))
    {
        echo"<tr>";
        echo"<td>".$qp['ktu']."</td>";
        echo"<td>".$qp['seri1']."</td>";
        echo"<td>".$qp['seri2']."</td>";
        echo"<td>".$qp['ass']."</td>";
        echo"<td>".$qp['atten']."</td>";
        echo"</tr>";
    }
    echo"</table></center>";
}
?>
</html>