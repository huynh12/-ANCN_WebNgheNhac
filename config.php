 <?php 
$dbhost ="localhost";
$dbuser="root";
$dbpass ="";
$db="dacn";
$link = mysqli_connect("$dbhost","$dbuser","$dbpass") or die("Khong the ket noi");
mysqli_select_db($link,"$db") or die("khong the ket noi CSDL");
mysqli_query($link,"SET NAMES 'UTF8'");
?>  
