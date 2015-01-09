	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style/style.css" />

	<script type="text/javascript" >
	
		$(document).ready(function() {
	

			$('a[id^="edit"]').fancybox({
				'width'				: '55%',
				'height'			: '25%',
				'autoScale'     	: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe',
				onClosed	:	function() {
					parent.location.reload(true); 
				}
			});

			$('a[id^="delete"]').fancybox({
				'width'				: '20%',
				'height'			: '20%',
				onStart		:	function() {
					return window.confirm('Do you want to delete?');
				},
				onClosed	:	function() {
					parent.location.reload(true); 
				}
			});

			/*
				onStart		:	function() {
					return window.confirm('Continue?');
				},
				onCancel	:	function() {
					alert('Canceled!');
				},
				onComplete	:	function() {
					alert('Completed!');
				},
				onCleanup	:	function() {
					return window.confirm('Close?');
				},
				onClosed	:	function() {
					alert('Closed!');
				}
				*/

		});
	</script>


	<?php echo $nav; 
     ?>
						<div class="grid_5_center">
                        	<div class="da-panel-widget pdm-content">
                            	<h1>ติดตามความก้าวหน้า</h1>
                            	<hr>
                                <div class="da-panel-content">
                                    <table id="da-ex-datatable-default" class="da-table">
                                        <thead>
                                            <tr>
                                                <!--<th>NO.</th>-->
												<th width="3%">ลำดับ</th>
                                                <th>รหัสนิสิต</th>
                                                <th>ชื่อโครงงาน TH</th>
                                                <th>ชื่อโครงงาน EN</th>
												<th>สถานะโครงงาน</th>
												<th>วันที่ส่งโครงงาน</th>
												<th>วันที่ตรวจสอบ</th>
												<th>เมนู</th>
												
                                            </tr>
                                        </thead>
						
										
                                        <tbody>
                             <?php
								
								if(count($rs)==0)
								{
									echo"<tr><td colspan='10' align='center'>--nodata--</td></tr>";
								}
								else
								{
								$no=1;
								foreach($rs as $r)
								{
									echo"<tr>";?>
									<td> <?php echo $r['frm1_id']; ?> </td>
									<td> <?php echo $r['std_id'];?></td>	
									<td> <?php echo $r['frm1_nameth']?></td>
									<td> <?php echo $r['frm1_nameen'];?></td>
									
									<?php $sta = $r['proj_id'];
									
									if ($sta==0){
										echo "<td>รอผล</td>";
									}else if ($sta==10){
										echo "<td>ผ่าน</td>";
									}else if ($sta==20){
										echo "<td>ไมผ่าน</td>";
									}?>
									<td> <?php echo $r['frm1_subdate'];?></td>
									<td> <?php echo $r['frm1_assigndate'];?></td>
									<!--<td><a href="edit.php?stu_id=' . $r['std_id'] . '">Edit</a></td>';-->
									<td class = "da-icon-column">       
										<a  href= 'javascript:void(0)' onClick = "edit_person()">
										<img src = '<?php echo base_url(); ?>images/icons/color/pencil.png' class = 'da-tooltip-ne' title = 'ตรวจสอบ'/></a>
										
									</td>
									<?php
									//echo"<td align='center'>";

			
									echo"</td>";
									echo"</tr>";
									$no++;
								}
									//while($r=mysql_fetch_array($rs))
									//{
									//}
								}
	?>
                                            
                                        </tbody>
                                    </table>
									
                                </div>
                            </div>
                        </div>
