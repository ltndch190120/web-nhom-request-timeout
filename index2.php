<?php
require_once 'init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php
         if(isset($_GET['page_layout']))
         {
             switch ($_GET['page_layout']) {
                 case 'danhsach':
                     require_once 'sanpham/danhsach.php';
                     break;
                 
                case 'insert':
                     require_once 'sanpham/insert.php';
                     break;
                     
                     
                case 'update':
                     require_once 'sanpham/update.php';
                     break;  
                     
                case 'delete':
                     require_once 'sanpham/delete.php';
                     break;     
                 default:
                     require_once 'sanpham/danhsach.php';
                     break;
             }
         }else{
            require_once 'sanpham/danhsach.php';
         }
    ?>
</body>
</html>