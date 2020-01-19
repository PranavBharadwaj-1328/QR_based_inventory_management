<?php
    include 'phpqrcode/qrlib.php';
    $con = mysqli_connect("localhost","root","","SIH") or die('Unable to connect to database');
    $sno = $_POST['sno'];
    $name = $_POST['name'];
    $doc = $_POST['doc'];
    $dep = $_POST['dep'];
    $text = $sno.";".$name.";".$doc;
    $stat = mysqli_query($con,"Insert Into Inventory Values ('$sno','$name','$doc','$dep');");
    //if($stat == 1)
    //{
       // echo('<p style="color:green;">Succesfully registered</p>');
    //}
    //else
    //{
      //  echo('<p style="color:red;">There is some problem</p>');
    //}
   // $path = '/home/pranav/Desktop/images/'; 
   // $file = $path.$sno.'.png';
   // $ecc = 'L'; 
   // $pixel_Size = 10; 
   // $frame_Size = 10; 
    //QRcode::png($text, $file, $ecc, $pixel_Size, $frame_Size);
    //echo "<center><img src='".$file."'></center>";
    QRcode::png($text);
    //png($text);
    echo("<a href='index.php'><input type='button' value='log out' /></a>");

?>