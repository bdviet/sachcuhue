<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<title>Sách cũ Huế | Kênh rao vặt sách cũ của Sinh Viên ĐH Huế</title>
<script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : document.querySelector('h1').innerHTML );var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async=1; ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=97ec189214b25519b472cdeb480ea939&data=eyJoYXNoIjoiNTk5MTJlNjI5N2RhYWZmMDM2NTdjMGM3YjBlYjQzMzQiLCJzc29faWQiOjQ3NTA2MjN9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>      
<?php
include('header.php');
?>
<body>
 <!------------------------- Menu bar & login


  -------------->

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



     
           <!----------------------- Content -------------->
            
            <div class="col-md-9">

         
         


  <div class="row carousel-holder hidden-xs">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/job.jpg" alt="Tìm kiếm sách ..">
                                    <div class="carousel-caption trickcenter">
                                    <h3><span class ="label label-primary">Tìm kiếm sách ..</span></h3>
                                </div>
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/phone.jpg" alt="Bán sách cũ ..">
                                    <div class="carousel-caption trickcenter">
                                    <h3><span class ="label label-primary">Bán sách cũ ..</span></h3></div>
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/room.jpg" alt="Tìm kiếm đề cương ôn tập..">
                                    <div class="carousel-caption trickcenter">
                                    <h3><span class ="label label-primary">Tìm kiếm đề cương ôn tập..</span></h3>
                                </div></div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>



<div class="clearfix"></div>


                <div id="content">
            <?php require('loadingpost.php'); ?>
        </div>
        <div id="loadding" class="hidden">
        <div class='clearfix'></div>
  
        <center><label id="loadingon" class="btn btn-success btn-md" style="margin-top:10px"><span class="glyphicon glyphicon-refresh fast-right-spinner" ></span> Đang tải thêm bài viết...</label>

        </center>
        </div>



<div class="clearfix"></div>


        


   

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
