<?php 
include 'header.php';

  require_once 'connect.php';
 // $row=findUserById($_SESSION['userID']);
//   $sql="SELECT * FROM sanpham inner join taikhoan on sanpham.id=taikhoan.id";
//   $query=mysqli_query($connect,$sql);
//   $row=mysqli_fetch_assoc($query);
  $cart=(isset($_SESSION['cart']))? $_SESSION['cart'] : [];
//   echo "<pre>";

//  print_r($_SESSION['cart']);
// $sql="SELECT * FROM sanpham inner join taikhoan on sanpham.id=taikhoan.id";
// $query=mysqli_query($connect,$sql);
// $row=mysqli_fetch_assoc($query);
$temp=0;

?>

    <style>
        .buttons_added {
            opacity: 1;
            display: inline-block;
            display: -ms-inline-flexbox;
            display: inline-flex;
            white-space: nowrap;
            vertical-align: top;
        }

        .is-form {
            overflow: hidden;
            position: relative;
            background-color: #f9f9f9;
            height: 2.2rem;
            width: 1.9rem;
            padding: 0;
            text-shadow: 1px 1px 1px #fff;
            border: 1px solid #ddd;
        }

        .is-form:focus,
        .input-text:focus {
            outline: none;
        }

        .is-form.minus {
            height: 30px;
            width: 30px;
            border-radius: 4px 0 0 4px;
        }

        .is-form.plus {
            height: 30px;
            width: 30px;
            border-radius: 0 4px 4px 0;
        }

        .input-qty {
            height: 30px;
            width: 30px;
            background-color: #fff;
            text-align: center;
            font-size: 1rem;
            display: inline-block;
            vertical-align: top;
            margin: 0;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            border-left: 0;
            border-right: 0;
            padding: 0;
        }

        .input-qty::-webkit-outer-spin-button,
        .input-qty::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
      

  
        <div style="background-color: #c9c8c5;">
            <div style="margin: 0px 5% 0px 5%;">
                <div>
                    <span style="margin-left: 15px;font-size: 20px;"> <i class='fas fa-home'
                            style='font-size:30px;margin: 5px 10px 5px 10px;'></i>Thông tin giỏ hàng</span>
                </div>
                <div
                    style="height: 800px; background-color: white;border-radius: 10px;display: flex;padding: 50px 50px 50px 50px;">
                    <div style="flex: 7;margin-right: 50px;display: flex;flex-direction: column;">
                   <?php foreach ($cart as $key => $value): ?>
                         <div style="height: 200px ;margin-bottom: 20px;background-color: lightsteelblue;display: flex;">
                            <div style="flex: 2.5;display: flex; justify-content: center;align-items: center; ">
                                <img style="height: 160px;width: 160px;"
                                src="Image/<?php echo $value['image']?>">
                            </div>
                            <div style="flex: 7.5;padding: 30px 10px 10px 10px;">
                                <div style="height: 60px;display: flex;">
                                    <p style="font-size: 17px;flex: 6;display: flex;align-items: center;"><?php echo $value['tensp'] ?>
                                        </p>
                                    <div
                                        style="flex: 4;display: flex;justify-content: space-evenly;align-items: center;">
                                        <label style="color: red;font-size: 16;margin: 0;">Giá tiền: <?php echo $value['giatien'] ?></label>
                                        <form action="cart.php">  
                                        <input type="hidden" name="action" value="update">
                                        <input type="hidden" name="id" value="<?php echo $value['masp'] ?>">
                                            <td><input type="text" name="quantity" value="<?php echo $value['quantity'] ?>">
                                             <button type="submit">Cập nhật</button>
                                             </td>
                                       </form>
    
                                    </div>
                                </div>
                                <div>
                                    <a style="font-size: 12px;color: black;margin-top: 20px;" 
                                    href="cart.php?id=<?php echo $value['masp'] ?>&action=delete" title="" class="btn btn-danger">
                                        Xóa khỏi giỏ
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php $temp=$temp+($value['giatien'] * $value['quantity']); ?>
                        <?php endforeach ?> 
                    </div>
                    <?php  if($temp>0){?>
               <form action="TTHK.php" method="POST" enctype="multipart/form-data" >
                    <div style="flex: 3;">
                        <div style="height: 200px;background-color: #eddbda;">
                            <div style="height: 40px;">
                                <p style="padding-top: 10px;padding-left: 10px;font-size: 17px;">Thanh
                                    Toán:</p>
                            </div>
                           
                            <div
                                style="display: flex;justify-content: space-between ;align-items: center; font-size: 15px;height: 50px;">
                                <span style="margin-left: 20px;">Tổng Tiền: </span>
                                <div style="display: flex;flex-direction: column;margin-right: 15px;text-align: right;">
                                    <label style="color: red;"> <?php echo $temp; ?></label>
                                    <span style="font-size: 10px;">(Đã bao gồm VAT nếu có)</span>

                                </div>
                            </div>

                        </div>
                       
                        <div style="background-color: #eddbda;margin-top: 20px;height: 300px;">
                            <div style="height: 40px;">
                                <p style="padding-top: 10px;padding-left: 10px;font-size: 17px;">Thông Tin Khách Hàng
                                    :</p>
                            </div>
                            <div>
                                <div class="form-check-inline" style="width: 80px;margin-left: 20px;font-size: 15px">
                                    <input
                                        style="outline: none;height: 20px;width: 20px;margin-right: 10px;font-size: 14px;"
                                        type="radio" class="form-check-input" id="inlineRadio1" name="gender"
                                        value="Nam" checked>
                                    <label class="form-check-label" for="inlineRadio1">
                                        Nam
                                    </label>
                                </div>
                                <div class="form-check-inline" style="width: 80px;font-size: 15px">
                                    <input
                                        style="outline: none;height: 20px;width: 20px;margin-right: 10px;font-size: 14px;"
                                        type="radio" class="form-check-input" id="inlineRadio2" name="gender"
                                        value="Nữ">
                                    <label class="form-check-label" for="inlineRadio2">
                                        Nữ
                                    </label>
                                </div>
                                <div style="margin: 10px 10px 10px 10px;">
                                    <input placeholder="Họ Tên "
                                        style="height: 35px;font-size: 14px;margin-right: 10px;" type="NameAccout"
                                        class="form-control"  name="NameAccout" value="<?php echo $row['NameAccout']; ?>">
                                </div>
                                <div style="margin: 10px 10px 10px 10px;">
                                    <input placeholder="Số Điện Thoại " style="height: 35px;font-size: 14px;"
                                        type="sdt" class="form-control" id="sdt" name="sdt" value="<?php echo $row['sdt']; ?>">
                                </div>
                                <div style="margin: 10px 10px 10px 10px;font-size: 15px">
                                    <p>Địa chỉ nhận hàng </p>
                                    <input style="height: 60px;font-size: 14px;" type="text" class="form-control"
                                        id="diachi" name="diachi" value="<?php echo $row['diachi']; ?>"></input>
                                </div>
                             
                            </div>
                         
                        </div>
                  
                        <button  name="submit"  value="submit"   style=" height: 50px;width: 100%;margin-top: 20px;font-size: 17px;"    
                        class="btn btn-success"  > Tiến hành đặt hàng</button> 
                    </div>
                </div>
            </div>

        </div> 
  </form>
        <?php include 'footer.php'; ?>
        <?php }?>
   
</body>
</html>
