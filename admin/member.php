<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<title>Sách cũ Huế | Kênh rao vặt sách cũ của Sinh Viên ĐH Huế</title>
<?php
include('../header.php');
?>
<body>
 <!------------------------- Menu bar & login

  -------------->


        <!------------------------- End Menu Bar & login -------------->


    
         <!-- Start container --> 
<?php
include('../menu_login.php');
?>
</a>

 <div class="container">
          <div class="row">

<!-- Category -->


<?php

    

if (isset($_SESSION['id_member'])&&$_SESSION['id_member']=='12') //12: id của admin
    {   
       
         echo "";
    }
      else
      {

           echo "<div class='alert alert-danger'> <span class='glyphicon glyphicon-remove'></span> Bạn không truy cập vào đây</div>  ";
           exit;

      }
?>
     
           <!----------------------- Content -------------->
            
              
            <div class="col-md-12">



<table class='table table-striped table-bordered'>
  <thead>
    <tr class="active">

      <th>STT</th>
      <th>ID</th>
      <th>Họ và tên</th>
      <th>Email</th>
      <th>SĐT</th>
      <th>Hành động</th>

    </tr>
  </thead>
  <tbody>

<div class='modal-footer'>
                                            <a style='color:#a94442' href='./signup2.php' ><button type='button' class='btn btn-danger'>Thêm người dùng</button></a>
                                          </div>

          <?php
include('../connect.php');


                $display = 10;
                $query = "SELECT COUNT(id) FROM member order by id desc";
                $result = mysqli_query($conn,$query);         
                $rows = mysqli_fetch_array($result);
                $record = $rows[0];
                $current = '';
                if($record > $display) {
                        $page = ceil($record/$display);
                    } else {
                        $page = 1;
                    }
                if ((isset($_GET['f']) && (int)$_GET['f']>=0)) $start = ($_GET['f']-1)*10;
                else $start = 0;
      
                $current = ($start/$display)+1;
                $last = $page - 1 ;
                if ($current >= 7) {
                    $start_page = $current - 3;
                    if ($page > $current + 3)
                        $end_page = $current + 3;
                    else if ($current <= $page && $current > $page - 6) {
                        $start_page = $page - 6;
                        $end_page = $page;
                    } else {
                        $end_page = $page;
                    }
                } else {
                    $start_page = 1;
                    if ($page > 7)
                        $end_page = 7;
                    else
                        $end_page = $page;
                }
 
 
 
                $query_data = "SELECT * FROM member ORDER BY ID asc
                               LIMIT $start, $display";
                $result_data = mysqli_query($conn,$query_data);

                 $stt = 1;
                if(isset($_GET['f'])&&$_GET['f']!=1)
                {
                    $page = $_GET['f'];
                    $stt=($page-1)*10+1;
                }
                while($data = mysqli_fetch_array($result_data)) {
                  echo"<tr>
                          <th scope='row'>$stt</th>
                          <td>{$data['ID']}</td>
                          <td><a href = '../user/?id_member={$data['ID']}'>{$data['first_name']} {$data['last_name']}</a></td>
                          <td>{$data['email']}</a></td>
                          <td>{$data['phone']}</td>
                          <td><a href='../admin/xemtt.php?id_member={$data['ID']}'> Xem </a> ||<a href='../admin/sua.php?id_member={$data['ID']}'> Sửa </a> || <a href='../admin/delmember.php?id={$data['ID']}'> Xóa </a></td>
                        
                        </tr>
                        ";
                        $stt=$stt+1;
                
                }
           
        
                  echo"<div class='clearfix'></div><ul class='pagination pagination-sm pull-right'>";

                 echo"</ul><div class='clearfix'></div>";

?>
      </tbody>
</table>          
                   

    <?php
                  echo"<div class='clearfix'></div><ul class='pagination pagination-sm pull-right'>";
                if($page > 1) {
                    if ($current > 1) {
                        echo "<li><a href='?f=1'>&laquo;</a></li>";
                    } 
 
                    for ($i = $start_page; $i <= $end_page; $i++) {
 
                        if ($current == $i)
                            echo " <li class='active'><a href='#''>$i</a></li>";
                        else
                            echo "<li><a href='?f=".($i)."'>$i</a></li>";
                    }
 
                    if ($current < $page) {
                        echo "<li><a href='?f=$last'>&raquo;</a></li>" ;
                    } 
                }
                 echo"</ul><div class='clearfix'></div>";
?>
    </div>
     </div>
         </div> 
<?php
include('../footer.php');
?>
</body>

</html>
