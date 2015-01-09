<!-- ค้นหาเอกสารโ๕รงงาน -->
<script>
function chank($i){
	if($i==1){ 
			var frm = document.getElementById('form1');
			frm.style.display = "block";
			var frm = document.getElementById('form2');
			frm.style.display = "none";
			var frm = document.getElementById('form3');
			frm.style.display = "none";
		}else if($i==2){
			var frm = document.getElementById('form1');
			frm.style.display = "none";
			var frm = document.getElementById('form2');
			frm.style.display = "block";
			var frm = document.getElementById('form3');
			frm.style.display = "none";
		}else if($i==3){
			var frm = document.getElementById('form1');
			frm.style.display = "none";
			var frm = document.getElementById('form2');
			frm.style.display = "none";
			var frm = document.getElementById('form3');
			frm.style.display = "block";
		}else if($i==0){
			var frm = document.getElementById('form1');
			frm.style.display = "none";
			var frm = document.getElementById('form2');
			frm.style.display = "none";
			var frm = document.getElementById('form3');
			frm.style.display = "none";
			window.location.href = "<?php echo site_url('PDM/searchOfUniversity');?>";
			/*	$.ajax({
                  url: "<?php echo site_url('PDM/searchOfUniversity/resultView');?>/",
                  type: 'POST',
                  success: function(response){
                      $('#ShowContent').html(response);
                  }
				})
				*/
		}
	}
</script>
                        <?php echo $nav; 
						$cur_date = date("Y");
                        $cur_date = $cur_date+543;
						$low = 0;
						?>
                    <div class="grid_5">
						<div id="sel" class="da-panel-widget pdm-content">
                        <div class="da-panel-header">
                                    <span class="da-panel-title">
                                        <h1>ค้นหาโครงงาน</h1>
                                    </span>
                                </div>
                                    <hr>
                                    <div class="da-form-inline">
										<center><p id="demo"></p>
												<div class="da-form-row">
                                                <div class="da-form-item large">
                                                    <select class="chzn-select" style="width:200px" name="Choose" onchange="chank(this.value)">
                                                        <option selected disabled value = "0">เลือกประเภทการค้นหา</option>
														<option value = "0">ทั้งหมด</option>
														<option value = "1">ปีการศึกษา</option>
														<option value = "2">คณะที่ศึกษา</option>
														<option value = "3">สาขาที่ศึกษา</option>
                                                    </select>
                                                </div>
												</div>
										</center>
                                    </div>
                        </div>

                        <div id="form1" class="da-panel-widget pdm-content" style="display:none">
                                    <div class="da-form-inline">
										<center><div class="da-form-row">
                                                <div class="da-form-item large">
                                                    <select class="chzn-select" style="width:200px" name="year" onchange="location.href=this.value">
                                                        <option selected disabled value = "0">เลือกปีการศึกษา</option>
                                                        <option value="<?php echo base_url();?>index.php/PDM/searchOfUniversity?year=<?php echo $year=date("Y")+1; ?>">
														<?php echo $cur_date+1;?>
														</option>
                                                        <option value="<?php echo base_url();?>index.php/PDM/searchOfUniversity?year=<?php echo $year=date("Y"); ?>">
														<?php echo $cur_date;?>
														</option>
														<?php for($c=1;$c<=10;$c++){?>
                                                        <option value="<?php echo base_url();?>index.php/PDM/searchOfUniversity?year=<?php echo $year=date("Y")-$c; ?>">
														<?php echo $oldYear= $cur_date-$c;?>
														</option>
														<?php } ?>
                                                    </select>
                                                </div>
												</div>
										</center>
                                    </div>
						</div>

						<div id="form2" class="da-panel-widget pdm-content" style="display:none">
                                    <div class="da-form-inline">
										<center><div class="da-form-row">
                                                <div class="da-form-item large">
                                                    <select class="chzn-select" style="width:200px" name="faculty" onchange="location.href=this.value">
                                                        <option selected disabled value = "0">เลือกคณะที่ต้องการ</option>
														<?php foreach($visionFac as $fac):?>
														<option value="<?php echo base_url();?>index.php/PDM/searchOfUniversity?faculty=<?php echo $fac->fac_id;?>">
														<?php echo $fac->fac_faculty;?>
														</option>
														<?php endforeach;?>
                                                    </select>
                                                </div>
												</div>
										</center>
                                    </div>
						</div>

						<div id="form3" class="da-panel-widget pdm-content" style="display:none">
                                    <div class="da-form-inline">
										<center><div class="da-form-row">
                                                <div class="da-form-item large">
                                                    <select class="chzn-select" style="width:200px" name="major" onchange="location.href=this.value">
                                                        <option selected disabled value = "0">เลือกสาขาที่ต้องการ</option>
														<?php foreach($visionMaj as $maj):?>
														<option value="<?php echo base_url();?>index.php/PDM/searchOfUniversity?major=<?php echo $maj->maj_id;?>">
														<?php echo $maj->maj_major;?>
														</option>
														<?php endforeach;?>
                                                    </select>
                                                </div>
												</div>
										</center>
                                    </div>
						</div>
					</div>
					<div id="ShowContent">
                        <div class="grid_5">
                            <div class="da-panel-widget pdm-content">
									<h1>
										ค้นหาโครงงาน
									</h1>
                                <hr>
                                <table id="da-ex-datatable-numberpaging" class="da-table">
                                        <thead>
                                            <tr>
                                                <th width="">ลำดับ</th>
												<th width="">รหัสนิสิต</th>
												<th width="">ชื่อผู้จัดทำโครงงาน</th>
												<th width="">ชื่อโครงงาน(ไทย)</th>
                                                <th width="">คณะ - สาขาวิชาที่ศึกษา</th>
                                                <th width="">อาจารย์ที่ปรึกษา</th>
												<th width="">วันเสนอโครงงาน</th>
												<th width="">สถานะ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $i = 1;
										foreach($vision as $search):
										?>
                                            <tr>
                                                <td><?php echo $i;?></td>
												<td><?php echo $search->std_id;?></td>
                                                <td><?php echo $search->std_fname." ".$search->std_lname;?></td>
												<td><?php echo $search->frm1_nameth;?></td>
                                                <td><?php echo $search->fac_faculty." - <br />".$search->maj_major;?></td>
												<td><?php echo $search->pers_fname." ".$search->pers_lname;?></td>
												<td><?php echo $search->frm1_subdate;?></td>
												<td><?php echo $search->proj_nameth;?></td>
                                            </tr>
										<?php $i++; endforeach; ?>
                                        </tbody>
										</table>
                            </div>
						</div>
					</div>
