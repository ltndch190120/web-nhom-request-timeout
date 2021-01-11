<?php
require_once 'init.php';
?>


<style>
  .column {
    margin: 15px 15px 0;
    padding: 0;
  }

  .column:last-child {
    padding-bottom: 60px;
  }

  .column::after {
    content: '';
    clear: both;
    display: block;
  }

  .column div {
    position: relative;
    float: left;
    width: 300px;
    height: 200px;
    margin: 0 0 0 25px;
    padding: 0;
  }

  .column div:first-child {
    margin-left: 0;
  }

  /* --- */

  .hoverOpacity {
    height: 400px;
    width: 20%;

    position: relative;
  }

  .hoverOpacity1 {
    background-color: white;
    height: 430px;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    position: absolute;
    opacity: 0;
    outline: 2px solid black;
    outline-offset: -1px;
    z-index: 1;

  }

  .hoverOpacity0 {
    background-color: white;

    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    position: absolute;
    opacity: 1;
    outline: 2px solid black;
    outline-offset: -1px;
    z-index: 1;

  }

  .hoverOpacity:hover .hoverOpacity0 {
    opacity: 0;
    display: block;
    z-index: 1;

  }

  .hoverOpacity:hover .hoverOpacity1 {
    opacity: 1;
    display: block;
    z-index: 10;
  }

  .hover01 figure img {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    height:100%;
    width:90%;
  }

  .hover01 figure:hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
  }

  figure {

    margin: 0;
    padding: 0;
    background: #fff;
    overflow: hidden;
  }

  figure:hover {
    bottom: -36px;
    opacity: 1;
  }
</style>
<?php include 'Header.php'; ?>
<div id="poll" style="background-color: #c9c8c5;height: 1500px;font-size: 14px;">
  <div style="margin-right: 5%;margin-left: 5%;padding-top: 10px; height: 210px;">
    <div style=" display: flex;">
      <div style="flex: 2;background-color: sandybrown;margin-right: 10px;">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://hoanguthanhnhan.com/wp-content/uploads/2020/09/hinh-nen-phong-canh-dep-cho-may-tinh-12.jpg" alt="Los Angeles" width="100%" height="100%">

            </div>
            <div class="carousel-item">
              <img src="https://i.pinimg.com/originals/f6/f7/9e/f6f79e8851a5321e6640253bff988024.jpg" alt="Chicago" width="100%" height="100%">

            </div>
            <div class="carousel-item">
              <img src="https://www.gocbao.com/wp-content/uploads/2020/04/hinh-thien-nhien-dep-6.jpg" alt="New York" width="100%" height="100%">

            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>

        </div>
      </div>
      <div style="flex: 1;">
        <img style="width: 100%;height: 95px;" src="https://fastcare.vn/wp-content/uploads/2020/11/pin-iphone-giam-gia-40-780x290.jpg" />

        <img style="width: 100%;height: 95px;margin-top: 10px;" src="https://cdn.tgdd.vn/2020/12/banner/M51-398-110-398x110-1.png" />
      </div>
    </div>

    <!-- <div style="background-color: white;margin-top: 20px;">
      <span style="margin-left: 15px;font-size: 20px;">Sản phẩm mới nhất<i style="color: red;font-size: 30px;margin-left: 5px;" class="material-icons">&#xe05e;</i>
      </span>
      <hr>
      <div style="display: flex;flex-wrap: wrap;">
        <div class="a" style="height:400px ;width: 20%;outline: 2px solid black;outline-offset: -1px;">
          <div>
            <button style="margin: 7px 0px 10px 10px;" type="button" class="btn btn-warning">Mới
              nhất</button>
          </div>
          <div class="hover01 " style="display: flex;justify-content: center;margin-bottom: 10px;">
            <div>
              <figure>
                <img width="180px" height="200px" src="https://cdn.tgdd.vn/Products/Images/42/225380/iphone-mini-do-new-600x600-600x600.jpg" />
              </figure>
            </div>
          </div>
          <span style="margin: 10px 0px 0px 10px;">iPhone 12 Pro Max</span>
          <div style="margin: 5px 0px 0px 10px;">
            <strong style="color:red;">24.990.000₫</strong>

          </div>
          <span style="margin-left: 10px;font-size: 13px;">Số lượt thích :
          </span>
        </div>
      </div>
    </div> -->


    <!-- <script>
      function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
              this.responseText;
          }
        };

        xhttp.open("GET", "Detail.php?", true);
        xhttp.send();
      }
    </script> -->

    <script>
      function getProduct(a) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("poll").innerHTML = this.responseText;
          }
        }
        console.log('ham get product');
        console.log(a);
        xmlhttp.open("GET", "Detail.php?id=" + a, true);   
        xmlhttp.send();



      }
    </script>


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dack";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // searching 
    $search = isset($_GET['name']) ? $_GET['name'] : "";
    if ($search) {
        $where = "WHERE `tensp` LIKE '%" . $search . "%'";
    }

    // phân trang 
    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 10;
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1; //Trang hiện tại
    $offset = ($current_page - 1) * $item_per_page;
    if($search)
    {
      $products = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `tensp` LIKE '%" . $search . "%' ORDER BY `masp` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
      $totalRecords = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `tensp` LIKE '%" . $search . "%' ");
    }
    else{
      $products = mysqli_query($conn, "SELECT * FROM `sanpham` ORDER BY `masp` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
      $totalRecords = mysqli_query($conn, "SELECT * FROM `sanpham`");
    }
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);


    if ($products->num_rows > 0) {

      // output data of each row
      echo "  <div style='background-color: white;margin-top: 20px;' >";
      
      echo "    <span style='margin-left: 15px;font-size: 20px;'>Sản phẩm mới nhất<i style='color: red;font-size: 30px;margin-left: 5px;' class='material-icons'>&#xe05e;</i> ";
      echo "    </span>";
      echo "    <hr>";
      //echo "    <div style='display: flex; flex-wrap: wrap;'>";
      echo "    <div style='display: flex; flex-wrap: wrap;margin-bottom:50px'>";
      while ($row = $products->fetch_assoc()) {



        echo "       <div id='getId'  onclick='getProduct( ". $row["masp"] . ")' value='" . $row["masp"] . "'  class='hoverOpacity' >";


        echo "          <div   class='hoverOpacity0'>";
        echo "              <div>";
        echo "                <button style='margin: 7px 0px 10px 10px;' type='button' class='btn btn-warning'>Mới";
        echo "              nhất</button>";
        echo "      </div>";
        echo " <div class='hover01 '  style='display: flex;justify-content: center;'>";
        echo "       <figure style='display: flex;justify-content: center;height: 220px'>";
        echo "       <img   src='Image/" . $row["image"] . "' />";
        echo "      </figure>";
        echo "    </div>";
        echo "    <span style='margin: 10px 0px 0px 10px;'>" . $row["tensp"] . "</span>";
        echo "     <div style='margin: 5px 0px 0px 10px;'>";
        echo "        <strong style='color:red;'>" . $row["giatien"] . "đ</strong>";
        echo "      </div>";
        echo "      <p style='margin-left: 10px;font-size: 13px;'>Số lượt thích :" . $row["luotthich"] . "  </p>";
        echo "      </div>";
        echo "     <div class='hoverOpacity1'>";
        echo "       <div>";
        echo "         <button style='margin: 7px 0px 10px 10px;' type='button' class='btn btn-warning'>Mới";
        echo "           nhất</button>";
        echo "       </div>";
        echo "        <div class='hover01 ' style='display: flex;justify-content: center;'>";
        echo "         <figure style='display: flex;justify-content: center;height: 220px'>";
        echo "           <img width='180px' height='200px' src='Image/" . $row["image"] . "' />";
        echo "         </figure>";
        echo "       </div>";
        // echo "        <div>";
        // echo "         <img style='height: 50px;width: 50px' src='https://scr.vn/wp-content/uploads/2020/08/H%C3%ACnh-v%E1%BA%BD-nh%E1%BB%8F-d%E1%BB%85-th%C6%B0%C6%A1ng.jpg' />";
        // echo "       </div>";
        echo "       <span style='margin: 10px 0px 0px 10px;'>" . $row["tensp"] . "</span>";
        echo "       <div style='margin: 5px 0px 0px 10px;'>";
        echo "          <strong style='color:red;'>" . $row["giatien"] . "đ</strong>";
        echo "       </div>";
        echo "       <p style='margin-left: 10px;font-size: 13px;'>Số lượt thích :" . $row["luotthich"] . " </p>";
        echo "        <div style='display: flex;justify-content: space-evenly'>";
        echo "        <a name='sbm'  href='cart.php?id=" . $row["masp"] . "' type='submit' style='height: 35px;display: flex;flex-direction: column;justify-content: center;align-items: center' type='button' class='btn btn-warning'>";
    // echo "        <a name='sbm' class='btn btn-primary' href='cart.php?id=" . $row["masp"] . "' type='submit'>Mua</a>";

        echo "           <label style='color: white;margin: 0px'> Mua Ngay</label>";
        echo "           <span style='font-size: 10px;'>Giao Tận nhà  </span>";
        echo "        </a>";
        echo "          <a  class='btn btn-primary' href='detail.php?id=" . $row["masp"] . "' type='submit' style='height: 35px;display: flex;flex-direction: column;justify-content: center;align-items: center' type='button' class='btn btn-warning'>Chi tiết </a>";
        echo "       </div>";
 
        echo "      </div>";
        echo "     </div>";
      }
      echo "    </div>";
      echo " </div> ";
    } else {
      echo "0 results";
    }

    $products->close();
    ?>
    <?php
    include './pagination.php';
    ?>
  </div>
</div>

<?php include 'footer.php'; ?>