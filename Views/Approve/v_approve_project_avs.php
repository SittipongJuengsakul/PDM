				<?php echo $nav;
					 echo $sidebar; ?>
					<div class="grid_3">
						<div class="da-panel-widget pdm-content">
							<h1>
							อนุมัติแบบฟอร์มเสนอโครงงาน
							</h1>
							<hr>
							
							<div class="da-panel-content">
							<table style="text-align:center" class="da-table">
								<thead>
									<tr>	
										<th style="text-align:center;width:5%;">ลำดับ</th>
										<th style="text-align:center;width:25%;">ชื่อโครงงาน</th>
										<th style="text-align:center;width:25%;">ชื่อนิสิต</th>
										<th style="text-align:center;width:10%;">วันที่ส่งโครงงาน</th>
										<th style="text-align:center;width:5%;">ตัวเลือก</th>
									</tr>
								</thead>
								<tbody>

								<?php $i=1;$j=0;foreach($form as $u02):
								if( $u02->proj_id == 9){
								?>
									<tr style="text-align:center">
										<th><?php echo $i;?></th>
										<th><?php echo $u02->frm1_nameth?></th>
										<th><?php echo $u02->std_fname." ".$u02->std_lname;?></th>
										<th><?php echo $u02->frm1_subdate?></th>
										<th>
											<a href = "<?php echo base_url();?>index.php/PDM/approve_project_avs/load_view?id=<?php echo $u02->frm1_id;?>">
												<img title="ดูรายละเอียด" src="<?php echo base_url();?>/images/icons/color/magnifier.png" alt="" />
											</a>
										
										</th>
									</tr>
								<?php $i++;$j++;
								}
								endforeach; ?>
								<?php if($j==0){?>
								<tr><td colspan="5"><center>ยังไม่มีโครงงานที่เสร็จสมบูรณ์</center></td></tr>
								<?php }?>
								</tbody>
							</table>
							</div>
						</div>
					</div>