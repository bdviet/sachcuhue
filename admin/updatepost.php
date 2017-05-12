<?php
session_start();
?>
<?php
// Lấy thông tin
$title			= $_POST["title"];
$content   	= $_POST["content"];
$price      = $_POST["price"];
$contact    = $_POST["contact"];
$category   = $_POST["category"];
$address		= $_POST["address"];
///////////////////
$id = $_GET['id'];
echo "AAAAAAAAAA";
$conn = mysqli_connect('localhost', 'root', '', 'sachcuhue') or die ('{error:"bad_request"}');
mysqli_query($conn,"SET NAMES 'UTF8'");
// Khai báo biến lưu lỗi
$sql = "UPDATE postads(title, content, price, contact, category, address) SET title='$title', content='$content', price='$price', contact='$contact',category='$category',address='$address' WHERE id='$id'";

$conn->query($sql);

// Trả kết quả về cho client
die (json_encode($error));
?>