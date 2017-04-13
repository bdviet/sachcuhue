<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<title>Sách cũ Huế | Đăng tin</title>
<?php
include('header.php');
?>
<body>
 <!------------------------- Menu bar & login -------------->

<?php
include('menu_login.php');
?>
    
        <!------------------------- End Menu Bar & login -------------->
    
    
         <!-- Start container --> 
    
      <div class="container">
          <div class="row">

<!-- Category -->
<?php
include('category_post.php');
?> 
<!-- end Category -->


<!-- End Category -->
            
            

            
           <!----------------------- Content -------------->
            
                
            <div class="col-md-9">

  
 <?php
 
 

 if (!isset($_SESSION['id_member'])) 
{ //chưa đăng nhập
     echo "<div class='alert alert-warning'> <span class='glyphicon glyphicon-remove'></span> Bạn chưa đăng nhập,hãy đăng nhâp để đăng tin rao vặt</a>
    </div>";
    
     include('footer.php');

    exit;
}

?>


            <div class="col-md-8 col-md-offset-2 well well-sm">
    
 
<form  data-toggle="validator" role="form" method="POST" action="createpostpost.php" enctype="multipart/form-data" >

                  <legend class="text-center active">  <label>Đăng Tin Rao Vặt</label></legend>

                    <fieldset>

<?php
      include('connect.php');
      $id_member=$_SESSION['id_member'];
      $sql = "SELECT *, id FROM member WHERE id='$id_member'";
      $result = mysqli_query($conn, $sql);
      $data = mysqli_fetch_array($result);
      date_default_timezone_set('Asia/Ho_Chi_Minh');
      $date = date('H:i d-m-Y');
      echo"
      <input type='hidden' name='user' value='{$data['first_name']} {$data['last_name']}' />
      <input type='hidden' name='id_member' value='{$data['id']}'/>
      <input type='hidden' name='time' value='$date'/>
      ";
?>
                
                        <div class="form-group col-md-12">
                            <label for="">Tiêu Đề</label>
                            <input data-error="Vui lòng nhập tiêu đề" type="text" class="form-control" name="title" id="" placeholder="Nhập tiêu đề" required>
                            <div class="help-block with-errors"></div>
                        </div>
                          <div class="form-group col-md-12">
                            <label for="specify">Mô tả</label>

                           <div class="form-group"> <textarea data-error="Vui lòng mô tả thêm về sản phẩm" class="form-control" id="specify" name="content" placeholder="Mô tả của bạn" required></textarea></div>
                            <div class="help-block with-errors"></div>
                        </div>
                <div class="form-group col-md-12">
                            <label for="">Giá</label>
                            <div class="input-group">
                            <input type="number" data-error="Vui lòng nhập giá bán sản phẩm"  class="form-control" name="price" id="" placeholder="Giá VNĐ" required><span class="input-group-addon">VNĐ</span>
                            
                            </div><div class="help-block with-errors"></div>
                        </div>
                   


                    </fieldset>

                    <fieldset>
                    
 
                        
                         <div class="form-group col-md-12">
                            <label for="">Thông tin liên hệ</label>
                            <input data-error="Vui lòng nhập thông tin liên hệ" type="text"  class="form-control" name="contact" id="contact" placeholder="Thông tin liên hệ" required>     
                             <div class="help-block with-errors"></div>
                        </div>

                         
                        
                        <div class="form-group col-md-6">
                            <label for="country">Chuyên Mục</label>
                            <select class="form-control" name="category" id="category">
                               
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
            


                        <div class="form-group col-md-6">
                            <label for="country">Trường ĐH</label>
                            <select class="form-control" name="address" id="address">
                                      <!-- <option value="ĐH Kinh Te">ĐH Kinh tế Huế</option>
                                      <option value="ĐH Khoa Hoc">ĐH Khoa học Huế</option>
                                      <option value="ĐH Ngoai Ngu">ĐH Ngoại Ngữ Huế</option>
                                      <option value="ĐH Su Pham">ĐH Sư Phạm Huế</option>
                                      <option value="ĐH Luat">ĐH Luật Huế</option>
                                      <option value="ĐH Y Duoc">ĐH Y dược Huế</option>
                                      <option value="ĐH Nong Lam">ĐH Nông Lâm</option>
                                      <option value="CĐ Cong Nghiep">CĐ Công Nghiệp Huế</option> -->
                                      <option value="Phường An Cựu">Phường An Cựu</option>
                                      <option value="Phường An Đông">Phường An Đông</option>
                                      <option value="Phường An Hòa">Phường An Hòa</option>
                                      <option value="Phường An Tây">Phường An Tây</option>
                                      <option value="Phường Hương Long">Phường Hương Long</option>
                                      <option value="Phường Hương Sơ">Phường Hương Sơ</option>
                                      <option value="Phường Kim Long">Phường Kim Long</option>
                                      <option value="Phường Phú Bình">Phường Phú Bình</option>
                                      <option value="Phường Phú Cát">Phường Phú Cát</option>
                                      <option value="Phường Phú Hậu">Phường Phú Hậu</option>
                                      <option value="Phường Phú Hòa">Phường Phú Hòa</option>
                                      <option value="Phường Phú Hội">Phường Phú Hội</option>
                                      <option value="Phường Phú Thuận">Phường Phú Thuận</option>
                                      <option value="Phường Phước Vĩnh">Phường Phước Vĩnh</option>
                                      <option value="Phường Phường Đúc">Phường Phường Đúc</option>
                                      <option value="Phường Tây Lộc">Phường Tây Lộc</option>
                                      <option value="Phường Thuận Hòa">Phường Thuận Hòa</option>
                                      <option value="Phường Thuận Lộc">Phường Thuận Lộc</option>
                                      <option value="Phường Thuận Thành">Phường Thuận Thành</option>
                                      <option value="Phường Thủy Biều">Phường Thủy Biều</option>
                                      <option value="Phường Thủy Xuân">Phường Thủy Xuân</option>
                                      <option value="Phường Tường An">Phường Tường An</option>
                                      <option value="Phường Vỹ Dạ">Phường Vỹ Dạ</option>
                                      <option value="Phường Vĩnh Ninh">Phường Vĩnh Ninh</option>
                                      <option value="Phường Xuân Phú">Phường Xuân Phú</option>
                            </select>
                        </div>
  


          
          
    


  <div class="form-group col-md-12">
 <i>Hãy tải lên ít nhất 1 hình ảnh về sản phẩm của bạn</i>



<?php
    for ($i=1; $i <= 4; $i++)
    {
          echo "<div class='input-group' style='margin-bottom:2px'><input type='text' class='form-control' readonly > <span class='input-group-btn'> <span class='btn btn-primary btn-file'> <span class='glyphicon glyphicon-folder-open'></span> Tải ảnh lên<input name='file[]' type='file' id='imgInp$i' vaule=''></span></span></div> ";
    }
  ?>


    <?php
    for ($i=1; $i <= 4; $i++)
    {
          echo "<img class='col-md-6 img-responsive' id='img-upload$i'/>  ";
    }
  ?>
  </div>

 <div class="help-block with-errors"></div>


                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input data-error="Hãy đồng ý với điều khoản của chúng tôi" type="checkbox" value="" id="" required>
                                    Tôi đồng ý với <a href="#">Điều khoản dịch vụ</a> của sachcuhue.
                                    <div class="help-block with-errors"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" name="ok" class="btn btn-primary">
                                Đăng Tin
                            </button>
                           
                        </div>
                    </div>

                </form>

            </div>

       
           

                </div>

            </div>

        </div>

    </div>

         <!------------------------- END Content -------------->
            
      <!-- end container -->
    

  <!-- footer -->
<?php


include('footer.php');

?>
    <!-- end footer -->

</body>

</html>
