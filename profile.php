<?php
  require_once 'init.php';
 // var_dump($_SESSION);
  $row=findUserById($_SESSION['userID']);
if(isset($_POST['submit']))
{
    $file=$_FILES['avatar'];
    $sdt=$_POST['sdt'];
    $NameAccout=$_POST['NameAccout']; 
    $diachi=$_POST['diachi'];
    $email=$_POST['email'];
    $gender = $_POST['gender'];
    updateAvatar($row['id'],$NameAccout,$sdt,$email,$diachi,$gender);
    header('Location: profile.php');
}
?>	

<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script>
        
        function go_register() {
            location.assign("register.html");
        }
        function go_chang() {
            location.assign("newpassword.html");
        }
        function go_cart() {
            location.assign("Cartshop.php");
        }
        function go_logout() {
            location.assign("logout.php");
        }
    </script>

</head>
<body>
    <div style="font-family: Arial, Helvetica, sans-serif;">
        <div
            style="display: flex;width: 100%; height: 40px;padding-left: 5%;padding-right: 5%;background-color: rgb(24, 158, 255);font-size: 14px;">
            <div style="flex:1">
                <a href="index.php">
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
            <div class="hoveritemmenu" onclick="go_chang()" 
                style="flex:1 ;display: flex;color: white; justify-content: center; align-items: center;cursor: pointer;">
                <b>Đổi mật khẩu  </b>
            </div>
            <div class="hoveritemmenu" onclick="go_logout()"
                style="flex:1 ;display: flex;color: white; justify-content: center; align-items: center;cursor: pointer;">
                <b>Đăng Xuất </b>
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
        <div style="background-color: #c9c8c5;font-size: 16px;height: 600px;">
            <div style="margin: 0px 5% 0px 5%;">
                <div>
                    <span style="margin-left: 15px;font-size: 20px;"> <span class="glyphicon glyphicon-user"
                            style='font-size:30px;margin: 5px 10px 5px 10px;'></span>Thông tin cá nhân</span>
                </div>
                <div style="height: 500px; background-color: white;border-radius: 10px;">
                    <div style="padding: 30px 30px 0px 30px;display: flex;">
                        <div style="flex: 1;">
                        <form name="myForm" action="profile.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group" style="display: flex;height: 50px;align-items: center;">
                                <label style="width: 130px;">
                                    Họ tên
                                </label>
                                <input style="height: 40px;font-size: 14px;" type="NameAccout" class="form-control"  name="NameAccout" 
                                value="<?php echo $row['NameAccout']; ?>" >
                            </div>
                            <div class="form-group" style="display: flex;height: 50px;align-items: center;">
                                <label style="width: 130px;">
                                    Số điện thoại
                                </label>
                                <input style="height: 40px;font-size: 14px;" type="text" class="form-control"  name="sdt" 
                                value="<?php echo $row['sdt']; ?>"
                                 >
                            </div>
                            <div class="form-group" style="display: flex;height: 50px;align-items: center;">
                                <label style="width: 130px;">
                                    Email
                                </label>
                                <input style="height: 40px;font-size: 14px;" type="email" class="form-control"  name="email" 
                                value="<?php echo $row['email']; ?>"
                                >
                            </div>
                            <div style="display: flex;height: 50px;align-items: center;">
                                <label style="width: 130px;">
                                    Giới tính
                                </label>
                                <div class="form-check-inline" style="width: 150px;">
                                    <input style="outline: none;height: 20px;width: 40px;margin-right: 10px;font-size: 14px;"
                                        type="radio" class="form-check-input" id="inlineRadio1" name="gender" value="Nam"  >
                                    <label class="form-check-label" for="inlineRadio1">
                                        Nam 
                                    </label>
                                </div>
                                <div class="form-check-inline" style="width: 150px;">
                                    <input style="outline: none;height: 20px;width: 40px;margin-right: 10px;font-size: 14px;"
                                        type="radio" class="form-check-input" id="inlineRadio2" name="gender" value="Nữ" >
                                    <label class="form-check-label" for="inlineRadio2">
                                        Nữ
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" style="display: flex;height: 100px;align-items: center;">
                                <label style="width: 130px;">
                                    Địa chỉ
                                </label>
                                <input style="height: 80px;font-size: 14px;" type="text" class="form-control"
                                     name="diachi" value="<?php echo $row['diachi']; ?>" ></input>
                            </div>         
                        </div>
                    </div>
                    <div style="height: 80px;padding-left: 200px;">
                        <button name="submit" id="submit" value="submit" 
                            style="height: 40px;width: 130px;background-color: #f2ce6b;border-radius: 3px;border-color:f2ce6b ;border-width: 1px;border-style: solid;">Xác Nhận</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>

<?php include 'footer.php'; ?>

