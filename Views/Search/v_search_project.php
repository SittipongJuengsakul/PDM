<!-- ค้นหาเอกสารโ๕รงงาน -->
                        <?php echo $nav; 
						$cur_date = date("Y");
                        $cur_date = $cur_date+543;
						?>
                        <div class="grid_1">
                        <div class="da-panel-widget pdm-content">
                        <div class="da-panel-header">
                                    <span class="da-panel-title">
                                        <h1>เลือกปีการศึกษา</h1>
                                    </span>
                                </div>
                                    <hr>
                                    <div class="da-form-inline">
                                 <center><div class="da-form-row">
                                                <div class="da-form-item large">
                                                    <select class="chzn-select" style="width:200px" name="year" onchange="location.href=this.value">
                                                        <option selected disabled value = "0">กรุณาเลือกปีการศึกษา</option>
														<option value="<?php echo base_url();?>index.php/PDM/search_project?year=<?php echo $year=0; ?>">All</option>
                                                        <option value="<?php echo base_url();?>index.php/PDM/search_project?year=<?php echo $year=date("Y")+1; ?>">
														<?php echo $cur_date+1;?>
														</option>
                                                        <option value="<?php echo base_url();?>index.php/PDM/search_project?year=<?php echo $year=date("Y"); ?>">
														<?php echo $cur_date;?>
														</option>
														<?php for($c=1;$c<=10;$c++){?>
                                                        <option value="<?php echo base_url();?>index.php/PDM/search_project?year=<?php echo $year=date("Y")-$c; ?>">
														<?php echo $oldYear= $cur_date-$c;?>
														</option>
														<?php } ?>
                                                    </select>
                                                </div>
                                              </div></center>
                                              </div>
                        </div>
                        </div>
                                <div class="grid_3">
                                <div class="da-panel-widget pdm-content">
									<h1>
										ค้นหาโครงงาน
									</h1>
                                <hr>
                                <table id="da-ex-datatable-numberpaging" class="da-table">
                                        <thead>
                                            <tr>
                                                <th width="2%">ลำดับ</th>
                                                <th width="20%">ชื่อโครงงาน(ไทย)</th>
                                                <th width="20%">ชื่อโครงงาน(EN)</th>
                                                <th width="15%">อาจารย์ที่ปรึกษา</th>
												<th width="10%">วันเสนอโครงงาน</th>
												<th width="15%">สถานะ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $i = 1;
										foreach($vision as $search):
										?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $search->frm1_nameth;?></td>
                                                <td><?php echo $search->frm1_nameen;?></td>
                                                <td><?php echo $search->pers_fname." ".$search->pers_lname;?></td>
												<td><?php echo $search->frm1_subdate;?></td>
												<td><?php echo $search->proj_nameth;?></td>
                                            </tr>
										<?php $i++; endforeach; ?>
                                        </tbody>
										</table>
                                </div>
								</div>
