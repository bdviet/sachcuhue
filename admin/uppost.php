<?php
session_start();
?>
<?php
$title          = isset($_POST['title']) ? $_POST['title'] : false;
$content        = isset($_POST['content']) ? $_POST['content'] : false;
$price         	= isset($_POST['price']) ? $_POST['price'] : false;
$contact        = isset($_POST['contact']) ? $_POST['contact'] : false;
$category       = isset($_POST['category']) ? $_POST['category'] : false;
$address        = isset($_POST['address']) ? $_POST['address'] : false;
$idpost=$_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'sachcuhue') or die ('{error:"bad_request"}');

// Khai báo biến lưu lỗi
$error = array(
    'error' => 'success'
);
$sql = "UPDATE postads SET title='$title', content='$content', price='$price', contact='$contact', category='$category', address='$address' WHERE id='$idpost'";
mysqli_query($conn,"SET NAMES 'UTF8'");
$conn->query($sql);

// Trả kết quả về cho client
die (json_encode($error));

?>
