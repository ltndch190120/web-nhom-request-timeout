<?php
$connect=mysqli_connect('localhost','root','','dack');
if($connect)
{
    mysqli_query($connect,"SET NAMES 'UTF8'");
}
   $sql_user="SELECT * FROM taikhoan";
   $query_user=mysqli_query($connect,$sql_user);
   if(isset($_POST['sbm']))
   {
     
       $tensp=$_POST['tensp'];
       $image=$_FILES['image']['name'];
       $image_tmp=$_FILES['image']['tmp_name'];
       $giatien=$_POST['giatien'];
       $khuyenmai=$_POST['khuyenmai'];
       $motasp=$_POST['motasp'];
       $luotthich=$_POST['luotthich'];
       $id=$_POST['id'];
       $sql=insertSP($tensp,$image,$giatien,$khuyenmai,$motasp,$luotthich,$id);
       $query=mysqli_query($connect,$sql);
       move_uploaded_file($image_tmp,'Image/'.$image);
       header('location: index2.php?page_layout=danhsach');
   }
?>
<div class="container-fluid">
      <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
             <label for="">Tên sản phẩm</label>
             <input type="text" name="tensp"  class="form-control" required>
         </div>
         <div class="form-group">
             <label for="">Ảnh sản phẩm</label> <br>
             <input type="file" name="image" > 
         </div>
         <div class="form-group">
             <label for="">Giá sản phẩm</label>
             <input type="number" name="giatien"  class="form-control" required>
         </div>
         <div class="form-group">
             <label for="">Khuyến mãi</label>
             <input type="text" name="khuyenmai"  class="form-control" required>
         </div>
         <div class="form-group">
             <label for="">Mô tả sản phẩm</label>
             <input type="text" name="motasp"  class="form-control" required>
         </div>
         <div class="form-group">
             <label for="">Lượt thích</label>
             <input type="number" name="luotthich"  class="form-control" required>
         </div>
         <div class="form-group">
             <label for="">Người sửa</label>
             <select class="form-control" name="id">
             <?php
                 while($row_user=mysqli_fetch_assoc($query_user))
                 {?>
                      <option value="<?php echo $row_user['id'];?>"><?php echo $row_user['username']; ?></option>  
               <?php }?>
             </select>
        ` </div>
          <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
         </form>
         </div>
    </div>
</div>