<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <title>Document</title>
</head>


<style>
    .li_tt_details {
        list-style: none;
        padding: 10 0;
        display: flex;
        font-size: 15px;
    }

    .li_tt_details span {
        flex: 4;
    }

    .li_tt_details div {
        flex: 6.5;
    }

    .btnbuy {
        height: 60px;
        width: 100%;
        margin: 15 0 15 0;
        background-color: white;
        border-style: solid;
        border-radius: 3px;
        border-color: mediumvioletred;
        color: mediumvioletred;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .btnbuy:hover {
        background-color: mediumvioletred;
        transition: 0.3s;
        border-color: white;
    }

    .btnbuy:hover b {
        color: white;
    }

    .btnbuy:hover label {
        color: white;
    }
</style>

<div style='margin-right: 5%;margin-left: 5%;'>
    <?php

    require_once 'connect.php';

    session_start();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
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
    $sql = "SELECT * FROM sanpham  where masp=" . $id;
    $sql1 = "SELECT * FROM thongsokythuat  where masp=" . $id;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $masp = $row['masp'];
            $tensp = $row['tensp'];
            $giatien = $row['giatien'];
            $khuyenmai = $row['khuyenmai'];
            $motasp = $row['motasp'];
            $id = $row['id'];
            $luotthich = $row['luotthich'];
            $image = $row['image'];
            // echo  "<div style='margin-right: 5%;margin-left: 5%;'>";
            echo  "<div>";
            echo  "<span style='font-size: 25px;'>" . $row['tensp'] . "";
            echo  "</span>";
            echo  "<span> &nbsp;" . $row['luotthich'] . " Lượt yêu thích";
            echo  "</span>";
            echo  "</div>";
            echo  "<hr style='margin-left: 30px;margin-right: 30px ; border-style: solid;border-width: 0;height: 1.5px;background-color: gray;'>";
            echo  "<div style='display: flex;margin-top: 20px;'>";
            echo  "<div style='flex: 1.3;padding-right: 2%;'>";
            echo  "<figure style='display: flex;flex-direction: column;justify-content: center;align-items: center;'>";
            echo  "<img width='350px' height='350px' src='Image/" . $row['image'] . " ' />";
            echo  "<figcaption style='justify-content: center;display: flex;align-items: center; height: 30px;'>Hình ảnh : điện thoại 1</figcaption>";
            echo  "</figure>";
            echo  "<div style='display: flex;margin-left: 15%;margin-right: 15%; justify-content: space-evenly;'>";
            echo  "<figure style='border-width: 1px;border-style: solid;border-radius: 4%;border-color: gray; margin: 0 0 0 0;'>";
            echo  "<img width='80px' height='80px' src='Image/ip11mini1s.jpg' />";
            echo  "</figure>";
            echo  "<figure style='border-width: 1px;border-style: solid;border-radius: 4%;border-color: gray; margin: 0 0 0 0;'>";
            echo  "<img width='80px' height='80px' src='Image/ip11mini1s.jpg' />";
            echo  "</figure>";
            echo  "<figure style='border-width: 1px;border-style: solid;border-radius: 4%;border-color: gray; margin: 0 0 0 0;'>";
            echo  "<img width='80px' height='80px' src='Image/ip11mini1s.jpg' />";
            echo  "</figure>";
            echo  "</div>";
            echo  "</div>";
            echo  "<div style='display: block; flex: 1.1;padding-right: 4%; '> Giá niêm yết:";
            echo  "</span>";
            echo  "<span style='font-size: 25px;height: 40px;display: flex;align-items: center;color: red;'> " . $row['giatien'] . "₫";
            echo  "</span>";
            echo  "<div style='border-radius: 4px;border-style: solid;border-width: 1px;display: block;border-color: gray;'>";
            echo  "<div style='background-color: #f6f6f6;margin: 0 0 0 0;'>";
            echo  "<p style='font-size: 20px;height: 30px;padding: 5 0 0 20;margin: 0 0 0 0;'>KHUYẾN MÃI";
            echo  "</p>";
            echo  "<p style='font-size: 14px;height: 25px;margin:  0 0 0 20;'> Giá và khuyến mãi dự kiến áp dụng đến 23:00 31/01";
            echo  "</p>";
            echo  "</div>";
            echo  "<hr style='border-style: solid;border-width: 0;height: 1px;background-color: gray;margin: 0 0 0 0;'>";
            echo  "<p style='margin:  5 0 5 20;'><span style='color: red;margin: 0 5 0 0;' class='fas fa-gift'></span> Tặng cường lực + ốp lưng</p>";
            echo  "<p style='margin:  5 0 5 20;'> <span style='color: red;margin: 0 5 0 0;' class='fas fa-gift'></span> Tặng kèm bộ cốc - cáp</p>";
            echo  "<hr style='border-style: solid;border-width: 0;height: 1px;background-color: gray;margin: 0 0 0 0;'>";
            echo  "<p style='margin:  5 0 5 20;'> <span style='color: green;margin: 0 5 0 0;' class='far fa-check-circle'></span> Pin sạc dự phòng giảm 30% khi mua kèm sản phẩm .</p>";
            echo  "<p style='margin:  5 0 5 20;'> <span style='color: green;margin: 0 5 0 0;' class='far fa-check-circle'></span> FREE ship</p>";
            echo  "<p style='margin: 0 0 10 5;font-size: 13px;'> <span style='color: red;'> (*)</span> Áp dụng toàn quốc nhưng không áp dụng khi mua trả góp 0%</p>";
            echo  "</div>";
            echo  "<div style='border-radius: 4px;border-style: solid;border-width: 1px;display: block;border-color: gray;margin-top: 20px;padding: 8 10 8 10 ;'>";
            echo  "<b>Chọn thêm các dịch vụ <b style='color: red;'>hoàn toàn miễn phí </b>";
            echo  "</b>";
            echo  "<p style='margin: 10 0 4 0;display: flex;align-items: center;'> <input style='height: 16px;width: 16px;margin-right: 5;' type='checkbox'> Giao ngay từ cửa hàng gần bạn nhất</p>";
            echo  "<p style='margin: 4 0 4 0;display: flex;align-items: center;'> <input style='height: 16px;width: 16px;margin-right: 5;' type='checkbox'>Chuyển danh bạ, dữ liệu qua máy mới</p>";
            echo  "<p style='margin: 4 0 4 0;display: flex;align-items: center;'><input style='height: 16px;width: 16px;margin-right: 5;' type='checkbox'> Mang thêm điện thoại khác để bạn xem</p>";
            echo  "</div>";
            echo  "<button class='btnbuy'>";
            echo  "<b style='font-size: 20;'> Mua Ngay</b>";
            echo  "<label style='margin:5 0 5 0 ;'>Giao hàng tận nơi hoặc nhận tại siêu thị</label>";
            echo  "</button>";
            echo  "<p style='text-align: center;'>Gọi mua hàng <b style='color: #34c6eb;'>1800.1060</b> (7:30 - 22:00)</p>";
            echo  "</div>";
            echo  "<div style='flex: 1 ;'>";
            echo  "<p style='font-size: 21;margin:0 0 10 0;color: coral;'>Mô tả sản phẩm </p>";
            echo  "<p style='margin: 0 0 60 0' for=''>&ensp;" . $row['motasp'] . "";
            echo  "</p>";
            echo  "<p style='font-size: 21;margin:0 0 10 0;'>Thông số kỹ thuật</p>";
            echo  "<ul style='padding: 0;margin: 8 0 8 0;'>";
            echo  "<hr style='margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;'>";

            $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    echo  "<li class='li_tt_details'>";
                    echo  "<span> Màn hình:";
                    echo  "</span>";
                    echo  "<div>" . $row['manhinh'] . "";
                    echo  "</div>";
                    echo  "</li>";
                    echo  "<hr style='margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;'>";
                    echo  "<li class='li_tt_details'>";
                    echo  "<span>  Hệ điều hành:";
                    echo  "</span>";
                    echo  "<div> " . $row['hedieuhanh'] . "";
                    echo  "</div>";
                    echo  "</li>";
                    echo  "<hr style='margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;'>";
                    echo  "<li class='li_tt_details'>";
                    echo  "<span>  Camera sau:";
                    echo  "</span>";
                    echo  "<div>" . $row['camera_sau'] . "";
                    echo  "</div>";
                    echo  "</li>";
                    echo  "<hr style='margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;'>";
                    echo  "<li class='li_tt_details'>";
                    echo  "<span>  Camera trước:";
                    echo  "</span>";
                    echo  "<div> " . $row['camera_truoc'] . "";
                    echo  "</div>";
                    echo  "</li>";
                    echo  "<hr style='margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;'>";
                    echo  "<li class='li_tt_details'>";
                    echo  "<span>CPU:";
                    echo  "</span>";
                    echo  "<div>" . $row['cpu'] . "";
                    echo  "</div>";
                    echo  "</li>";
                    echo  "<hr style='margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;'>";
                    echo  "<li class='li_tt_details'>";
                    echo  "<span>RAM:";
                    echo  "</span>";
                    echo  "<div>  " . $row['ram'] . "";
                    echo  "</div>";
                    echo  "</li>";
                    echo  "<hr style='margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;'>";
                    echo  "<li class='li_tt_details'>";
                    echo  "<span> Bộ nhớ trong:";
                    echo  "</span>";
                    echo  "<div>" . $row['bonhotrong'] . "";
                    echo  "</div>";
                    echo  "</li>";
                    echo  "<hr style='margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;'>";
                    echo  "<li class='li_tt_details'>";
                    echo  "<span>Thẻ SIM:";
                    echo  "</span>";
                    echo  "<div>" . $row['sim'] . "";
                    echo  "</div>";
                    echo  "</li>";
                    echo  "<hr style='margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;'>";
                    echo  "<li class='li_tt_details'>";
                    echo  "<span> Dung lượng pin:";
                    echo  "</span>";
                    echo  "<div> " . $row['dungluongpin'] . "";
                    echo  "</div>";
                    echo  "</li>";
                    echo  "</ul>";
                }
            } else {
                echo "0 results";
            }
            echo  "<hr style='margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;'>";
            // echo  "</div>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>

<!-- <div style="margin-right: 5%;margin-left: 5%; background-color: white;">
        <div>
            <span style="font-size: 25px;">
                Điện Thoại 1
                
            </span>
            <span>
                &nbsp; xx Lượt yêu thích
            </span>
        </div>
        <hr style="margin-left: 30px;margin-right: 30px ; border-style: solid;border-width: 0;height: 1.5px;background-color: gray;">
        <div style="display: flex;margin-top: 20px;">
            <div style="flex: 1.3;padding-right: 2%;    ">
                <figure style="display: flex;flex-direction: column;justify-content: center;align-items: center;">
                    <img width="350px" height="350px" src="https://cdn.tgdd.vn/Products/Images/42/225380/iphone-mini-do-new-600x600-600x600.jpg" />
                    <figcaption style="justify-content: center;display: flex;align-items: center; height: 30px;">Hình ảnh : điện thoại 1</figcaption>
                </figure>

                <div style="display: flex;margin-left: 15%;margin-right: 15%; justify-content: space-evenly;">

                    <figure style="border-width: 1px;border-style: solid;border-radius: 4%;border-color: gray; margin: 0 0 0 0;">
                        <img width="80px" height="80px" src="Image/ip11mini1s.jpg" />
                    </figure>
                    <figure style="border-width: 1px;border-style: solid;border-radius: 4%;border-color: gray; margin: 0 0 0 0;">
                        <img width="80px" height="80px" src="Image/ip11mini1s.jpg" />
                    </figure>
                    <figure style="border-width: 1px;border-style: solid;border-radius: 4%;border-color: gray; margin: 0 0 0 0;">
                        <img width="80px" height="80px" src="Image/ip11mini1s.jpg" />
                    </figure>
                </div>
            </div>
            <div style="display: block; flex: 1.1;padding-right: 4%; ">
                <span style="font-size: 21px;">
                    Giá niêm yết:
                </span>
                <span style="font-size: 25px;height: 40px;display: flex;align-items: center;color: red;">
                   100000
                </span>
                <div style="border-radius: 4px;border-style: solid;border-width: 1px;display: block;border-color: gray;">
                    <div style="background-color: #f6f6f6;margin: 0 0 0 0;">
                        <p style="font-size: 20px;height: 30px;padding: 5 0 0 20;margin: 0 0 0 0;">
                            KHUYẾN MÃI
                        </p>
                        <p style="font-size: 14px;height: 25px;margin:  0 0 0 20;">
                            Giá và khuyến mãi dự kiến áp dụng đến 23:00 31/01
                        </p>

                    </div>
                    <hr style="border-style: solid;border-width: 0;height: 1px;background-color: gray;margin: 0 0 0 0;">
                    <p style="margin:  5 0 5 20;"> <span style="color: red;margin: 0 5 0 0;" class="fas fa-gift"></span> Tặng cường lực + ốp lưng</p>
                    <p style="margin:  5 0 5 20;"> <span style="color: red;margin: 0 5 0 0;" class="fas fa-gift"></span> Tặng kèm bộ cốc - cáp</p>

                    <hr style="border-style: solid;border-width: 0;height: 1px;background-color: gray;margin: 0 0 0 0;">
                    <p style="margin:  5 0 5 20;"> <span style="color: green;margin: 0 5 0 0;" class="far fa-check-circle"></span> Pin sạc dự phòng giảm 30% khi mua kèm sản phẩm . </p>
                    <p style="margin:  5 0 5 20;"> <span style="color: green;margin: 0 5 0 0;" class="far fa-check-circle"></span> FREE ship</p>
                    <p style="margin: 0 0 10 5;font-size: 13px;"> <span style="color: red;"> (*)</span> Áp dụng toàn quốc nhưng không áp dụng khi mua trả góp 0%</p>

                </div>
                <div style="border-radius: 4px;border-style: solid;border-width: 1px;display: block;border-color: gray;margin-top: 20px;padding: 8 10 8 10 ;">
                    <b>
                        Chọn thêm các dịch vụ <b style="color: red;">hoàn toàn miễn phí </b>
                    </b>
                    <p style="margin: 10 0 4 0;display: flex;align-items: center;"> <input style="height: 16px;width: 16px;margin-right: 5;" type="checkbox"> Giao ngay từ cửa hàng gần bạn nhất</p>
                    <p style="margin: 4 0 4 0;display: flex;align-items: center;"> <input style="height: 16px;width: 16px;margin-right: 5;" type="checkbox">Chuyển danh bạ, dữ liệu qua máy mới</p>
                    <p style="margin: 4 0 4 0;display: flex;align-items: center;"> <input style="height: 16px;width: 16px;margin-right: 5;" type="checkbox"> Mang thêm điện thoại khác để bạn xem</p>

                </div>

                <button class="btnbuy">
                    <b style="font-size: 20;"> Mua Ngay </b>
                    <label style="margin:5 0 5 0 ;">Giao hàng tận nơi hoặc nhận tại siêu thị</label>
                </button>
                <p style="text-align: center;">Gọi mua hàng <b style="color: #34c6eb;">1800.1060</b> (7:30 - 22:00)</p>
            </div>
            <div style="flex: 1 ;">
                <p style="font-size: 21;margin:0 0 10 0;">Thông số kỹ thuật</p>
                <ul style="padding: 0;margin: 8 0 8 0;">
                    <hr style="margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;">
                    <li class="li_tt_details">
                        <span>
                            Màn hình:
                        </span>
                        <div>
                            OLED, 6.1", Super Retina XDR
                        </div>
                    </li>
                    <hr style="margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;">
                    <li class="li_tt_details">
                        <span>
                                Hệ điều hành:
                        </span>
                        <div>
                            iOS 14
                        </div>
                    </li>
                    <hr style="margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;">
                    <li class="li_tt_details">
                        <span>
                                Camera sau:
                        </span>
                        <div>
                            2 camera 12 MP
                        </div>
                    </li>
                    <hr style="margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;">
                    <li class="li_tt_details">
                        <span>
                                Camera trước:
                        </span>
                        <div>
                            12 MP
                        </div>
                    </li>
                    <hr style="margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;">
                    <li class="li_tt_details">
                        <span>
                                CPU:
                        </span>
                        <div>
                            Apple A14 Bionic 6 nhân
                        </div>
                    </li>
                    <hr style="margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;">
                    <li class="li_tt_details">
                        <span>
                                RAM:
                        </span>
                        <div>
                            4 GB
                        </div>
                    </li>
                    <hr style="margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;">
                    <li class="li_tt_details">
                        <span>
                                Bộ nhớ trong:
                        </span>
                        <div>
                            128 GB
                        </div>
                    </li>
                    <hr style="margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;">
                    <li class="li_tt_details">
                        <span>
                                Thẻ SIM:
                        </span>
                        <div>
                            1 Nano SIM & 1 eSIM, Hỗ trợ 5G
                        </div>
                    </li>
                    <hr style="margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;">
                    <li class="li_tt_details">
                        <span>
                                Dung lượng pin:
                        </span>
                        <div>
                            2815 mAh, có sạc nhanh
                        </div>
                    </li>
                </ul>

                <p style="font-size: 21;margin:0 0 10 0;color: coral;">Mô tả sản phẩm </p>
                <label for="">&ensp;iPhone 12 được trang bị chipset A14 Bionic - bộ xử lý được trang bị lần đầu trên iPad Air 4 vừa được ra mắt cách đây không lâu, 
                    mở đầu xu thế chip 5 nm thương mại trên toàn thế giới.<br>
                    &ensp;Apple cho biết A14 Bionic sẽ mạnh hơn gần 40% chipset A13 Bionic, trong đó khả năng xử lý đồ họa nhanh hơn 50% cũng như các tác vụ học máy mượt mà hơn 80% khi so sánh với bộ xử lý tiền nhiệm.
                </label>
            </div>
        </div>
        <hr style="margin: 0;border-style: solid;border-width: 0;height: 0.5px;background-color: #bbc4c7;">

    </div> -->