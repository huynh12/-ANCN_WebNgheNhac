<h3 class="content-block-title"> Thống Kê Website</h3>

<?php
	$ketqua = mysqli_query($link,"SELECT luot FROM luot");
	$rows = mysqli_fetch_array($ketqua);
	$page_views = $rows['luot'];
	if (empty($page_views))
	{
		$page_views = "1"; 
         mysqli_query($link(),"INSERT INTO luot (luot)VALUES('1')");
	}
	$page_views++;
	mysqli_query($link,"UPDATE luot SET luot = $page_views");
?>

<div class="border_h2">
	<div class="thong_ke" style="height: 22px; width: auto; padding-top: 5px; border-bottom: 1px solid #f3c0ff;">
		<p class="top_song1">&nbsp;&nbsp;Số lượt truy cập Website: <strong><?php echo "$page_views "; ?></strong></p>
	</div>
<?php

$session=session_id();
$time=time();
$time_check=$time-600;
$sql="SELECT * FROM user_online WHERE session='$session'";
$result=mysqli_query($link,$sql);
$count=mysqli_num_rows($result);

if($count=="0"){
$sql1="INSERT INTO user_online(session, time)VALUES('$session', '$time')";
$result1=mysqli_query($link,$sql1);
}
else {
$sql2="UPDATE user_online SET time='$time' WHERE session = '$session'";
$result2=mysqli_query($link,$sql2);
}
$sql3="SELECT * FROM user_online";
$result3=mysqli_query($link,$sql3);
$count_user_online=mysqli_num_rows($result3);
?>

	<div class="thong_ke" style="height: 22px; width: auto; padding-top: 5px; border-bottom: 1px solid #f3c0ff;">
		<p class="top_song1">&nbsp;&nbsp;Số người đang online <strong><?php echo "$count_user_online "; ?></strong></p>
	</div>
	
<?php
// Nếu truy cập hơn 10 phút thì delete session
$sql4="DELETE FROM user_online WHERE time<$time_check";
$result4=mysqli_query($link,$sql4);
//mysqli_close();
// Xuất kết quả ra nếu mở nhiều trình duyệt và loại trừ

?>
<?php
	require"config.php";
	$sql1=mysqli_query($link,"select count(*) As sohang from baihat");	
	$row=mysqli_fetch_array($sql1);
	{
?>          

          
          
	<div class="thong_ke" style="height: 22px; width: auto; padding-top: 5px; border-bottom: 1px solid #f3c0ff;">
		<p class="top_song1">&nbsp; Số bài nhạc : <strong><?php echo $row['sohang']; }?></strong></p>
	</div>
<?php
    require"config.php";
	$sql1=mysqli_query($link,"select count(*) As sohang from user");	
	$row=mysqli_fetch_array($sql1);
	{
?>
	<div class="thong_ke" style="height: 40px; width: auto; padding-top: 5px;">
		<p class="top_song1">&nbsp; Số thành viên : <strong><?php echo $row['sohang']; }?></strong></p>

		<p class="top_song1" style=" padding-top: 5px;">&nbsp; + Thành viên mới : <strong>
<?php
    require"config.php";
	$sql1=mysqli_query($link,"select * from user order by id desc limit 1");	
	while($row=mysqli_fetch_array($sql1))
	{
?>
			<a title="thành viên <?php echo $row['username']; ?>"><?php echo $row['username']; }?>
				
			</a>
		</p></a>
	</div>
</div>
</div>
