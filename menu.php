<html>
    <head>

        <style>
            .bottom {
                position: absolute;
                /* height:60%; */
                padding-top: 100px;
                padding-bottom: 100px;

                width: 100%;
                margin-top: 35%;
                /* bottom: 35%; */
                background-color: white;
                box-shadow: 0px 20px 30px grey;
            }
            .bg {
                background-image: url("background.png");
                width: 100%;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
                position: relative;
            }
            .butt {
                background-color: #3e78a8;
                color: white;
                border: none;
                border-radius: 30px;
                font-size: 20px;

                height: 60px;
                width: 200px;
                margin: 10 auto;
                display: block;
            }

        </style>
    </head>

    <body class="bg" >

        <div class="bottom">
        <?php
            session_start();
            $username = $_POST['username'];
            $password = $_POST['password'];
            $con = mysqli_connect("localhost","root","","SIH") or die('Unable to connect to database');
            $query = mysqli_query($con,"SELECT Type FROM Users WHERE Name='$username' and Password='$password';");
            if(mysqli_num_rows($query) > 0)
            {
                $result = mysqli_fetch_array($query);
                if($result['Type'] == "1")
                {
                    echo('<a href="add.html"><input class="butt" type="button" value="Add new item"> </a>');
                    echo('<a href="register.html"><input class="butt" type="button" value="Add new user"> </a>');
                } 
                echo('<a href="qr_scan.html"><input class="butt" type="button" value="Scan QR"> </a>');
                //echo('<a href="serve.html"><input class="butt" type="button" value="Service inventory"></a>');
                echo("<a href='index.php'><input type='button' value='log out' /></a>");
            }
            else
            {
                echo("<p style='color:red;'>Error While logging in</p><br/>");
                echo("<a href='index.php'>Back to login</a>");
            }
        ?>
        </div>
    </body>
</html>