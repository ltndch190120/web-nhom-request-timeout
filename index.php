<?php
require_once 'init.php';
?>
<style>
.hoverName:hover span  {
    color: royalblue;
}



.hover01 figure img {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
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
<div style="background-color: #c9c8c5;height: 1500px;font-size: 14px;">
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


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dack";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM sanpham";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      echo "  <div style='background-color: white;margin-top: 20px;' >";
      echo "    <span style='margin-left: 15px;font-size: 20px;'>Sản phẩm mới nhất<i style='color: red;font-size: 30px;margin-left: 5px;' class='material-icons'>&#xe05e;</i> ";
      echo "    </span>";
      echo "    <hr>";
      echo "    <div style='display: flex; flex-wrap: wrap;justify-content: space-between;'>";
      while ($row = $result->fetch_assoc()) {


        echo "      <div class='hoverName' style='height:400px ;width: 18%;outline: 0.5px solid #b9c4bc;outline-offset: -1px;margin: 5px 5px 5px 5px'>";
        echo "        <div>";
        echo "          <button style='margin: 7px 0px 10px 10px;' type='button' class='btn btn-warning''>Mới";
        echo "            nhất</button>";
        echo "        </div>";
        echo "        <div class='hover01'  style='display: flex;justify-content: center;margin-bottom: 10px;'>";
        echo "        <figure>  <img width='180px' height='200px' src='Image/".$row["image"]."' />  </figure>" ;
        echo "        </div>";
        echo "        <span class='nameProduct' style='margin: 10px 0px 0px 10px;display: flex;justify-content: center;font-size:16px'>" . $row["tensp"] . "</span>";
        echo "        <div style='margin: 5px 0px 0px 10px;'>";
        echo "          <strong style='color:red;'>" . $row["giatien"] . "₫</strong>";
        echo "        </div>";
        echo "        <p style='margin-left: 10px;font-size: 13px;'>Số lượt thích :" . $row["luotthich"] . "";
        echo "        </p>";
        echo "        <p style='margin-left: 10px;font-size: 13px;'>" . $row["motasp"] . "";
        echo "        </p>";
        echo "      </div>";
      }
      echo "    </div>";
      echo " </div> ";
    } else {
      echo "0 results";
    }

    $conn->close();
    ?>
  </div>
</div>