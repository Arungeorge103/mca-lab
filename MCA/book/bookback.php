<?php
$conn=mysqli_connect('localhost','root','','book');
$bid=$_POST['bid'];
$bname=$_POST['bname'];
$bauthor=$_POST['bauthor'];
$noc=$_POST['noc'];

$q="INSERT INTO books VALUES($bid,'$bname','$bauthor','$noc')";
$s=mysqli_query($conn,$q);
if($s)
{
    echo"<script>
         alert('Insertion Successfull')
         </script>";
}
else
{
    echo"<script>
         alert('Insertion Failed')
         </script>";
}
?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'book');
if ($_POST['bname']) {
    $bookid = $_POST['bid'];
    $bookname = $_POST['bname'];
    $bookauthor = $_POST['bauthor'];
    $bnoc = $_POST['noc'];

    $qs = "SELECT * FROM books WHERE bid=$bookid and bname='$bookname'";
    $s = mysqli_query($conn, $qs);
    if (mysqli_num_rows($s)) {
        while ($row = mysqli_fetch_assoc($s)) {
            echo "<body bgcolor='skyblue'><center>
            <br><br><br><br>
            <br><br><br><br>
            <table bgcolor='lightblue' border=1px width=500px height=400px>
                <tr>
                <th colspan=2>BOOK DETAILS</th>
                </tr>
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
                    <td><input type='text' value='" . $row['noc'] . "'></td>
                </tr>
            </table></center></body>";
        }
    }
}
?>
