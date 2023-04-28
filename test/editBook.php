<?php
    //connect DB
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

    if(isset($_POST['btnSubmit']))
    {
        //$id = $_POST['id']; //refer to 1 row in db | won't run if use disabled in input
        $name = $_POST['namepost'];
        $book = $_POST['namebook'];
        $author = $_POST['nameauthor'];
        $gerne = $_POST['gerne'];
        $description = $_POST['description'];

        //retrieving
        $sql = "UPDATE book SET post = '$name', name = '$book', author = '$author', gerne = '$gerne' , description = '$description' WHERE id = '$id' ";

        //initiate
        $result = mysqli_query($cn, $sql); //return true/false

        if($result == false)
        {
            echo '<div class="alert alert-danger">';
            echo "Cannot Update Book";
            echo '</div>';
            die();
        }
        //disconnect
        disconnectDB($cn);

        //return index page
        header("location: adminindex.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-..." crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
    <title>Chỉnh Sửa Thông Tin</title>
    <link rel="icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/339645190_963296404841364_2948126206449050955_n.png?_nc_cat=104&ccb=1-7&_nc_sid=aee45a&_nc_ohc=Nw9l6opzTxcAX_tLBFy&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQTmmmUO9pgH3ZEEBksYwruC2-mWKyWRHf1MS-BBibIkw&oe=64560D72">
</head>
<style>
    html, body {
    min-height: 100%;
    }
    body, div, form, input, select, p, textarea { 
    padding: 0;
    margin: 0;
    font-family: Roboto, Arial, sans-serif;
    font-size: 16px;
    color: #eee;
    }
    body {
    background: url("https://th.bing.com/th/id/R.2d0fe4fa065f6e9f79bfd41c7c6ff0bb?rik=wCOoY9AAnzKVbw&riu=http%3a%2f%2fstatic.guim.co.uk%2fsys-images%2fGuardian%2fPix%2fpictures%2f2015%2f2%2f20%2f1424454392161%2fLibrary-books-009.jpg&ehk=YRW0r03p0QhBH0w4oDvu6DznESrPPixLJsLHOPzcex4%3d&risl=&pid=ImgRaw&r=0") no-repeat center;
    background-size: cover;
    }
    h1, h2 {
    text-transform: uppercase;
    font-weight: 400;
    }
    h2 {
    margin: 0 0 0 8px;
    }
    .main-block {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 25px;
    background: rgba(0, 0, 0, 0.5); 
    }
    .left-part, form {
    padding: 25px;
    }
    .left-part {
    text-align: center;
    }
    form {
    background: rgba(0, 0, 0, 0.7); 
    }
    .title {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    }
    .info {
    display: flex;
    flex-direction: column;
    }
    input, select {
    padding: 5px;
    margin-bottom: 30px;
    background: transparent;
    border: none;
    border-bottom: 1px solid #eee;
    }
    textarea
    {
    padding: 5px;
    margin-bottom: 30px;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
    border: none;
    border-bottom: 1px solid #eee;
    }
    textarea::placeholder
    {
        color: aliceblue;
    }
    input::placeholder {
    color: #eee;
    }
    option:focus {
    border: none;
    }
    option {
    background: black; 
    border: none;
    }
    .checkbox input {
    margin: 0 10px 0 0;
    vertical-align: middle;
    }
    .checkbox a {
    color: #26a9e0;
    }
    .checkbox a:hover {
    color: #85d6de;
    }
    .btn-item, button {
    padding: 10px 5px;
    margin-top: 20px;
    border-radius: 5px; 
    border: none;
    background: #26a9e0; 
    text-decoration: none;
    font-size: 15px;
    font-weight: 400;
    color: #fff;
    }
    .btn-item {
    display: inline-block;
    margin: 20px 5px 0;
    }
    button {
    width: 100%;
    }
    button:hover, .btn-item:hover {
    background: #85d6de;
    }
    @media (min-width: 568px) {
    html, body {
    height: 100%;
    }
    .main-block {
    flex-direction: row;
    height: calc(100% - 50px);
    }
    .left-part, form {
    flex: 1;
    height: auto;
    }
    }
    .btn-success
    {
        margin-right: 7px;
    }
    .btn-success:hover
    {
    color: aquamarine;
    }
    .btn-info:hover
    {
    background-color: cornflowerblue;
    }
  </style>
  <body>
    <form action="" method="post">
      <div class="title">
        <h2>Chỉnh Sửa Thông Tin</h2>
      </div>
      <div class="info">
        <input autocomplete="off" type="text" name="namepost" placeholder="Tên tác giả đăng sách" value="<?php echo $list['post'] ?>" required>
        <input autocomplete="off" type="text" name="namebook" placeholder="Tên sách" value="<?php echo $list['name'] ?>" required>
        <input autocomplete="off" type="text" name="nameauthor" placeholder="Tên tác giả cuốn sách" value="<?php echo $list['author'] ?>" required>
        <textarea autocomplete="off" name="description" id="" cols="30" rows="10" placeholder="Review về cuốn sách" required></textarea>
        <select name="gerne">
          <option value="type" selected>-- Thể loại sách --</option>
          <option>Tiểu thuyết / truyện ngắn</option>
          <option>Tiểu thuyết / truyện dài</option>
          <option>Lãng mạn</option>
          <option>Truyện thiếu nhi</option>
          <option>Truyện nước ngoài</option>
          <option>Truyện Việt Nam</option>
          <option>Sách học tập</option>
        </select>
      </div>
      <input type="submit" name="btnSubmit" class="btn btn-success" value="Xác Nhận">
      <input type="reset" name="btnReset" class="btn btn-info" value="Xóa">
    </form>
  </body>
</html>