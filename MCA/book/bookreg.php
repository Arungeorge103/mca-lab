<html><body bgcolor="lightblue">
    <title>BOOK REGESTER</title>
    <center>
    <br><br><br><br>
    <br><br><br><br>
<form action="bookback.php" method="POST">
<table width=300px height=300px>
    <th colspan=2>BOOK REGESTRATION</th>
    <tr>
        <td>Book ID:</td>
        <td><input type="number" name="bid"></td>
    </tr>
    <tr>
        <td>Book Name:</td>
        <td><input type="text" name="bname"></td>
    </tr>
    <tr>
        <td>Author:</td>
        <td><input type="text" name="bauthor"></td>
    </tr>
    <tr>
        <td>Number of Copies:</td>
        <td><select id="noc" name="noc">
            <?php
            for($i=1;$i<10;$i++)
            {
                echo"<option values=".$i.">".$i."</option>";
            }
            ?>
        </td>
    </tr>
        </table>
    <tr><br>    
        <th colspan=2><input type="submit" value="Regester">
            <input type="reset" value="Reset">
        </th>
    </tr>
        </center>
        </form>
        </body>
        </html>
