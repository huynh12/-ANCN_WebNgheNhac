 <?php
	session_start();
	include("config.php");
?> 

<?php

	if(isset($_SESSION['idadmin']))
	{
		if($_POST['ok'])
		{
			$theloai=$_POST['theloai'];
			$sql=mysqli_query($link,"select * from theloai where noidung='$theloai'");
			$row=mysqli_num_rows($sql);
			if($row!=0)
			{					
				echo '<script type="text/javascript"> alert("Đã có thể loại này trong CSDL"); </script>';
			}
			else
			{
				mysqli_query($link,"insert into theloai(noidung) values('$theloai')");
				echo 'Đã thêm thể loại nhạc: <b>'.$theloai.'</b> vào CSDL';
			}
		}
		
?>
<div class="workplace">
	<form method="post" action="">
	<div class="row-fluid">
		<div class="span6">
		<div class="head">
			<div class="isw-target"></div>
				<h1>Thêm Thể Loại Nhạc</h1>
			<div class="clear"></div>
		</div>
		<div class="block-fluid">                         
			<div class="row-form">
				<div class="span2">Thể Loại:</div>
				<div class="span6">
					<input type="text" name="theloai"/>
				</div>                            
				<div class="clear"></div>
			</div> 
			<div class="row-form">
				<table width="348" border="0">
					<tr>
						<td width="127px"><input class="btn btn-large" type="submit" value="Thêm vào" name="ok"></td>
						<td width="8">&nbsp;</td>
						</tr>
				</table>
				<div class="clear"></div>
			</div>
		</div>
    </div>   
	</form>
	<div class="dr"><span></span></div>
	<?php
		if($_POST['sua'])
		{
			$theloaicu=$_POST['theloaicu'];
			$theloaimoi=$_POST['theloaimoi'];
			$update= mysqli_query($link,"update theloai set noidung='$theloaimoi' where id IN ($theloaicu)");
			echo '<b>Đã sửa thành công</b>';
		}
		if($_POST['no'])
		{
			$theloaicu=$_POST['theloaicu'];
			mysqli_query($link,"DELETE FROM theloai WHERE id IN($theloaicu)");
			echo '<b>Đã Xóa Thành Công </b>';
		}
	?>
	<form method="post" action="">
	<div class="row-fluid">
		<div class="span6">
		<div class="head">
			<div class="isw-target"></div>
				<h1>Sửa và Xóa Thể Loại</h1>
			<div class="clear"></div>
		</div>
		<div class="block-fluid">
			<div class="row-form">
				<div class="span3">Thể Loại Cũ:</div>
				<div class="span6">
					<select name="theloaicu">
						<?php
							$luachon=mysqli_query($link,"select * from theloai");
							while($row=mysqli_fetch_array($luachon))
							{
						?>
							<option value="<?php echo $row['id']?>"> <?php echo $row['noidung']?></option>
						<?php
							}
						?>
					</select>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row-form">
				<div class="span3">Thể Loại Mới:</div>
				<div class="span6">
					<input type="text" name="theloaimoi"/>
				</div>                            
				<div class="clear"></div>
			</div> 
			<div class="row-form">
				<table width="348" border="0">
					<tr>
						<td width="127px"><input class="btn btn-large" type="submit" value="Sửa Lại" name="sua"></td>
						<td width="8">&nbsp;</td>
						<td width="127"><input class="btn btn-large" type="submit" value="Xóa Luôn" onClick="return confirm('Bạn có chắc chắn xóa thể loại này!');" name="no"></td>
					</tr>
				</table>
				<div class="clear"></div>
			</div>
		</div>
    </div>   
	</form>
</div>
<?php
	}
?>