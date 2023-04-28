<?php
    include "connectDatabase.php";
    $cn = connectDB();

    //get datas with get method to know which row to adjust
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        //retrieve
        $sql = "SELECT * FROM book WHERE id = '$id'"; //get the row from the id that had been got on line 9

        //initiate and return one row
        $result = mysqli_query($cn, $sql);
        $list = mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review: <?php echo $list['name'] ?></title>
    <link rel="icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/339645190_963296404841364_2948126206449050955_n.png?_nc_cat=104&ccb=1-7&_nc_sid=aee45a&_nc_ohc=Nw9l6opzTxcAX_tLBFy&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQTmmmUO9pgH3ZEEBksYwruC2-mWKyWRHf1MS-BBibIkw&oe=64560D72">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap'); 
    /* import từ bộ font chữ */
    body{
        background-image: 
        url('https://th.bing.com/th/id/R.9d1d04651216cb82a01a4fbe51a9ff19?rik=%2b4iom2GVtPSa4Q&riu=http%3a%2f%2febookfriendly.com%2fwp-content%2fuploads%2f2012%2f11%2fBook-iPad-wallpaper-Books.jpg&ehk=%2bbN86dvmHL9vjeGWW9wUqtlriNXH5AOLjHZED0WuJxs%3d&risl=&pid=ImgRaw&r=0');
        background-position: center center; /* chỉnh vị trí hình ở giữa */
        background-repeat: no-repeat;
        background-size: cover; /* lấy được hết hình, tốt nhất là không nên quá lớn */
        position: relative;
    }

    .overlay{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.2); /* set độ tối cho bg */
    }

    .bookinfo{
        padding: 30px;
        color: white;
        backdrop-filter: blur(7px);
        font-family: 'Montserrate', sans-serif;
    }
</style>
<body>
    <div class="background">
        <div class="overlay"></div>
        <div class="bookinfo">
                <div class="pname">
                    <h3>Tác Giả Bài Đăng: <?php echo $list['post'] ?></h3>
                </div>
                <div class="bname">
                    <h3>Tên Sách: <?php echo $list['name'] ?></h3>
                </div>
                <div class="pname">
                    <h3>Tác Giả: <?php echo $list['author'] ?></h3>
                </div>
                <div class="pname">
                    <h3>Thể Loại: <?php echo $list['gerne'] ?></h3>
                </div>
                <div class="pname">
                    <h3>Review Sách: <br><?php echo $list['description'] ?></h3>
                </div>
        </div>
    </div>
</body>
</html>