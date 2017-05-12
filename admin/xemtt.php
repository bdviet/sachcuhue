<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<title>Sách cũ Huế | Xem thông tin</title>
<?php
include('../header.php');
?>
<body>
 <!------------------------- Menu bar & login -------------->

<?php
include('../menu_login.php');
?>
    
        <!------------------------- End Menu Bar & login -------------->
    
    
         <!-- Start container --> 
    
      <div class="container">
          <div class="row">

<!-- Category -->
<?php
include('../category_post.php');
?> 
<!-- end Category -->


<!-- End Category -->
            
            
<?php
 if (!isset($_SESSION['id_member'])||!isset($_GET['id_member'])) 
{ //chưa đăng nhập
     echo "<div class='alert alert-danger col-md-9'> <span class='glyphicon glyphicon-remove'></span>Lỗi</div>";
     include('../footer.php');
     exit;
}
$id_member = $_GET['id_member'];
// if($id_member!=$_SESSION['id_member'])
// {
//       echo "<div class='alert alert-danger col-md-9'> <span class='glyphicon glyphicon-remove'></span> Bạn không có quyên truy cập</div>";
//      include('../footer.php');
//      exit;
// }
?>

           <!----------------------- Content -------------->
            
                
            <div class="col-md-9">




<?php
include('../connect.php');
$id_member = $_GET['id_member'];
$sql = "SELECT *, id FROM member WHERE id='$id_member'";  
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
echo "
<div class='col-md-8 col-md-offset-2 well well-sm' style='margin-top: 20px'>
    
               <form id='change' data-toggle='validator' role='form' method='POST' action='#'>
                  <legend class='text-center active'>  <label>Xem thông tin</label></legend>
                    <fieldset>
                        <legend>Thông tin tài khoản</legend>
                        <div class='form-group col-md-6'>
                            <label for='first_name'>Tên của bạn</label>
                             <input  value='{$data['first_name']}' maxlength='10' data-error='Vui lòng nhập đúng tên của bạn' type='text' class='form-control' name='first_name' id='first_name' placeholder='Nhập tên' disabled>
                      <div class='help-block with-errors'></div>
                        </div>
                        <div class='form-group col-md-6'>
                            <label for='last_name'>Họ của bạn</label>
                             <input value='{$data['last_name']}'  maxlength='10'  data-error='Vui lòng nhập đúng họ của bạn' type='text' class='form-control' name='last_name' id='last_name' placeholder='Nhập Họ' disabled>
                         <div class='help-block with-errors'></div>
                        </div>
                        <div class='form-group col-md-12'>
                            <label for=''>Email</label>
                              <input value='{$data['email']}' type='email' class='form-control' name='email' id='email' placeholder='Email' disabled>     
             
                        </div>
                        <div class='form-group col-md-12'>
                            <label for=''>Số điện thoại</label>
                             <input value='{$data['phone']}'  data-minlength='10' type='number' data-error='Vui lòng nhập đúng số điên thoại' class='form-control' name='phone' id='phone' placeholder='Số điện thoại' disabled>    
               <div class='help-block with-errors'></div>
                        <br/>
                        
                        </div>
                           
                      
                    
                </form>
            </div>
</div>
<div id='success'></div>
";
?>

           

                </div>

            </div>

        </div>

    </div>

          <!------------------------- END Content -------------->
            
      <!-- end container -->
 <!--xu ly ajax-->
      
  <!-- footer -->
<?php
include('../footer.php');
?>
    <!-- end footer -->

</body>

</html>