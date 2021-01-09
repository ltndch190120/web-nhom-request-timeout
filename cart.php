<?php 
  require_once 'connect.php';
  session_start();
  if(isset($_GET['id']))
  {
      $id=$_GET['id'];
  }
//   session_destroy();
// die();
$action=(isset($_GET['action']))? $_GET['action']: 'add';
$quantity=(isset($_GET['quantity'])) ?$_GET['quantity']:1;
// echo $action;
// die();
//var_dump($action);
//var_dump($_GET);
//die();

  $sql="SELECT * FROM sanpham where masp=$id";
   $query=mysqli_query($connect,$sql);
  if($query)
  {
    $row=mysqli_fetch_assoc($query);
  }
  var_dump($_GET);
  $item=[
      'masp'=>$row['masp'],
      'tensp'=>$row['tensp'],
      'image'=>$row['image'],
      'giatien'=>$row['giatien'],
      'quantity'=>$quantity
  ];
  if($action=='add')
  {
    if(isset($_SESSION['cart'][$id]))
    {
       $_SESSION['cart'][$id]['quantity'] +=$quantity;
    }else{
       $_SESSION['cart'][$id]=$item;
    }
  }
 if($action=='update')
 {
    $_SESSION['cart'][$id]['quantity']=$quantity;
 }
if($action=='delete')
{
    
    //unset($_SESSION['cart'][$id]);
}

header('location: Cartshop.php');
echo "<pre>";
print_r($_SESSION['cart']);
?>