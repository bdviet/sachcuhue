<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
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


           <!----------------------- Content -------------->
            
                
            <div class="col-md-9">
   
<?php
  

    include ('../connect.php');
    $id = $_GET['id'];
    $id_member = $_SESSION['id_member'];
    $sql = "SELECT * FROM member WHERE member.id =  $id_member";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    if (!$data){
         echo "<div class='alert alert-warning'> <span class='glyphicon glyphicon-floppy-remove'></span> Người dùng này không tồn tại hoặc đã bị xóa</div>  ";
    include('../footer.php');
      exit();}

    if ($data['ID'] =='12') //12: id của admin
    {   echo '<script language="javascript">
            confirm("Bạn có muốn xóa không?");
        </script>';
        $sql = "DELETE FROM member WHERE id = $id";
        $conn->query($sql);
         echo "<div class='alert alert-success'> <span class='glyphicon glyphicon-ok'></span> Đã xóa thành công người dùng</div>  ";
    include('../footer.php');
    }
      else
      {

           echo "<div class='alert alert-danger'> <span class='glyphicon glyphicon-remove'></span> Bạn không có quyền xóa người dùng này</div>  ";
    include('../footer.php');

      }
?>
            </div>

        </div>

    </div>
  
   
</body>

</html>
