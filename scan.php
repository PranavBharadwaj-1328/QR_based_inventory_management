<?php
    $con = mysqli_connect("localhost","root","","SIH") or die("Unable to connect");
    $scan = $_POST['lol'];
    $qr = explode(";",$scan);
    $query = "SELECT * FROM Inventory WHERE SNO =  '$qr[0]'";
    //$query1 = "SELECT DOV,Serviced_by,About FROM Service WHERE SNO = '$qr[0]' order by DOV DESC";
    //echo $query1;
    $result = mysqli_query($con,$query);
    //$result1 = mysqli_query($con,$query1);
    //echo $result1;
    $row = mysqli_fetch_assoc($result);
    //$row1 = mysqli_fetch_assoc($result1);
    // echo $result['SNO'];
    echo "S.NO. :".$row['SNO']."<br />";
    echo "Name :".$row['Name']."<br />";
    echo "Date of Commision:".$row['DOC']."<br />";
    echo "Department:".$row['Department']."<br />";
    //echo "<h3>Service History</h3>";
    //if(mysqli_num_rows($result1) > 0)
    //{
      // echo "Last Serviced on:".$row1['DOV']."<br />";
       // echo "Serviced By:".$row1['Serviced_by']."<br />";
    //}
    echo('<form action="check.php" method="Post"> ');
    echo("S.No.: <input type='text' value=".$row['SNO']." name='sno' /> <br />");
    echo("Date of service: <input type='date' name='dov' /> <br />");
    echo("Serviced By: <input type='text' name='sb' /> <br />");
    echo("Description: <input type='text' name='about' /> <br />");
    echo("<input type='submit' value='service' /> <br />");
    echo('</form>');
    echo("<a href='index.php'><input type='button' value='log out' /></a>");
    

?>
