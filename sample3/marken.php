<html>
<head></head>
<form action="markbck.php" method="POST">
<center>
    <br><br><br><br><br>
    <br><br><br><br><br>
<table border=2px width=300px height=400px>
    <tr>
        <th colspan=2>MARK ENTRY</th>
    </tr>
    <tr>
        <td>KTU ID</td>
        <td><select id="ktu" name="ktu">
            <?php
            $conn=mysqli_connect('localhost','root','','student2');
            $q="select ktuid from ktu_reg";
            $p=mysqli_query($conn,$q);
            while($qp=mysqli_fetch_assoc($p))
            {
                echo "<option values=".$qp['ktuid'].">".$qp['ktuid']."</option>";
            }
            ?>
            </select></td>
    </tr>
    <tr>
        <td>Series1</td>
        <td><input type="text" name="seri1"></td>
    </tr>
    <tr>
        <td>Series2</td>
        <td><input type="text" name="seri2"></td>
    </tr>
    <tr>
        <td>Assignment</td>
        <td><input type="text" name="ass"></td>
    </tr>
    <tr>
        <td>Attendence</td>
        <td><input type="text" name="atten"></td>
    </tr>
        </table>
        <br>
    <tr>
        <td><input type="submit" value="SUBMIT"></td>
    </tr>
    <tr>
        <td><input type="reset" value="RESET"></td>
    </tr>
    <br><br>
    <tr>
        <td><a href="markview.php">VIEW ENTERED MARKS</a></td>
    </tr>
    </center>
    </form>
    </html>



