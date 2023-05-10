<?php
    if(isset($_GET['btnSubmit']))
    { 
        $user = $_GET['userInput'];
        $pass = $_GET['passInput'];
        if($user == "trustadmin" && $pass == "trustpassword")
        {
            header("location: adminindex.php");
        }
        else
        {
            header("location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-..." crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
        <title>
            ADMIN LOGIN
        </title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
        <link rel="icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/339645190_963296404841364_2948126206449050955_n.png?_nc_cat=104&ccb=1-7&_nc_sid=aee45a&_nc_ohc=Nw9l6opzTxcAX_tLBFy&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQTmmmUO9pgH3ZEEBksYwruC2-mWKyWRHf1MS-BBibIkw&oe=64560D72">
    </head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
        .background{
            position: relative;
            text-align: center;
            display: flex;
            justify-content: center;
            min-height: 100vh;
        } 

        body{
            background: 
            url('https://wallup.net/wp-content/uploads/2017/03/29/494447-Aurora-Child_of_Light-Ubisoft-748x421.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .login-box{
            position: absolute;
            padding: 50px;
            border: 2px solid rgba(255,255,255,0.5);
            border-radius: 45px;
            color: black;
            margin-top: 15vh;
            backdrop-filter: blur(10px);
            font-family: 'Ubuntu', sans-serif;
        }

        input{
            margin-bottom: 30px;
            margin-top: 10px;
            background: transparent;
            border: 0;
            outline: 0;
            border-bottom: 1px solid #eee;
            font-family: 'Kanit', sans-serif;
        }
    </style>

    <body>
        <div class="container">
            <div class="background">
                <div class="login-box">
                    <h1 class="Caption">
                        LOGIN FOR ADMIN
                    </h1>
                    <form action="adminLogin.php" method="get">
                        <div class="col-md-12">
                            <div class="form-group">
                                <ion-icon name="person-circle-outline"></ion-icon>
                                    <strong>USERNAME</strong>
                                    <br>
                                    <input type="text" class="form-control" name="userInput" autocomplete="off" placeholder="Tên Đăng Nhập Admin">
                            </div>
                            <div class="form-group">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                                    <strong>PASSWORD</strong>
                                    <br>
                                    <input type="password" class="form-control" name="passInput" placeholder="Mật Khẩu Admin">
                            </div>
                            <button type="submit" class="btn btn-primary" name="btnSubmit" style="width: 500px;">
                                <ion-icon name="log-in-outline"></ion-icon>
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>