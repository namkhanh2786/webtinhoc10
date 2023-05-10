<?php
include "connectDatabase.php"; // Include the file that connects to the database

// Connect to the database
$cn = connectDB();

// Create an SQL statement to retrieve data from the book table
$sql = "SELECT id, name, author, gerne FROM book";

// If a search term was submitted, modify the SQL statement to filter by name
// if(isset($_GET['btnSearch'])) {
//   $name = $_GET['search'];
//   $sql = "SELECT * FROM book WHERE name LIKE '%$name%' ";
// }

// Execute the SQL statement and retrieve the results into an array
$result = mysqli_query($cn, $sql);
$ds = array(); // Initialize an empty array to store the retrieved data

while ($row = mysqli_fetch_assoc($result)) {
  $ds[] = $row; // Add each row to the array
}

// Disconnect from the database
disconnectDB($cn);

// Output the JavaScript code that generates the table and pagination, passing in the data as a parameter
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- library -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- library -->
  <title>TRANG ADMIN</title>
  <link rel="icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/339645190_963296404841364_2948126206449050955_n.png?_nc_cat=104&ccb=1-7&_nc_sid=aee45a&_nc_ohc=Nw9l6opzTxcAX_tLBFy&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQTmmmUO9pgH3ZEEBksYwruC2-mWKyWRHf1MS-BBibIkw&oe=64560D72">
</head>

<style>
  @font-face {
    font-family: 'Book Antiqua';
    src: url('/fonts/Book_Antiqua.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
  }

  .logotext {
    color: #68f322;
    font-family: 'Press Start 2P', cursive;
  }

  .logotext img {
    margin-left: 0px;
    margin-right: 7px;
  }

  nav {
    background: rgba(11, 11, 11, 0);
    /* opacity: 0.02 */
  }

  body {
    background:
      url(https://th.bing.com/th/id/R.282bdbbf4a8d5e30f2cd563f69f20b12?rik=GMMuNS3TZrhi3w&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fAOZUUB9.jpg&ehk=CP%2fMhuaqHj2QKm3t5yYiBP9l%2fhzEP53XxbK9nP4ujew%3d&risl=&pid=ImgRaw&r=0);
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    overflow-x: hidden;
  }

  .title {
    font-family: "Book Antiqua";
    color: palegoldenrod;
    display: flex;
    justify-content: center;
  }

  .table {
    width: 100%;
    border-collapse: collapse;
    margin: 25px;
    font-size: 1em;
    border-radius: 1px;
    overflow: hidden;
  }

  .table th {
    font-weight: bold;
    background-color: #ccc;
    /* lighten the background color /
    color: #333; / darken the font color */
  }

  .table td {
    text-align: left;
    font-weight: bold;
    /* increase the font weight /
    color: #111; / darken the font color */
  }

  .table tbody tr:nth-of-type(even) {
    background-color: #f2f2f2;
  }

  @media screen and (max-width: 600px) {
    table {
      font-size: 0.8em;
    }
  }

  @media screen and (max-width: 400px) {
    table {
      font-size: 0.7em;
    }
  }


  .table thead th {
    font-weight: bold;
  }

  .table th,
  .table td {
    padding: 12px 15px;
    text-align: center;
  }

  .table td {
    border: 1px solid #ddd;
  }

  .table tbody tr:nth-of-type(even) td:hover {
    background-color: rgb(255, 255, 255);
  }

  .table td:hover {
    background-color: rgb(0, 0, 0);
  }

  .table tbody tr {
    border-bottom: 1px solid #d3d3d3;
    color: white;
  }

  .table tbody tr:nth-of-type(even) {
    background-color: rgb(226, 225, 225);
    color: black;
  }

  .table tbody tr {
    opacity: 0.5;
  }

  .table-info {
    font-weight: bold;
  }

  .search-header {
    margin-left: 25px;
  }

  .search-button {
    margin-right: 50px;
    opacity: 1;
  }

  a#createLink {
    text-decoration: none;
    color: #AFC9CF;
  }

  .ipl {
    text-decoration: none;
    color: #68f322;
  }
</style>

<nav class="navbar fix-top navbar-light navbar-expand-lg" id="navigation-bar">
  <div class="container-fluid">
    <div class="row">
      <div class="justify-content-start">
        <a class="navbar-brand" href="" target="">
          <h4 class="logotext"><img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/339645190_963296404841364_2948126206449050955_n.png?_nc_cat=104&ccb=1-7&_nc_sid=aee45a&_nc_ohc=Nw9l6opzTxcAX_tLBFy&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQTmmmUO9pgH3ZEEBksYwruC2-mWKyWRHf1MS-BBibIkw&oe=64560D72" width="50" height="50" class="d-inline-block align-content-center" alt="">TRUST</h4>
        </a>
      </div>
      <div class="w-100">
        <h3 class="title mb-0">
          CHỈNH SỬA, DUYỆT SÁCH
        </h3>
      </div>
    </div>
  </div>
</nav>
<hr>

<body>
  <br>
  <div class="container">
    <div class="row">
      <form action="index.php" method="get">
        <div class="input-group search-header">
          <input type="search" class="form-control mr-5" placeholder="Type To Search" name="search" onkeyup="ajaxSearch()" id="search" autocomplete="off">
        </div>
      </form>
      <br>
      <div class="dpTable">
        <table id="danhsach" class="table">
          <thead class="thead-dark">
            </tr>
            <tr>
              <th>ID</th>
              <th>TÊN SÁCH</th>
              <th>TÁC GIẢ</th>
              <th>THỂ LOẠI</th>
              <th>THAO TÁC</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($ds as $list) { ?> <!-- call each -->
              <tr>
                <td><?php echo $list['id'] ?></td> <!-- if use fetch_array then [0] instead of ['id'] -->
                <td><a id="ipl" href="detailBook.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a></td>
                <td><?php echo $list['author'] ?></td>
                <td><?php echo $list['gerne'] ?></td>
                <td> <!-- get method -->
                  <a href="editBook.php?id=<?php echo $list['id'] ?>" style="text-decoration: none; margin-right:5px; margin-left:-25px;">
                    CHỈNH SỬA</a>
                  <a href="deleteBook.php?id=<?php echo $list['id'] ?>" style="text-decoration: none;" onclick="return confirm('Bạn Muốn Xóa Sách Này?')">XÓA</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

      <div class="col-md-12 mt-4 ml-2 container" style="display: flex; justify-content: space-between;">
        <a href="createBook.php" id="createLink">
          <h4>Thêm Sách Vào Bảng</h4>
        </a>
      </div>
    </div>
  </div>
</body>
<script>
  //Checking Browser Compatibility
  $(document).ready(function() {
    $('.btnDelete').click(function(e) {
      var idRow = "#r" + $(this).data("id");
      $.ajax({
        type: "POST",
        url: "Action.php",
        data: {
          action: "Delete",
          id: $(this).data('id')
        },
        success: function(response) {
          if (response == "Successfully Delete") {
            $(document).ready(function() {
              $(idRow).css("display", "none");
            })
          }
        }
      });
    })

  })

  function ajaxSearch() {
    var ajaxHttpRequest; // Key variable that is necessary for AJAX
    try {
      // Opera 8.0+, Firefox, Safari
      ajaxHttpRequest = new XMLHttpRequest();
    } catch (e) {
      // Internet Explorer Browsers
      try {
        ajaxHttpRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } catch (e) {
        try {
          ajaxHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
          // Something went wrong
          alert("Your browser is not working!");
          return false;
        }
      }
    }
    //Setting up ajax to update the page on receiving the query results
    ajaxHttpRequest.onreadystatechange = function() {
      if (ajaxHttpRequest.readyState == 4 && ajaxHttpRequest.status == 200) //dat du 2 yeu cau nay tuc la da chay duoc
      {
        var output = document.getElementById('danhsach');
        output.innerHTML = ajaxHttpRequest.responseText;
      }
    }
    //Sending the input data to server-side 
    var sName = document.getElementById('search').value;
    var queryString = "?name=" + sName; //phương thức get trong php
    ajaxHttpRequest.open("GET", "searchBook.php" + queryString, true); //request qua file search
    ajaxHttpRequest.send(null);
  }
</script>

</html>