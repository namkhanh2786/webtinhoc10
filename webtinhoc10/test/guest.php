<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRUST</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/339645190_963296404841364_2948126206449050955_n.png?_nc_cat=104&ccb=1-7&_nc_sid=aee45a&_nc_ohc=Nw9l6opzTxcAX_tLBFy&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQTmmmUO9pgH3ZEEBksYwruC2-mWKyWRHf1MS-BBibIkw&oe=64560D72">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
    /* Start https://www.cursors-4u.com */ 
    * {cursor: url(https://cur.cursors-4u.net/games/gam-14/gam1340.cur), auto !important;} 
    /* End https://www.cursors-4u.com */

    h4
    {
        -webkit-user-select: none; /* Safari */
        -ms-user-select: none; /* IE 10 and IE 11 */
        user-select: none; /* Standard syntax */
    }

    body
    {
        overflow-x: hidden;
    }
    
    .sec1
    {
        background-color: #1c1c2a;
    }

    #sourceill
    {
        text-decoration: none;
        font-family: monospace;
    }

    nav 
    {
        background-color: #222237;
        display: flex;
        justify-content: center;
    }
    
    ul
    {
        list-style-type: none;
    }

    li
    {
        display: inline-block;
        margin-right: 10px;
        transition: transform .5s;
    }

    li:hover
    {
        transform: scale(1.12);
    }
    
    a
    {
        color: crimson;
        font-weight: bold;
        transition: all 1s ease 0s;
    }

    a:hover
    {
        text-decoration: none;
        font-weight: bold;
        color: deepskyblue;
        transition: all 0.5s ease 0s; /* glow chậm lại */
        transform: scale(1.12);
    }

    .logotext
    {
        color:#68f322; 
        font-family: 'Helvetica';
        transition: all 1.5s ease 0s;
        font-weight: bold;
    }

    .logotext:hover
    {
        color: lightgreen;
        transition: all 0.5s ease 0s;
        font-weight: bold;
    }

    .logotext img
    {
        margin-left: 0px;
        margin-right: 2px;
    }

    /* body part */
    .welcome-section
    {
        display: block;
    }

    .welcome-text
    {
        color: aliceblue;
        font-family: 'Ubuntu', sans-serif;
    }

    .welcome-texth4
    {
        margin-top: 50px;
    }

    .advantage-section
    {
        display: block;
    }

    .advantage-text
    {
        color: #160D08;
        font-family: 'Consolas', sans-serif;
    }

    .advantage-texth4
    {
        margin-top: 50px;
        margin-left: -100px;
    }

    footer
    {
        text-align: center;
        margin-top: 50px;
        background-color: #222237;
        color: aliceblue;
        padding-top: 50px;
        padding-bottom: 50px;
    }
</style>

<nav class="navbar fixed-top navbar-light navbar-expand-sm">
    <div class="container">
        <a class="navbar-brand" href="guest.php" target="">
            <h4 class="logotext"><img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/339645190_963296404841364_2948126206449050955_n.png?_nc_cat=104&ccb=1-7&_nc_sid=aee45a&_nc_ohc=Nw9l6opzTxcAX_tLBFy&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQTmmmUO9pgH3ZEEBksYwruC2-mWKyWRHf1MS-BBibIkw&oe=64560D72" 
              width="50" height="50" class="d-inline-block align-content-center" alt="">TRUST</h4>
        </a>
        <ul>
            <li><a href="guestBookreview.php">REVIEW SÁCH</a></li>
            <li></li><li><li></li></li>
            <li><a href="guestBook.php">XEM REVIEW SÁCH</a></li>
        </ul>
    </div>
</nav>
<br><br><br>

<body>
    <div>
        <section class="sec1">
            <div class="welcome-section row d-flex justify-content-center">
                <div class="col welcome-illustrator">
                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/welcome-typography-with-business-people-characters-2710146-2263951.png" alt="">
                </div>
                <div class="col welcome-text mt-5">
                    <h4 class="welcome-texth4">Chào mừng bạn đến với <span class="logotext">TRUST</span>.<br> 
                        Đây là trang web sẽ giúp bạn tìm và đọc review <span style="color: skyblue">CHI TIẾT</span> về những cuốn sách bạn cần. <br>
                        Hãy cùng nhau tìm hiểu và nêu cảm nhận về những cuốn sách mà bạn thấy thú vị nhé!</h4>
                </div>
            </div>
        </section>
    
        <section class="sec2">
            <div class="advantage-section row d-flex justify-content-center">
                <div class="col advantage-text mt-2 col-sm-12 col-md-6 col-lg-4">
                    <h4 class="advantage-texth4"><span class="logotext" style="font-family: 'Consolas', sans-serif;">TRUST</span> là một trang web đánh giá sách chi tiết và cung cấp thông tin hữu ích.<br> Trang web này giúp người đọc tìm thấy các cuốn sách phù hợp với sở thích của mình và đọc các bài đánh giá chân thực từ độc giả khác. <br><span class="logotext" style="font-family: 'Consolas', sans-serif;">TRUST</span> cũng cung cấp một môi trường thảo luận và chia sẻ cho những người yêu sách, mang lại lợi ích trong việc tìm kiếm, trao đổi và đánh giá sách.
                </div>
                <div class="col advantage-illustrator col-sm-12 col-md-6 col-lg-4">
                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/reading-e-book-3992550-3299883.png" alt="">
                </div>
            </div>
        </section>
    </div>
</body>

<footer>
    <p class="col">&copy; <span style="color: #68f322;">TRUST</span> 2022-2023</p>
    <p class="ml-2 col">Illustrations source: <a target="_blank" href="https://iconscout.com/illustrations/welcome" id="sourceill">Iconscout.com</a></p>
    <p class="col">Đăng Nhập Cho Admin / Admin Login: <a href="adminLogin.php" target="_blank">ADMIN</a></p>
</footer>

</html>