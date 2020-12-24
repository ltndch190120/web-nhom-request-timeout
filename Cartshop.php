<?php include 'Header.php'; ?>
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

        function go_cart() {
            location.assign("Cartshop.html");
        }

    </script>
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
                        <div style="height: 200px ;margin-bottom: 20px;background-color: lightsteelblue;display: flex;">
                            <div style="flex: 2.5;display: flex; justify-content: center;align-items: center; ">
                                <img style="height: 160px;width: 160px;"
                                    src="https://cdn.tgdd.vn/Products/Images/42/220654/TimerThumb/oppo-a92-(19).jpg">
                            </div>
                            <div style="flex: 7.5;padding: 30px 10px 10px 10px;">
                                <div style="height: 60px;display: flex;">
                                    <p style="font-size: 17px;flex: 6;display: flex;align-items: center;">iPhone 13 Pro
                                        MAX</p>
                                    <div
                                        style="flex: 4;display: flex;justify-content: space-evenly;align-items: center;">
                                        <label style="color: red;font-size: 16;margin: 0;">5.000.000đ</label>
                                        <div class="buttons_added">
                                            <script src="Function.js"></script>

                                            <input class="minus is-form" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" name=""
                                                id="inc" type="number" value="1">
                                            <input  class="plus is-form" type="button" value="+">
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <p style="font-size: 12px;color: teal;margin-top: 20px;">
                                        Xóa khỏi giỏ
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div style="height: 200px ;margin-bottom: 20px;background-color: lightsteelblue;display: flex;">
                            <div style="flex: 2.5;display: flex; justify-content: center;align-items: center; ">
                                <img style="height: 160px;width: 160px;"
                                    src="https://cdn.tgdd.vn/Products/Images/42/220654/TimerThumb/oppo-a92-(19).jpg">
                            </div>
                            <div style="flex: 7.5;padding: 30px 10px 10px 10px;">
                                <div style="height: 60px;display: flex;">
                                    <p style="font-size: 17px;flex: 6;display: flex;align-items: center;">iPhone 13 Pro
                                        MAX</p>
                                    <div
                                        style="flex: 4;display: flex;justify-content: space-evenly;align-items: center;">
                                        <label style="color: red;font-size: 16;">5.000.000đ</label>
                                        <div class="buttons_added">
                                            <script src="Function.js"></script>

                                            <input  class="minus is-form" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" name=""
                                                id="inc" type="number" value="1">
                                            <input  class="plus is-form" type="button" value="+">
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <p style="font-size: 12px;color: teal;margin-top: 20px;">
                                        Xóa khỏi giỏ
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div style="flex: 3;">
                        <div style="height: 200px;background-color: #eddbda;">
                            <div style="height: 40px;">
                                <p style="padding-top: 10px;padding-left: 10px;font-size: 17px;">Thanh
                                    Toán:</p>
                            </div>
                            <hr
                                style="border-style: dashed; margin-left: 25px ;margin-right: 25px;background-color: white;" />
                            <div
                                style="display: flex;justify-content: space-between ;align-items: center; font-size: 15px;height: 50px;">
                                <span style="margin-left: 20px;">Tạm tính: </span>
                                <label style="color: red;margin-right: 15px;"> 10.000.000đ</label>
                            </div>
                            <hr style="background-color: white;" />
                            <div
                                style="display: flex;justify-content: space-between ;align-items: center; font-size: 15px;height: 50px;">
                                <span style="margin-left: 20px;">Tổng Tiền: </span>
                                <div style="display: flex;flex-direction: column;margin-right: 15px;text-align: right;">
                                    <label style="color: red;"> 10.000.000đ</label>
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
                                        Anh
                                    </label>
                                </div>
                                <div class="form-check-inline" style="width: 80px;font-size: 15px">
                                    <input
                                        style="outline: none;height: 20px;width: 20px;margin-right: 10px;font-size: 14px;"
                                        type="radio" class="form-check-input" id="inlineRadio2" name="gender"
                                        value="Nữ">
                                    <label class="form-check-label" for="inlineRadio2">
                                        Chị
                                    </label>
                                </div>
                                <div style="margin: 10px 10px 10px 10px;">
                                    <input placeholder="Họ Tên "
                                        style="height: 35px;font-size: 14px;margin-right: 10px;" type="NameAccout"
                                        class="form-control" id="NameAccout" name="NameAccout">
                                </div>
                                <div style="margin: 10px 10px 10px 10px;">
                                    <input placeholder="Số Điện Thoại " style="height: 35px;font-size: 14px;"
                                        type="text" class="form-control" id="sdt" name="sdt" value="">
                                </div>
                                <div style="margin: 10px 10px 10px 10px;font-size: 15px">
                                    <p>Địa chỉ nhận hàng </p>
                                    <textarea style="height: 60px;font-size: 14px;" type="text" class="form-control"
                                        id="diachi" name="diachi" value=""></textarea>
                                </div>
                             
                            </div>
                         
                        </div>

                        <button style=" height: 50px;width: 100%;margin-top: 20px;font-size: 17px;" type="button"
                        class="btn btn-danger"> Tiến hành đặt hàng</button>
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
                        class="fab fa-youtube"></span> &ensp; &ensp; <span style="font-size: 18px;"
                        class="fab fa-google-plus-g"></span> </li>
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