<?php
  require_once 'init.php';
  global $db;
  $sql="SELECT * FROM taikhoan";
  $result=$db->query($sql);
  $row=$result->fetch(PDO::FETCH_ASSOC);
if(isset($_FILES['avatar']))
{
    
    $file=$_FILES['avatar'];
    $sdt=$_POST['sdt'];
    $NameAccout=$_POST['NameAccout'];
    $content=file_get_contents($file['tmp_name']);
    updateAvatar($row['id'],$content,$sdt,$NameAccout);
    
}
?>	

<?php if($row['avatar']): ?>
<img src="avatar.php?id=<?php echo $row['id'];?>">
<?php endif; ?>
	<form action="profile.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    		    <label for="avatar">Ảnh đại diện</label>
   			 <input type="file" class="form-control-file" id="avatar" name="avatar">
                 <div class="form-group">
 		 </div>	
          <div class="form-group">
				    <label>Số điện thoại</label>
				    <input type="text" class="form-control"	  name="sdt">
				  </div>
            <div class="form-group">
				    <label>Tên tài khoản</label>
				    <input type="NameAccout" class="form-control"	  name="NameAccout">
			</div>
          <button type="submit" class="btn btn-primary">Cập nhật</button>			 
	 </form>

