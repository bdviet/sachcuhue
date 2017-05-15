<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<title>Sách cũ Huế | Cập nhật thông tin</title>
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
 if (!isset($_SESSION['id_member'])||!isset($_GET['id'])) 
{ //chưa đăng nhập
     echo "<div class='alert alert-danger col-md-9'> <span class='glyphicon glyphicon-remove'></span>Lỗi</div>";
     include('../footer.php');
     exit;
}
$id = $_GET['id'];
// if($id!=$_SESSION['id_member'])
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
$id_post = $_GET['id'];
$sql = "SELECT *  FROM postads WHERE id='$id_post'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result); 
echo "
<div  id='edit'>
<div class='col-md-8 col-md-offset-2 well well-sm' style='margin-top: 20px'>
    
               <form id='change' data-toggle='validator' role='form' method='POST' action='#'>
                  <legend class='text-center active'>  <label>Cập nhật thông tin</label></legend>
                    <fieldset>
                        <legend>Thông tin</legend>
                        <!--  -->
                        <div class='form-group col-md-6'>
                              <label for='title'>Tiêu đề sách</label>
                              <input  value='{$data['title']}' data-error='Vui lòng nhập đúng tiêu đề' type='text' class='form-control' name='title' id='title' placeholder='Nhập tiêu đề' required>
                              <div class='help-block with-errors'></div>
                        </div>
                        <!--  -->
                        <div class='form-group col-md-12'>
                            <label for='content'>Mô tả</label>

                           <div class='form-group'> <textarea data-error='Vui lòng mô tả thêm về cuốn sách' class='form-control' id='content' name='content' placeholder='Mô tả của bạn' required>{$data['content']}</textarea></div>
                            <div class='help-block with-errors'></div>
                        </div> 
                        <!--  -->
                        <div class='form-group col-md-6'>
                            <label for=''>Giá</label>
                            <div class='input-group'>
                            <input value='{$data['price']}' type='number' data-error='Vui lòng nhập giá bán sản phẩm'  class='form-control' name='price' id='' placeholder='Giá VNĐ'' required><span class='input-group-addon'>VNĐ</span>
                            </div>
                            <div class='help-block with-errors'></div>
                        </div>

                        <!--  -->

                        <div class='form-group col-md-12'>
                            <label for=''>Thông tin liên hệ</label>
                            <div class='input-group'>
                            <input value='{$data['contact']}' data-error='Vui lòng nhập thông tin liên hệ' type='text'  class='form-control' name='contact' id='contact' placeholder='Thông tin liên hệ'>     
                            </div>
                             <div class='help-block with-errors'></div>
                        </div>

                        <!--  -->
                        <div class='form-group col-md-6'>
                              <label for='country'>Chuyên Mục</label>
                              <select  class='form-control' name='category' id='category'>
                              <option style='display:none;'' selected>Chọn chuyên mục</option>   
                                    <option>Sách kinh tế</option>
                                    <option>Sách ngoại ngữ</option>
                                    <option>Sách thiếu nhi</option>
                                    <option>Sách văn học</option>
                                    <option>Khoa học kỹ thuật</option>
                                    <option>Sách khoa học</option>
                                    <option>Sách kỹ năng sống</option>
                                    <option>Văn học Việt Nam</option>
                                    <option>Văn học nước ngoài</option>
                                    <option>Sách tin học</option>
                                    <option>Đề thi/Đề cương</option>
                              </select>
                            
                        </div>
            


                        <div class='form-group col-md-6'>
                              <label for='country'>Địa Chỉ</label>
                              <select class='form-control' name='address' id='address'>

                                    <option style='display:none;'' selected>Chọn địa chỉ</option>
                                      <option value='ĐH Kinh Tế'>ĐH Kinh tế Huế</option>
                                      <option value='ĐH Khoa Học'>ĐH Khoa học Huế</option>
                                      <option value='ĐH Ngoại Ngữ'>ĐH Ngoại Ngữ Huế</option>
                                      <option value='ĐH Sư Phạm'>ĐH Sư Phạm Huế</option>
                                      <option value='ĐH Luật'>ĐH Luật Huế</option>
                                      <option value='ĐH Y Dược'>ĐH Y dược Huế</option>
                                      <option value='ĐH Nông Lâm'>ĐH Nông Lâm</option>
                                      <option value='CĐ Công Nghiệp'>CĐ Công Nghiệp Huế</option>
                                      <option value='Phường An Cựu'>Phường An Cựu</option>
                                      <option value='Phường An Đông'>Phường An Đông</option>
                                      <option value='Phường An Hòa'>Phường An Hòa</option>
                                      <option value='Phường An Tây'>Phường An Tây</option>
                                      <option value='Phường Hương Long'>Phường Hương Long</option>
                                      <option value='Phường Hương Sơ'>Phường Hương Sơ</option>
                                      <option value='Phường Kim Long'>Phường Kim Long</option>
                                      <option value='Phường Phú Bình'>Phường Phú Bình</option>
                                      <option value='Phường Phú Cát'>Phường Phú Cát</option>
                                      <option value='Phường Phú Hậu'>Phường Phú Hậu</option>
                                      <option value='Phường Phú Hòa'>Phường Phú Hòa</option>
                                      <option value='Phường Phú Hội'>Phường Phú Hội</option>
                                      <option value='Phường Phú Thuận'>Phường Phú Thuận</option>
                                      <option value='Phường Phước Vĩnh'>Phường Phước Vĩnh</option>
                                      <option value='Phường Phường Đúc'>Phường Phường Đúc</option>
                                      <option value='Phường Tây Lộc'>Phường Tây Lộc</option>
                                      <option value='Phường Thuận Hòa'>Phường Thuận Hòa</option>
                                      <option value='Phường Thuận Lộc'>Phường Thuận Lộc</option>
                                      <option value='Phường Thuận Thành'>Phường Thuận Thành</option>
                                      <option value='Phường Thủy Biều'>Phường Thủy Biều</option>
                                      <option value='Phường Thủy Xuân'>Phường Thủy Xuân</option>
                                      <option value='Phường Tường An'>Phường Tường An</option>
                                      <option value='Phường Vỹ Dạ'>Phường Vỹ Dạ</option>
                                      <option value='Phường Vĩnh Ninh'>Phường Vĩnh Ninh</option>
                                      <option value='Phường Xuân Phú'>Phường Xuân Phú</option>
                              </select>
                        </div>
                        <br/>
                       </fieldset>
                       <div id='errorinput' style='color:red'></div><br/>
                        <div class='form-group'>
                                <div class='col-md-12'>
                                <div id='errorpassword' style='color:red'></div>
                                        <button id='change' type='submit' name='submit' class='btn btn-primary'>
                                                Cập nhật
                                        </button>
                                </div>
                        </div>
                </form>   
</div>
</div>
<div id='success'></div>
";
?>

     <script language="javascript">
        $('#change').submit(function () {
            // Xóa trắng thẻ div show lỗi
            $('#showerror').html('');          
            var title = $('#title').val();
            var content = $('#content').val();  
            var price = $('#price').val();  
            var contact = $('#contact').val();  
            var category = $('#category').val();
            var address = $('#address').val();
            //kiem tra xem nhap du thong tin chua
            
                $.ajax({
                    url : 'uppost.php',
                    type : 'post',
                    dataType : 'json',
                    data : {
                        title : title,
                        content : content,
                        contact : contact,
                        category : category,
                        price  : price,
                        address  : address
                    },
                    success : function (result) {
                        
                        $('#edit').html('');
                        $('#success').append("<div id='fade'><div class='alert alert-success col-md-12'> <span class='glyphicon glyphicon-ok'></span> Cập nhật thành công.</div></div>");
                    }
                });
                    
        });
    </script>  
           

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



=======================================


<?php
session_start();
?>
<?php
if (isset($_POST['submit'])){
$title          = isset($_POST['title']) ? $_POST['title'] : false;
$content        = isset($_POST['content']) ? $_POST['content'] : false;
$price          = isset($_POST['price']) ? $_POST['price'] : false;
$contact        = isset($_POST['contact']) ? $_POST['contact'] : false;
$category       = isset($_POST['category']) ? $_POST['category'] : false;
$address        = isset($_POST['address']) ? $_POST['address'] : false;
$idpost=$_GET['id'];
}
$conn = mysqli_connect('localhost', 'root', '', 'sachcuhue') or die ('{error:"bad_request"}');

// Khai báo biến lưu lỗi
$error = array(
    'error' => 'success'
);
$sql = "UPDATE postads SET title='$title', content='$content', price='$price', contact='$contact', category='$category', address='$address' WHERE id='$id_post'";

$conn->query($sql);
mysqli_query($conn,"SET NAMES 'UTF8'");
// Trả kết quả về cho client
die (json_encode($error));

?>
