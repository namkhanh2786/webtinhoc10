<?php
if (isset($_GET['btnSubmit'])) {
    #code content will be update here
    $namepost = $_GET['namepost'];
    $emailpost = $_GET['emailpost'];
    $namebook = $_GET['namebook'];
    $nameauthor = $_GET['nameauthor'];
    $description = $_GET['description'];
    $bookcover = $_GET['bookcover'];
    $gerne = $_GET['gerne'];

    $to = "thpt.lequydon.nk.2022.2025@gmail.com";

    header("Location: guest.php");
    #notification
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRUST/Review Sách</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/339645190_963296404841364_2948126206449050955_n.png?_nc_cat=104&ccb=1-7&_nc_sid=aee45a&_nc_ohc=Nw9l6opzTxcAX_tLBFy&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQTmmmUO9pgH3ZEEBksYwruC2-mWKyWRHf1MS-BBibIkw&oe=64560D72">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

    /* Start https://www.cursors-4u.com */
    * {
        cursor: url(https://cur.cursors-4u.net/games/gam-14/gam1340.cur), auto !important;
    }

    /* End https://www.cursors-4u.com */

    nav {
        background-color: rgba(255, 255, 255, 0.001);
    }

    ul {
        list-style-type: none;
    }

    li {
        display: inline-block;
        margin-right: 10px;
        transition: transform .5s;
    }

    li:hover {
        transform: scale(1.12);
    }

    a {
        color: crimson;
        font-weight: bold;
        transition: all 1s ease 0s;
    }

    a:hover {
        text-decoration: none;
        font-weight: bold;
        color: deepskyblue;
        transition: all 0.5s ease 0s;
        /* glow chậm lại */
        transform: scale(1.12);
    }

    .logotext {
        color: #68f322;
        font-family: 'Helvetica', sans-serif;
        transition: all 1.5s ease 0s;
        font-weight: bold;
    }

    .logotext:hover {
        color: lightgreen;
        transition: all 0.5s ease 0s;
        font-weight: bold;
    }

    .buttonandlink {
        display: flex;
    }

    @media only screen and (max-width: 600px) {
        .buttonandlink
        {
            position: relative;
            display: inline-block;            
        }

        .collapse
        {
            position: absolute;
            display: none;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .buttonandlink:hover .collapse
        {
            display: block;
        }

        .navbar-toggler {
            font-size: 15px;
            float: right;
        }
    }
</style>

<nav class="navbar fixed-top navbar-light mb-5 navbar-expand-lg navbar-expand-sm" id="navigation-bar">
    <a class="navbar-brand logoandtext" href="guest.php" target="">
        <h4 class="logotext"><img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/339645190_963296404841364_2948126206449050955_n.png?_nc_cat=104&ccb=1-7&_nc_sid=aee45a&_nc_ohc=Nw9l6opzTxcAX_tLBFy&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQTmmmUO9pgH3ZEEBksYwruC2-mWKyWRHf1MS-BBibIkw&oe=64560D72" width="50" height="50" class="d-inline-block align-content-center" alt="">TRUST</h4>
    </a>

    <div class="buttonandlink">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav float-right d-inline mb-3 mt-2">
                
            <li></li>
            <li></li>
                <li class="nav-item"><a href="guestBookreview.php">REVIEW SÁCH</a></li>
                <li class="nav-item"><a href="guestBook.php">XEM REVIEW SÁCH</a></li>
            </ul>
        </div>
        <button class="navbar-toggler" id="cbutton" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="https://th.bing.com/th/id/OIP.zzTORoBoYDab2n9d6QgSVAAAAA?pid=ImgDet&rs=1" class="navbar-toggler-icon icon" alt="">
        </button>
        <br><br>
    </div>
</nav>

<style>
    body {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://i.pinimg.com/originals/1a/29/6a/1a296ad04dbe450ef1f0f13920ea2b33.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    form {
        font-family: 'Ubuntu', sans-serif;
        backdrop-filter: blur(10px);
        padding-top: 30px;
    }

    .reviewForm {
        margin-top: 50px;
    }

    .reviewInp {
        position: relative;
        width: 100%;
        color: aliceblue;
    }

    .reviewInp input {
        width: 100%;
        background-color: rgba(255, 255, 255, 0.05);
        border: none;
        outline: none;
        box-shadow: none;
        letter-spacing: 0.1em;
        margin-bottom: 2px;
        color: aliceblue;
        border-radius: 3px;
        margin-bottom: 10px;
        font-family: 'Comfortaa', sans-serif;
    }

    .reviewInp span {
        position: absolute;
        left: 0;
        padding: 0 15px 5px;
        padding-bottom: 20px;
        color: rgba(255, 255, 255, 0.65);
        pointer-events: none;
        letter-spacing: 0.1em;
        transition: 0.5s;
    }

    .reviewInp input:valid~span,
    .reviewInp input:focus~span {
        transform: translateY(-25px);
        font-size: 13px;
        color: cyan;
    }

    .inputline {
        position: absolute;
        left: 0;
        bottom: 0;
        border-bottom: solid aliceblue;
        overflow: hidden;
        width: 100%;
        height: 2px;
    }

    .reviewInp textarea {
        width: 100%;
        height: 200px;
        background-color: rgba(0, 0, 0, 0.5);
        letter-spacing: 0.1em;
        margin-bottom: 2px;
        color: aliceblue;
        border-radius: 10px;
    }

    select {
        width: 95%;
        position: absolute;
        background-color: aliceblue;
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.65);
        padding: 10px;
        color: aliceblue;
        text-transform: uppercase;
        font-family: 'Abel', sans-serif;
    }

    .select option {
        color: #222237;
        color: aliceblue;
        text-transform: uppercase;
        font-family: 'Comfortaa', sans-serif;
    }

    .buttongroup {
        color: aliceblue;
        padding-bottom: 20px;
    }

    .btn {
        transition: transform .5s;
        margin-right: 20px;
        background-color: rgba(0, 0, 0, 0.5);
        border: 2px solid aliceblue;
    }

    .btn:hover {
        transform: scale(1.15);
        background-color: rgba(0, 0, 0, 0.9);
        font-weight: bold;
    }

    .text {
        color: aliceblue;
        font-family: 'Open Sans', monospace;
        transition: all 0.3s ease 0s;
    }

    .text:hover {
        color: cadetblue;
    }
</style>

<br><br><br>

<body>
    <div class="container reviewForm">
        <div class="row">
            <h3 class="mb-5 text text-center">CẢM NHẬN VỀ SÁCH CỦA BẠN Ở ĐÂY NÈ😄</h3>
            <form action="" method="get" enctype="multipart/form-data" autocomplete="off" class="col-lg-6 col-md-12 col-sm-12">
                <div class="reviewInp">
                    <input autocomplete="off" name="namepost" autocapitalize="off" type="text" required>
                    <span>Tên Của Bạn<strong><small style="color: crimson;">*</small></strong></span>
                </div>
                <div class="reviewInp mt-5">
                    <input autocomplete="off" name="emailpost" autocapitalize="off" type="email" required>
                    <span>Email Của Bạn<strong><small style="color: crimson;">*</small></strong></span>

                </div>
                <div class="reviewInp mt-5">
                    <input autocomplete="off" name="namebook" autocapitalize="off" type="text" required>
                    <span>Tên Sách<strong><small style="color: crimson;">*</small></strong></span>

                </div>
                <div class="reviewInp mt-5">
                    <input autocomplete="off" name="nameauthor" autocapitalize="off" type="text" required>
                    <span>Tên Tác Giả<strong><small style="color: crimson;">*</small></strong></span>

                </div>
                <div class="reviewInp mt-5">
                    <textarea autocomplete="off" name="description" placeholder="Review Về Sách*" autocapitalize="off" type="text" required></textarea>
                </div>
                <div class="mt-4"></div>
                <span style="color: aliceblue; font-weight: 500;">Bìa Sách<strong><small style="color: crimson;">*</small></strong></span>
                <div class="reviewInp">
                    <input name="bookcover" type="file" required>
                </div>
                <div class="mt-5 select">
                    <select name="gerne">
                        <option value="type" selected>-- Thể loại sách --</option>
                        <optgroup label="SÁCH TRONG NƯỚC">
                            <option>Sách Chính trị – pháp luật</option>
                            <option>Sách Khoa học công nghệ – Kinh tế</option>
                            <option>Sách Văn học nghệ thuật</option>
                            <option>Sách Văn hóa xã hội – Lịch sử</option>
                            <option>Sách Giáo trình</option>
                            <option>Sách Truyện</option>
                            <option>Sách tiểu thuyết</option>
                            <option>Sách Tâm lý</option>
                            <option>Sách tâm linh</option>
                            <option>Sách tôn giáo</option>
                            <option>Sách thiếu nhi</option>
                        </optgroup>
                        <optgroup label="SÁCH QUỐC TẾ">
                            <option>Sách Chính trị – pháp luật</option>
                            <option>Sách Khoa học công nghệ – Kinh tế</option>
                            <option>Sách Văn học nghệ thuật</option>
                            <option>Sách Văn hóa xã hội – Lịch sử</option>
                            <option>Sách Giáo trình</option>
                            <option>Sách Truyện</option>
                            <option>Sách tiểu thuyết</option>
                            <option>Sách Tâm lý</option>
                            <option>Sách tâm linh</option>
                            <option>Sách tôn giáo</option>
                            <option>Sách thiếu nhi</option>
                        </optgroup>
                    </select>
                </div>
                <br><br>
                <div class="buttongroup mt-5">
                    <div class="text-center">
                        <input type="submit" name="btnSubmit" class="btn btn-success" value="ĐĂNG">
                        <input type="reset" name="btnReset" class="btn btn-info" value="XÓA">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <footer>
            <p>&copy; <span style="color: #68f322;">TRUST</span> 2022-2023</p>
            <p><a href="https://pin.it/4CFJRqX" target="_blank"><span>Background Source</span></a></p>
        </footer>
    </div>
</body>

<style>
    .footer {
        width: 100%;
        text-align: center;
        margin-top: 30px;
        background-color: #222237;
        color: aliceblue;
        padding-top: 50px;
        padding-bottom: 50px;
    }
</style>

</html>