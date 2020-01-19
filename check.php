<?php
    $sno = $_POST['sno'];
    $dov = $_POST['dov'];
    $sb = $_POST['sb'];
    $about = $_POST['about'];
    $con = mysqli_connect('localhost','root','','SIH') or die('Unable to Connect');
    if(mysqli_query($con,"Insert into Service Values ('$sno','$dov','$sb','$about');"))
    {
        echo("Successfully serviced");
    }
    else
    {
        echo("problem with updation");
    }
?>