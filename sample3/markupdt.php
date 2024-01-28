<form method="POST">
		<center>
    <br><br><br><br>
		<br><br><br><br>
		<table border=5px width=100px height=150px >
			<tr>
				<th colspan="2">Mark Updation</th></tr>
			<tr>
				<th>KTU ID<br>
				<select id="id" name="ktu"><?php
				$con=mysqli_connect('localhost','root','cetmca','Student');
				$s="select KTU_Id from Mark";
				$r=mysqli_query($con,$s);
				while($rs=mysqli_fetch_assoc($r))
				{
					echo"<option value='".$rs['KTU_Id']."'>".$rs['KTU_Id']."</option>";
				}
				?>
				</select></th>
        <th>Subject<br>
				<select id="id" name="sub"><?php
				$con=mysqli_connect('localhost','root','cetmca','Student');
				$s="select Subject from Mark";
				$r=mysqli_query($con,$s);
				while($rs=mysqli_fetch_assoc($r))
				{
					echo"<option value='".$rs['Subject']."'>".$rs['Subject']."</option>";
				}
				?>
				</select></th>
			</tr>
			<tr><td colspan=2 style="text-align:center"><input type="submit" value="Search" name="ok"></td>
			</tr>	
		</table>
		</center>
</form>
<?php
$con=mysqli_connect('localhost','root','cetmca','Student');
if(isset($_POST['ok']))
{
$n=$_POST['ktu'];
$p=$_POST['sub'];
$s="select * from  Mark where KTU_Id = '$n' and Subject = '$p'";
$q=mysqli_query($con,$s);
if(mysqli_num_rows($q))
{
while($row=mysqli_fetch_assoc($q))
{
echo "<br><br><br><br><br><br><br><br>
<center><table border=5px height=400px width=500px>
<tr><th colspan=2>Search</th></tr>
<tr><th>KTU Id</th><th> <input type='text' value='".$row['KTU_Id']."'disabled></th></tr>
<tr><th>Series 1</th><th> <input type='text' value='".$row['Series_1']."'></th></tr>
<tr><th>Series 2</th><th> <input type='text' value='".$row['Series_2']."'></th></tr>
<tr><th>Assignment 1</th><th><input type='text' value='".$row['Assign_1']."'></th></tr>
<tr><th>Assignment 2</th><th> <input type='text' value='".$row['Assign_2']."'></th></tr>
<tr><th>Attendance </th><th><input type='text' value='".$row['Attendance']."'></th></tr>
<tr><th colspan=2><input type='submit' value='Update' >
</table></center>";
}
}
}
?>
