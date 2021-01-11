<?php
  $connect=mysqli_connect('localhost','root','','dack');
  if($connect)
  {
      mysqli_query($connect,"SET NAMES 'UTF8'");
  }
   $sql="SELECT * FROM sanpham inner join taikhoan on sanpham.id=taikhoan.id";
   $query=mysqli_query($connect,$sql);
?>
<div class="container-fluid">
      <div class="card">
        <div class="card-header">
           <h2>Danh sách sản phẩm</h2>
           <li class="nav-item ">
	        <a  href="doanhthu.php">Thống kê doanh thu </a>
	      </li>
            <li class="nav-item ">
	        <a  href="logout.php">Đăng xuất </a>
	      </li>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                     <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm chính</th>
                        <th>Ảnh sản phẩm 1</th>
                        <th>Ảnh sản phẩm 2</th>
                        <th>Ảnh sản phẩm 3</th>
                        <th>Giá tiền</th>
                        <th>Khuyến mãi</th>
                        <th>Mô tả sản phẩm</th>
                        <th>Lượt thích</th>
                        <th>Người sửa</th>
                        
                        <th>Xóa</th>
                     </tr>
                </thead>
                <tbody>
                   <?php
                   $i=1;
                      while($row=mysqli_fetch_assoc($query))
                      {?>
                         <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['tensp']; ?></td>                           
                            <td>
                            <img style="width: 100px;" src="Image/<?php echo $row['image']; ?>">
                            </td>
                            <td>
                            <img style="width: 100px;" src="Image/<?php echo $row['image1']; ?>">
                            </td>
                            <td>
                            <img style="width: 100px;" src="Image/<?php echo $row['image2']; ?>">
                            </td>
                            <td>
                            <img style="width: 100px;" src="Image/<?php echo $row['image3']; ?>">
                            </td>
                            <td><?php echo $row['giatien']; ?></td>
                            <td><?php echo $row['khuyenmai']; ?></td>
                            <td><?php echo $row['motasp']; ?></td>
                            <td><?php echo $row['luotthich']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            
                             <td>
                                 <a onclick="return Del('<?php echo $row['tensp'] ?>')" href="index2.php?page_layout=delete&id=<?php echo $row['masp'] ?>">Xóa</a>
                             </td>
                           
                        </tr>
                     <?php }?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="index2.php?page_layout=insert">Thêm mới</a>
        </div>
     </div>   
</div>
<script>
    function Del(name)
    {
        return confirm("Bạn có chắc muốn xóa sản phẩm: " + name + " ?");
    }
</script>