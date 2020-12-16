<html lang="en">
    <?php
require_once 'init.php' ; ?>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script>
        function go_login() {
            location.assign("Login.html");
        }
        function go_register() {
            location.assign("register.html");
        }
        function go_chang() {
            location.assign("Changpassword.html");
        }
        funtion go_out(){
            location.assign("logout.php");
        }

        

    </script>

</head>

<body>  
    <div style="font-family: Arial, Helvetica, sans-serif;">
      
        <div
            style="display: flex;width: 100%; height: 40px;padding-left: 5%;padding-right: 5%;background-color: rgb(24, 158, 255);font-size: 14px;">
            <div style="flex:1">
                <a href="Header.html">
                    <img style="height: 100%;width: 100%;" src="Image/supperlogo1.png" />
                </a>
            </div>
            <div style="flex:2 ;display: flex; justify-content: center; align-items: center;position: relative;">
                <input type="text" placeholder="Bạn cần tìm gì"
                    style="width: 100% ; height: 90%;margin-left: 3px; border-width: 1;border-radius: 5px;border-color: white;border-style: solid;outline: none; ">
                <span style="position: absolute;right: 15px;top: 10px;font-size: 20px;"
                    class="glyphicon glyphicon-search"> </span>
            </div>
            <div style="flex:1 ;display: flex; justify-content: center; align-items: center;">
                <button onclick="go_cart()"
                    style="width: 90%;height: 90%;background-color: rgb(24, 158, 255);color: white; border-width: 1;border-radius: 5px;border-color: white;border-style: solid;outline: none;">
                    <span style="font-size: 20px;" class="	glyphicon glyphicon-shopping-cart"></span>
                    Giỏ Hàng
                </button>

            </div>
         
                <div class="hoveritemmenu"
                    style="flex:1 ;display: flex;color: white; justify-content: center; align-items: center;cursor: pointer;">
                    <b>Cá nhân</b>
                </div>
                <div class="hoveritemmenu" 
                    style="flex:1 ;display: flex;color: white; justify-content: center; align-items: center;cursor: pointer;">
                    <b><?php echo $username ?></b>
                </div>
                <div class="hoveritemmenu" onclick ="go_out()" 
                    style="flex:1 ;display: flex;color: white; justify-content: center; align-items: center;cursor: pointer;">
                    <a href="loguot.php" >thoat </a>
                </div>
                <div class="hoveritemmenu" onclick="go_profile()"
                    style="flex:1 ;display: flex;color: white; justify-content: center; align-items: center;cursor: pointer;">
                    <b>Cá nhân </b>
                </div>
        </div>
        <div
            style="display: flex;width: 100%; height: 40px;padding-left: 5%;padding-right: 5%;background-color: yellow;">
            <div class="hovermenu"
                style="flex:1;color: black; justify-content: center; align-items: center;display: flex;">
                <span style="color: gray; font-size: 30px;margin-right: 5px;" class="fab fa-apple"> </span>
                <span style=" font-size: 20px;">iPhone</span>
            </div>
            <div class="hovermenu"
                style="flex:1;color: black; justify-content: center; align-items: center;display: flex;">
                <p style="margin: 0%;font-size: 20px;color: blue;">SamSung</p>
            </div>
            <div class="hovermenu"
                style="flex:1;color: black; justify-content: center; align-items: center;display: flex;">
                <p style="margin: 0%;font-size: 20px;"> Xiaomi </p>
            </div>
            <div class="hovermenu"
                style="flex:1;color: black; justify-content: center; align-items: center;display: flex;">
                <p style="margin: 0%;font-size: 20px;color: green;"> OPPO</p>
            </div>
            <div class="hovermenu"
                style="flex:1;color: black; justify-content: center; align-items: center;display: flex;">
                <p style="margin: 0%;font-size: 20px;"> RealMe</p>
            </div>
            <div class="hovermenu"
                style="flex:1;color: black; justify-content: center; align-items: center;display: flex;">

                <span style="font-size: 23px;margin-right: 5px;" class="fas fa-headphones-alt"></span>
                <span style="font-size: 20px;">Phụ Kiện</span>
            </div>

        </div>
        <div style="background-color: #c9c8c5;height: 1100px;font-size: 14px;">
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
                                    <img src="https://hoanguthanhnhan.com/wp-content/uploads/2020/09/hinh-nen-phong-canh-dep-cho-may-tinh-12.jpg"
                                        alt="Los Angeles" width="100%" height="100%">

                                </div>
                                <div class="carousel-item">
                                    <img src="https://i.pinimg.com/originals/f6/f7/9e/f6f79e8851a5321e6640253bff988024.jpg"
                                        alt="Chicago" width="100%" height="100%">

                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.gocbao.com/wp-content/uploads/2020/04/hinh-thien-nhien-dep-6.jpg"
                                        alt="New York" width="100%" height="100%">

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
                        <img style="width: 100%;height: 95px;"
                            src="https://fastcare.vn/wp-content/uploads/2020/11/pin-iphone-giam-gia-40-780x290.jpg" />

                        <img style="width: 100%;height: 95px;margin-top: 10px;"
                            src="https://cdn.tgdd.vn/2020/12/banner/M51-398-110-398x110-1.png" />
                    </div>
                </div>

                <div style="background-color: white;margin-top: 20px;">
                    <span style="margin-left: 15px;font-size: 20px;">Sản phẩm mới nhất<i
                            style="color: red;font-size: 30px;margin-left: 5px;" class="material-icons">&#xe05e;</i>
                    </span>
                    <hr>
                    <div style="display: flex;">
                        <div style="height:400px ;width: 20%;outline: 2px solid black;outline-offset: -1px;">
                            <div>
                                <button style="margin: 7px 0px 10px 10px;" type="button" class="btn btn-warning">Mới
                                    nhất</button>
                            </div>
                            <div style="display: flex;justify-content: center;margin-bottom: 10px;">
                                <img width="180px" height="200px"
                                    src="https://cdn.tgdd.vn/Products/Images/42/225380/iphone-mini-do-new-600x600-600x600.jpg" />
                            </div>
                            <span style="margin: 10px 0px 0px 10px;">iPhone 12 Pro Max</span>
                            <div style="margin: 5px 0px 0px 10px;">
                                <strong style="color:red;">24.990.000₫</strong>

                            </div>
                            <span style="margin-left: 10px;font-size: 13px;">Số lượt thích : </span>
                        </div>
                    </div>

                </div>

            </div>



        </div>
        <div
            style="display: flex;justify-content: space-around;padding-left: 5%;padding-right: 5%;margin-top: 15px;margin-bottom: 15px;font-size: 14px;font-family: Arial, Helvetica, sans-serif;">
            <div style="flex: 1;color: #288ad6;">
                <li style="list-style: none;">Điện Thoại Plus-Mua sắm uy tín</li>
                <li style="list-style: none;">Giới thiệu về Cty</li>
                <li style="list-style: none;">Đóng góp ý kiến</li>

                <li style="list-style: none;">Hàng chính hãng</li>

            </div>
            <div style="flex: 1;color: #288ad6;">
                <li style="list-style: none;">Chích sách mua hàng</li>
                <li style="list-style: none;">Chi tiết bảo hành</li>
                <li style="list-style: none;">Tư Vấn</li>

            </div>
            <div style="flex: 1;">
                <li style="list-style: none;">Gọi mua hàng <b>1800.1060</b> (7:30 - 22:00)</li>
                <li style="list-style: none;">Gọi khiếu nại <b> 1800.1062 </b>(8:00 - 21:30)</li>
                <li style="list-style: none;">Gọi bảo hành <b> 1800.1064</b> (8:00 - 21:00)</li>
                <li style="list-style: none;">Kỹ thuật <b> 1800.1763</b> (7:30 - 22:00)</li>

            </div>
            <div style="flex: 0.6;justify-content: right;">
                <li style="list-style: none;">Liên hệ: &ensp; <span style="color: blue;font-size: 18px;"
                        class="fab fa-facebook-square"></span> &ensp; &ensp; <span style="color: red;font-size: 18px;"
                        class="fab fa-youtube"></span>
                    &ensp; &ensp; <span style="font-size: 18px;" class="fab fa-google-plus-g"></span> </li>
                <li style="list-style: none;"> <img style="width: 215px;height: 50px;" src="Image/bct1.png" /> </li>
            </div>

        </div>
        <div style="background-color: #f8f8f8;">
            <div style="display: flex;justify-content: center;align-items: center;font-size: small;">
                Địa chỉ: 227 Nguyễn Văn Cừ, Phường, Quận 5, Thành phố Hồ Chí Minh. &ensp; Email:Chuaco@gmail.com
            </div>
            <div style="display: flex;justify-content: center;align-items: center;font-size: small;">
                ©2020 - Bản quyền thuộc về ........
            </div>

        </div>
    </div>

</body>

</html>