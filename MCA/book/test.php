<?php
$conn = mysqli_connect('localhost', 'root', '', 'book');
if ($_POST['bname']) 
{
    $bookid = $_POST['bid'];
    $bookname = $_POST['bname'];
    $bookauthor = $_POST['bauthor'];
    $bnoc = $_POST['noc'];

    $q = "SELECT * FROM books WHERE bid=$bookid and bname='$bookname'";
    $s = mysqli_query($conn, $q);
    if (mysqli_num_rows($s)) 
    {
        while ($row = mysqli_fetch_assoc($s)) 
        {
            echo "<table border=2px width=200px height=200px>
                <tr>
                    <td>Book ID:</td>
                    <td><input type='number' value='" . $row['bid'] . "'></td>
                </tr>
                <tr>
                    <td>Book Name:</td>
                    <td><input type='text' value='" . $row['bname'] . "'></td>
                </tr>
                <tr>
                    <td>Book Author:</td>
                    <td><input type='text' value='" . $row['bauthor'] . "'></td>
                </tr>
                <tr>
                    <td>Number of Copies:</td>
                    <td><input type='text' value='" . $row['cof'] . "'></td>
                </tr>
            </table>";
        }
    }
}
?>
