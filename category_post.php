
</br>  
    <p><a href="http://localhost/sachcuhue/createpost.php" class="btn btn-success pull-right hidden-sm hidden-xs" style="margin-right:20px"><i class="  glyphicon glyphicon-send"></i>  Đăng Tin Miễn Phí</a>
            <a href="http://localhost/sachcuhue/createpost.php" class="btn btn-sm btn-success pull-right hidden-lg hidden-md" style="margin-right:20px"><i class="  glyphicon glyphicon-send"></i>  Đăng Tin Miễn Phí</a>
    </p>

<div class="clearfix"></div>
<hr/>


            <div class="col-md-3">
             
             <!-- display on mobile-->
                <div class="list-group hidden-md hidden-lg" >
                
                <a data-toggle="collapse" href="#showchuyenmuc" class="list-group-item active" > Chuyên Mục <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
                
                <div id="showchuyenmuc" class="collapse">
                    <a href="http://localhost/sachcuhue/filter?category=Sách kinh tế" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Sách kinh tế
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách kinh tế' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    


                    <a href="http://localhost/sachcuhue/filter?category=Sách ngoại ngữ" class="list-group-item"><span class="glyphicon glyphicon-briefcase"></span> Sách ngoại ngữ
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách ngoại ngữ' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a hhref="http://localhost/sachcuhue/filter?category=Sách thiếu nhi" class="list-group-item"><span class="glyphicon glyphicon-home"></span> Sách thiếu nhi
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách thiếu nhi' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost/sachcuhue/filter?category=Sách văn học" class="list-group-item"><span class="glyphicon glyphicon-heart"></span> Sách văn học
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách văn học' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost/sachcuhue/filter?category=Khoa học kỹ thuật" class="list-group-item"><span class="glyphicon glyphicon glyphicon-book"></span> Khoa học kỹ thuật
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Khoa học kỹ thuật' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost/sachcuhue/filter?category=Sách khoa học" class="list-group-item"><span class="glyphicon glyphicon-wrench"></span> Sách khoa học
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách khoa học' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost/sachcuhue/filter?category=Sách kỹ năng sống" class="list-group-item"><span class="glyphicon glyphicon-phone"></span> Sách kỹ năng sống
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách kỹ năng sống' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost/sachcuhue/filter?category=Văn học Việt Nam" class="list-group-item"><span class="glyphicon glyphicon glyphicon-camera"></span> Văn học Việt Nam
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Văn học Việt Nam' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost/sachcuhue/filter?category=Văn học nước ngoài" class="list-group-item"><span class="glyphicon glyphicon glyphicon-headphones"></span> Văn học nước ngoài 
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Văn học nước ngoài' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost/sachcuhue/filter?category=Sách tin học" class="list-group-item"><span class="glyphicon glyphicon-plane"></span> Sách tin học
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách tin học' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost/sachcuhue/filter?category=Đề thi / Đề cương" class="list-group-item"><span class="glyphicon glyphicon-piggy-bank"></span> Đề thi / Đề cương  
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Đề thi / Đề cương' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>
                </div>
                 <div class="list-group hidden-md hidden-lg" ><i style="color:#2c3e50;"> * Nhấp Vào thanh Chuyên mục để xem thêm</i></div>
                </div>
                 <!-- end mobile-->
                 
                  <!-- display on desktop-->
                <div class="list-group hidden-sm hidden-xs" >
                
                <span class="list-group-item active" > Chuyên Mục </span>
                
                <div id="showchuyenmuc">
                    <a href="http://localhost/sachcuhue/filter?category=Sách kinh tế" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Sách kinh tế
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách kinh tế' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    


                    <a href="http://localhost/sachcuhue/filter?category=Sách ngoại ngữ" class="list-group-item"><span class="glyphicon glyphicon-briefcase"></span> Sách ngoại ngữ
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách ngoại ngữ' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost/sachcuhue/filter?category=Sách thiếu nhi" class="list-group-item"><span class="glyphicon glyphicon-home"></span> Sách thiếu nhi
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách thiếu nhi' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost/sachcuhue/filter?category=Sách văn học" class="list-group-item"><span class="glyphicon glyphicon-heart"></span> Sách văn học
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách văn học' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost/sachcuhue/filter?category=Khoa học kỹ thuật" class="list-group-item"><span class="glyphicon glyphicon glyphicon-book"></span> Khoa học kỹ thuật
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Khoa học kỹ thuật' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost/sachcuhue/filter?category=Sách khoa học" class="list-group-item"><span class="glyphicon glyphicon-wrench"></span> Sách khoa học
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách khoa học' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost/sachcuhue/filter?category=Sách kỹ năng sống" class="list-group-item"><span class="glyphicon glyphicon-phone"></span> Sách kỹ năng sống
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách kỹ năng sống' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost/sachcuhue/filter?category=Văn học Việt Nam" class="list-group-item"><span class="glyphicon glyphicon glyphicon-camera"></span> Văn học Việt Nam
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Văn học Việt Nam' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost/sachcuhue/filter?category=Văn học nước ngoài" class="list-group-item"><span class="glyphicon glyphicon glyphicon-headphones"></span> Văn học nước ngoài 
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Văn học nước ngoài' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost/sachcuhue/filter?category=Sách tin học" class="list-group-item"><span class="glyphicon glyphicon-plane"></span> Sách tin học
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách tin học' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost/sachcuhue/filter?category=Đề thi/Đề cương" class="list-group-item"><span class="glyphicon glyphicon-piggy-bank"></span> Đề thi / Đề cương  
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Đề thi   /Đề cương' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>
                
                </div>
                   </div>

                 <!-- end desktop-->
                 
                 
            </div>