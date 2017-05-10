

    <!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed menuleft" data-toggle="collapse" data-target="#menu">
        <span class="sr-only">Trình đơn</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
      </button>



    <a class="navbar-brand" href="http://localhost/sachcuhue/index.php"><span class="glyphicon glyphicon-map-marker"></span> Sách cũ Huế</a>
  
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#search">
     <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      </button>
    
    </div>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="nav navbar-nav">
          <li>
                        <a href="http://localhost/sachcuhue/aboutus.php"><span class="glyphicon glyphicon-exclamation-sign"></span> Giới thiệu</a>
                    </li>
        
            
            <!-- Search bar PC  -->

        

    
         <form   style="width:50%" data-toggle="validator" class="navbar-form navbar-left hidden-sm hidden-xs" role="search" action="http://localhost/sachcuhue/search" method="GET">
      <div class="input-group">
       <span class="input-group-btn">
       
         <select class="form-control" name="address" id="address"  style="width:200px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;">
                                      <option value="ĐH Kinh Te">ĐH Kinh tế Huế</option>
                                      <option value="ĐH Khoa Hoc">ĐH Khoa học Huế</option>
                                      <option value="ĐH Ngoai Ngu">ĐH Ngoại Ngữ Huế</option>
                                      <option value="ĐH Su Pham">ĐH Sư Phạm Huế</option>
                                      <option value="ĐH Luat">ĐH Luật Huế</option>
                                      <option value="ĐH Y Duoc">ĐH Y dược Huế</option>
                                      <option value="ĐH Nong Lam">ĐH Nông Lâm</option>
                                      <option value="CĐ Cong Nghiep">CĐ Công Nghiệp Huế</option>
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
        </span>
      
         
      <input type="text" style="width: 300px" class="form-control" name="keyword" placeholder="Bạn muốn tìm gì.."  required/>
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Tìm kiếm</button>
        </span>

      </div>
      </form>


<!-- Search bar PC -->
  
      </ul>
        <ul class="nav navbar-nav navbar-right">




<?php

//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['id_member'])) 
{ //chưa đăng nhập
     echo "      <li class='dropdown'>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'> <span class='glyphicon glyphicon-flag'></span> Tài khoản <span class='caret'></span></a>
          <ul class='dropdown-menu'>    
          <li> <a href='#' data-toggle='modal' data-target='#login-modal'> <span class='glyphicon glyphicon-user'></span> Đăng nhập</a></li>
         <li><a href='http://localhost/sachcuhue/signup.php'><span class='glyphicon glyphicon-pencil'></span> Đăng kí</a></li>
   
          </ul>
        </li>
";
}
else
  { //chưa đăng nhập
    if(isset($_POST['logout'])){
    if ($_POST['logout'] == "yes")
    {
      if (isset($_SESSION['id_member']))
          unset($_SESSION['id_member']); // xóa session login
      echo "  <li class='dropdown'>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'> <span class='glyphicon glyphicon-flag'></span> Tài khoản <span class='caret'></span></a>
          <ul class='dropdown-menu'>
 <li><a href='http://localhost/sachcuhue/signup.php'><span class='glyphicon glyphicon-pencil'></span> Đăng kí</a></li>
   <li> <a href='#' data-toggle='modal' data-target='#login-modal'> <span class='glyphicon glyphicon-user'></span> Đăng nhập</a></li>
          </ul>
        </li>
";
            
    }}
    else//đã đăng nhập
    {
      include('connect.php');
      $id_member=$_SESSION['id_member'];
      $sql = "SELECT *, id FROM member WHERE id='$id_member'";
      $result = mysqli_query($conn, $sql);
      $data = mysqli_fetch_array($result);
            echo " <li class='dropdown'>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'> <span class='glyphicon glyphicon-user'></span> {$data['first_name']} {$data['last_name']} <span class='caret'></span></a><ul class='dropdown-menu'>";

            
            echo"<li><a href='http://localhost/sachcuhue/user/?id_member={$data['id']}''><span class='glyphicon glyphicon-comment'></span> Bài đăng của bạn</li>";


            echo"<li><a href='http://localhost/sachcuhue/user/editprofile.php?id_member={$data['id']}'><span class='glyphicon glyphicon-pencil'></span> Cập nhật thông tin/mật khẩu</a></li>";


       if (($_SESSION['id_member'])==12)
       {
        echo"<li><a href='http://localhost/sachcuhue/admin/postads.php'><span class='glyphicon glyphicon-bookmark'></span> Quản lý bài đăng</a></li>";
        echo"<li><a href='http://localhost/sachcuhue/admin/member.php'><span class='glyphicon glyphicon-cog'></span> Quản lý thành viên</a></li>";
      }
      echo"<li>
      <form name='logout' action='http://localhost/sachcuhue/index.php' method='post'>
       <input type='hidden' name='logout' value='yes'>
      </form>
      <a href='javascript:document.logout.submit()''><span class='glyphicon glyphicon-off'></span> Đăng Xuất</a>
      </li>";
      echo"</ul></li>";
    }
  }
?>

    </ul>
  
    </div>
    <!-- Search bar Mobile -->
    <div class="collapse navbar-collapse hidden-lg" id="search">

      <form  data-toggle="validator" class="mobile_search hidden-md hidden-lg" role="search" action="http://localhost/sachcuhue/search" method="GET">
      <div class="input-group">
        <span class="input-group-form">
       
        <select class="form-control" name="address" id="address"  style="width:25%;border-top-left-radius: 4px;border-bottom-left-radius: 4px;">
                                      <option value="ĐH Kinh Te">ĐH Kinh tế Huế</option>
                                      <option value="ĐH Khoa Hoc">ĐH Khoa học Huế</option>
                                      <option value="ĐH Ngoai Ngu">ĐH Ngoại Ngữ Huế</option>
                                      <option value="ĐH Su Pham">ĐH Sư Phạm Huế</option>
                                      <option value="ĐH Luat">ĐH Luật Huế</option>
                                      <option value="ĐH Y Duoc">ĐH Y dược Huế</option>
                                      <option value="ĐH Nong Lam">ĐH Nông Lâm</option>
                                      <option value="CĐ Cong Nghiep">CĐ Công Nghiệp Huế</option>
                            </select>
       </span>
      <input  style="width:75%" data-error="Vui lòng nhập từ khóa muốn tìm kiếm" type="text" class="form-control" name="keyword" placeholder="Bạn muốn tìm gì..."  required/>
      <span class="input-group-btn">
        <button  class="btn btn-default" type="submit">  <i class="glyphicon glyphicon-search"></i></button>
      
       </span>
       </div>
</form>


    </div>

    <!-- Search bar Mobile -->


  </div><!-- /.container -->
  
</nav>


 <!-- END Navigation -->

 

  
    <!-- Login  form-->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Đăng nhập</h1><br>
          <form  id="login" data-toggle="validator" role="form" method="POST" action="">
          <input type="text" name="email_login" id="email_login" placeholder="Email" required>
          <input type="password" name="password_login" id="password_login" placeholder="Mật khẩu" required>
          <div id="login_error" style="color:red"></div>
          <input type="submit" class="btn btn-primary" value="Đăng nhập">
          </form>
          
          <div class="login-help">
        <a style='color:black' href='http://localhost/sachcuhue/signup.php'><strong>Bạn chưa có tài khoản ?</strong>
          </div>
        </div>
      </div>
</div>

    <!-- Login form-->
 <script language="javascript">
            $('#login').submit(function ()
            {
                // Xóa trắng thẻ div show lỗi
                $('#login_error').html('');
            
                var email = $('#email_login').val();
                var password = $('#password_login').val();
                // Kiểm tra dữ liệu có null hay không
                    
                
                // Nếu bạn thích có thể viết thêm hàm kiểm tra định dang email
                 if ($.trim(email) == ''||$.trim(password) == '')
                 {
                  $('#login_error').html('');
                  $('#login_error').html('Vui lòng nhập đầy đủ thông tin');
                  return false;
                }
                // ở đây tôi làm chú yêu chỉ cách dùng ajax nên sẽ ko đề cập tới,
                // vì sợ bài dài sẽ rối

                $.ajax({
                    url : 'http://localhost/sachcuhue/loginpost.php',
                    type : 'post',
                    dataType : 'json',
                    data : {
                        email : email,
                        password : password
                    },
                    success : function (result)
                    {
                        // Kiểm tra xem thông tin gửi lên có bị lỗi hay không
                        // Đây là kết quả trả về từ file do_validate.php
                        
                        var html = '';
                        
                        // Lấy thông tin lỗi email
                        if ($.trim(result.email) != ''){
                            html += result.email;
                        }
                       
                        // Cuối cùng kiểm tra xem có lỗi không
                        // Nếu có thì xuất hiện lỗi
                        if (html != ''){
                          $('#login_error').html('');
                           $('#login_error').html('Email hoặc mật khẩu không chính xác');
                        }
                        else {
                            // Thành công
                             window.location.href = 'http://localhost/sachcuhue/index.php';
                        }
                    }
                });
                
                return false;
            });
            
        </script> 
      <!------------------------- END Header -------------->
  

