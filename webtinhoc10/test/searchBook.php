<?php 
    include "ConnectDatabase.php";
    $cn = connectDB();

    $fname = $_GET['name'];

    $sql = "SELECT * FROM book WHERE name LIKE '%$fname%'";

    $result = mysqli_query($cn,$sql);

    $list = [];
    if (mysqli_num_rows($result)<=0) //nếu không tìm thấy thì sẽ print ra dòng dưới
    {
        $list[] = array(
            "id"=>"No Record",
            "post"=>"No Record",
            "name"=>"No Record",
            "author"=>"No Record",
            "gerne"=>"No Record",
            "description"=>"No Record"
        );
    } else {
        while($row = mysqli_fetch_assoc($result)){
            $list[] = $row;
        } 
    }

    $output = "<table id='danhsach' class='table'>";
    $output .= "<thead class='thead-dark'>";
    $output .= "  <tr>";
    $output .= "    <th>ID</th>";
    $output .= "    <th>TÊN SÁCH</th>";
    $output .= "    <th>TÁC GIẢ</th>";
    $output .= "    <th>THỂ LOẠI</th>";
    $output .= "    <th>THAO TÁC</th>";
    $output .= "  </tr>";
    $output .= "</thead>";
    $output .= "<tbody>";

    foreach ($list as $sb) #liệt kê nhiều sách ~~ nhau
    {
        $output .= "  <tr id='{$sb['id']}'>";
        $output .= "    <td>{$sb['id']}</td>";
        $output .= "    <td><a id='ipl' href='detailBook.php?id={$sb['id']}' style='text-decoration: none;'>{$sb['name']}</a></td>";
        $output .= "    <td>{$sb['author']}</td>";
        $output .= "    <td>{$sb['gerne']}</td>";
        $output .= "    <td>";
        $output .= "      <a href='editBook.php?id={$sb['id']}' style='text-decoration: none; margin-right:5px;'>CHỈNH SỬA</a>";
        $output .= "      <a href='deleteBook.php?id={$sb['id']}' style='text-decoration: none;' onclick=\"return confirm('Bạn Muốn Xóa Sách Này?')\">XÓA</a>";
        $output .= "    </td>";
        $output .= "  </tr>";        
    }

    $output .= "</tbody>";
    $output .= "</table>";

    echo $output;
?>