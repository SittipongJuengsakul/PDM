<!-- ค้นหาเอกสารโ๕รงงาน -->
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
                                                <th width="">ชื่อโครงงาน(EN)</th>
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