<html>
    <title>Regestration Form</title>
<form action= "regback.php" method="POST">
<br><br><br><br>
<br><br><br><br>
<center>
    <table border=1px width=300px height=300px>
        
        <th colspan=2>REGESTER HERE</th>
        
    <tr>
        <td>Name:</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>Age:</td>
        <td><select id="age" name="age">
            <?php
            for($i=18;$i<66;$i++)
            {
                echo"<option values=".$i.">".$i."</option>";
            }     
            ?>

    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>Phone:</td>
        <td><input type="number" name="phone"></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="pass"></td>
    </tr>
    <tr>
        <td>Retype Password:</td>
        <td><input type="password" name="repass"></td>
    </tr>
        </table>
        <br>
    <tr>
        <td><input type="submit" value="Regester"></td>
        <td><input type="reset" value="reset"></td>
    </tr>
<center>

    </html>
