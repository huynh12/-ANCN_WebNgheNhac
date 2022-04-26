	<?php
	session_start();
	include("config.php");
?> 
	
	<?php
		if(isset($_SESSION['idadmin']))
		{	
			if($_POST['sua'])	
			{
				$checkbox=$_POST['checkbox'];
				$status=$_POST['status'];
				$pass=$_POST['pass'];
				if($checkbox=='')
				{
					echo '<script type="text/javascript"> alert("Bạn chưa chọn user nào hết!"); </script>';
				}
				else
				{
					$s_id=implode(", ", $checkbox);
					mysqli_query($link,"update user set status='$status', password='$pass' where id IN ($s_id)");
					echo '<b>Đã Sửa Thành Công</b>';
				}
			}
			if($_POST['no'])
			{
				$checkbox=$_POST['checkbox'];
				if($checkbox=='')
				{
					echo '<script type="text/javascript"> alert("Bạn chưa chọn user nào hết!"); </script>';
				}
				else
				{
					$del_id=implode(", ", $checkbox);
					$luachon=mysqli_query($link,"select * from user where id IN($del_id)");
					while($row=mysqli_fetch_array($luachon))
					{
						$a=$row['username'];}
						$sql = mysqli_query($link,"DELETE FROM user WHERE id IN($del_id)");
						echo 'Đã Xóa Thành Công User: <b>'.$a.' </b>';
					
				}
			}
	?>
	<form method="post" action="">
	<div class="workplace">                         
		<div class="row-fluid">
			<div class="span12">                    
				<div class="head">
					<div class="isw-grid"></div>
					<h1>User</h1>                         
					<div class="clear"></div>
				</div>
				<div class="block-fluid table-sorting">
					<table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable">
						<thead>
							<tr>
								<th><input type="checkbox" name="checkall"/></th>
								<th width="25%">User Name</th>
								<th width="25%">PassWord</th>
								<th width="25%">Status</th>
								<th width="25%">Email</th>                                    
							</tr>
						</thead>
						<tbody>
						<?php
							$sql=mysqli_query($link,"select * from user");
							if(mysqli_num_rows($sql)>0)
							{
								while($row=mysqli_fetch_array($sql))
								{
						?>
							<tr>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>"/></td>
								<td><?php echo $row['username']; ?></td>
								<td><input type="text" class="span12" name="pass" value="<?php echo $row['password']; ?>"></td>
								<td><?php echo $row['status']; ?></td>
								<td><?php echo $row['email']; ?></td>                                    
							</tr> 
						<?php
								}
							}
						?>
							Status: 
							<select name="status" onChange="document.chose.submit();">
								<option>OK</option>
								<option>NO</option>
							</select>
						</tbody>
					</table>
					<table width="348" border="0">
					  <tr>
						<td width="12">&nbsp;</td>
						<td width="187"><input class="btn btn-large" type="submit" value="Xóa User" onClick="return confirm('Bạn có chắc chắn muốn xóa ?');" name="no" ></td>
					  </tr>
					</table>
					<p>&nbsp; </p>
					<div class="clear"></div>
				</div>
			</div>                                
		</div>            
		<div class="dr"><span></span></div>            
	</div>
    </form>
<?php
}
?>