<?php
$usr = $_POST['username'];
$pass = $_POST['password'];
if ($usr == NULL or $pass == NULL)
{
    echo('<p style="color:red;">There is some problem</p>');

}
else
{
    $con = mysqli_connect("localhost","root","","SIH") or die('Unable to connect to database');
    $stat = mysqli_query($con,"INSERT INTO Users VALUES('$usr','$pass',0);");
    if($stat == 1)
    {
        echo('<p style="color:green;">Succesfully registered</p>');
    }
    else
    {
        echo('<p style="color:red;">There is some problem</p>');
    }
}


?>
