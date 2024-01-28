<html>
    <head></head>
    <center>
<form action="regbck.php" method="POST">
    <br><br><br><br><br>
    <br><br><br><br><br>
    <table border=1px width=200px height=200px>
<tr>
    <th colspan=2>REGESTER HERE</th>
</tr>
<tr>
    <td>Name</td>
    <td><input type="text" name="name"></td>
</tr>
<tr>
    <td>KTU ID</td>
    <td><input type="text" name="ktuid"></td>
</tr>
<tr>
    <td>Semester</td>
    <td><select id="sem" name="sem">
        <?php
        for($i=1;$i<5;$i++)
        {
            echo "<option values=".$i.">".$i."</option>";
        }
        ?>
        </select></td>
</tr>
</table>
<br>
<tr>
    <td><input type="submit" value="REGESTER"></td>
</tr>
<tr>
<td><input type="reset" value="RESET"></td>
</tr>
</form>
<center>
</html>