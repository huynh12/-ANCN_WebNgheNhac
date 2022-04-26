		<?php
		if(isset($_SESSION['idadmin']))
		{	
			if($_POST['sua'])	
			{
				$checkbox=$_POST['checkbox'];
				$tenbaihat=$_POST['tenbaihat'];
				$casy=$_POST['casy'];
				if($checkbox=='')
				{
					echo '<script type="text/javascript"> alert("Bạn chưa chọn bài hát nào hết!"); </script>';
				}
				else
				{
					$s_id=implode(", ", $checkbox);
					$update= mysqli_query($link,"update baihat set tenbaihat='$tenbaihat', casy='$casy' where id IN ($s_id)");
					echo '<b>Đã Sửa Thành Công</b>';
				}
			}
			if($_POST['no'])
			{
				$checkbox=$_POST['checkbox'];
				$tenbaihat=$_POST['tenbaihat'];
				if($checkbox=='')
				{
					echo '<script type="text/javascript"> alert("Bạn chưa chọn bài hát nào hết!"); </script>';
				}
				else
				{
					$del_id=implode(", ", $checkbox);
					$sql = mysqli_query($link,"DELETE FROM baihat WHERE id IN($del_id)");
					echo 'Đã Xóa Thành Công bài hát: <b>'.$tenbaihat.'</b>';
				}
			}
	?>
        <div class="workplace">                         
            
            <div class="row-fluid">
                
                <div class="span12">                    
                    <div class="head">
                        <div class="isw-ok"></div>
                        <h1>Bài Hát Đã Qua Duyệt</h1>                         
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid table-sorting">
					<form method="post" action="">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall"/></th>
                                    <th width="25%">Tên Bài Hát</th>
                                    <th width="25%">Tên Ca Sỹ</th>
                                    <th width="25%">Thể Loại</th>
                                    <th width="25%">Nghe Thử</th>                                    
                                </tr>
                            </thead>
                            <tbody>
							<?php
								$sql=mysqli_query($link,"select * from baihat");
								if(mysqli_num_rows($sql)>0)
								{
									while($row=mysqli_fetch_array($sql))
									{
							?>
                                <tr>
                                    <td><input type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>"/></td>
                                    <td><input type="text" class="span12" name="tenbaihat" value="<?php echo $row['tenbaihat']; ?>"></td>
                                    <td><input type="text" class="span12" name="casy" value="<?php echo $row['casy']; ?>"></td>
                                    <td><?php echo $row['theloai']?></td>
<script language=javascript>
function externalLinks()
{
  if (!document.getElementsByTagName) return;
  var anchors = document.getElementsByTagName("a");
  for (var i=0; i<anchors.length; i++)
  {
      var anchor = anchors[i];
      if(anchor.getAttribute("href"))
		anchor.target = "_blank";
  }
}
window.onload = externalLinks;

</script>
                                    <td><a title="Nghe bài hát <?php echo $row['tenbaihat']; ?>" href=".././?mod=play&baihat=<?php echo $row['id'];?>">Nghe Thử</a></td>                                    
                                </tr> 
							<?php
									}
								}
							?>
                            </tbody>
                        </table>
                          
                        <table width="348" border="0">
                          <tr>
                           	<td width="12">&nbsp;</td>
                            <td width="187"><input class="btn btn-large" type="submit" value="Xóa Nhá" onClick="return confirm('Bạn chắc chắn muốn xóa bài hát này?');" name="no" ></td>
                          </tr>
                        </table>
                        <p>&nbsp; </p>
                    </form>
                        <div class="clear"></div>
                    </div>
                </div>                                
                
            </div>            
            
            <div class="dr"><span></span></div>            
            
        </div>
      
<?php
}
?>