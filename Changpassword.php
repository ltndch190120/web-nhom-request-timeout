<?php
require_once 'init.php';
include 'Header.php';
$title='Quên Mật Khẩu';
if(isset($_POST['email']))
{
	$email=$_POST['email'];
	$user=findUserByEmail($email);
	if($user)
	{				
			sendEmail($email,'Kích hoạt tài khoản','Vui lòng click vào link <a href="http://localhost/DACK/newpassword.html?id=' .$user['id'] .'&code=' .$code . '">Thay đổi mật khẩu</a>');
			header('Location: login.html');
			exit();
	}
	else
	{
		$error='Email không tồn tại';
	}
}
?>
    <form action="Changpassword.php" method="POST">
        <div style="background-color: white;height: 50px;display: flex;justify-content: center;align-items: center;">
            <img onclick="location.href='Header.html'" style="height: 100%;width: 20%; cursor: pointer;" src="Image/supperlogo1.jpg">
        </div>
        <div style=" height: 650px; display: flex;justify-content: center;align-items: center;background-color: #c3c4c7;">
            <div style="width: 750px;height: 300px;background-color: white;border-radius: 10px;display: grid;justify-content: center;align-items: center;">
                <div style="height: 20%;">
                    <label style="justify-content: center;display: flex;margin-top: 20px;font-size: 20;">Nhập email </label>
                </div>
                <div style="justify-content: center;display: grid;color: blue;">
                    <input type="email" placeholder="email" name="email" id="email" required="required" style="width: 390px ; height: 40px;border-width: 1;border-radius: 3px;border-style: solid;outline: none;margin-top: 25px; ">
                    <button name="submit" id="submit" value="submit" style="width: 390px ; height: 35px;border-width: 1;border-radius: 3px;border-style: solid;outline: none;background-color: red;color: white;margin-top: 45px;margin-bottom:15px ;  cursor: pointer;">
                        Quên mật khẩu
                    </button>
                </div>

            </div>
        </div>
    </form>