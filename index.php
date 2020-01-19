<html>
        <head>
                <?php session_start() ?>
                <title>
                        Rep-Air
                </title>

                <style>
                        
                        #button{
                                border-radius:50px;
                                width:180px;
                                height:70px;
                                background:#3e78a8;
                                font-weight:bold;
                                font-size:25px;
                                text-align: center;
                        }
                        div{
                                color:#4a89bc;
                                font-size: 25px;
                        
                        }
                        input{
                                font-size: 25px;
                                text-align: left;
                                
                        }
                        #main{
                                text-align: center;
                                margin-top: 15%;
                                width : 100%;
                                position: absolute;
                                padding-top: 80px;
                                padding-bottom: 80px ;
                                background-color:white ;
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
                </style>
        </head>


        <body class = "bg">
                <br />
                <br />
                <br />
                <br />
                <br />
                        <div id = "main">
                        <form method="POST" action="menu.php" style="align-items: center;align-content: center;">
                                <div>Username</div><input type="text" name="username" placeholder="Username" /><br /><br />
                                <div>Password</div><input type="password" name="password" placeholder="Password" /><br /><br />
                                <input id = "button" type="submit" value="Log In"/><br />
                        </form>
                        </div>                
            </body>
</html>