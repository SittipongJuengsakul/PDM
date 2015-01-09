<div id="da-content-area">
                <?php echo $nav;
	echo $sidebar; ?>
				<div class="grid_3">
                    <div class="da-panel-widget pdm-content">						
									<h1>ประเมินเกรดโครงงาน</h1>   
                                    <hr>                              
								<div id="da-ex-dialog-form-div" class="no-padding">
                                        <form id="da-ex-dialog-form-val" class="da-form" action='<?php echo base_url();?>index.php/PDM/' method='post' >
                                            <div id="da-validate-error" class="da-message error" style="display:none;"></div>
                                            <div class="da-form-inline">
                                            <div class="da-form-row">
                                                    <label>ครั้งที่</label>
                                                    <div class="da-form-col-4-8">
                                                    <input type="text" id="num" />
                                                </div>
                                                </div>
                                                <div class="da-form-row">
                                                    <label>เรื่องที่จะรายงาน</label>
                                                    <div class="da-form-col-4-8">
                                                    <input id="name" name="names"/>
                                            </div>
                                            </div>
                                            <div class="da-form-row">
                                                    <label>เอกสารที่อัพโหลด</label>
                                                    <div class="da-form-col-4-8">
                                                   <input id="uploaddetail" name="uploaddetails"/>
                                            </div>
                                            </div>
                                            <div class="da-form-row">
                                                    <label>อัพโหลดเอกสารแนบ</label>
                                                    <div class="da-form-col-2-8">
                                                   <input id="upload" name="uploads" />
                                                </div>
                                            </div> 
                                         </div>
                                        </form>
                                </div>
							<table id="da-tatable" class="da-table">
								<thead>
									<tr>
										<th width="10%">ครั้งที่</th>
                                        <th width="25%"><center>ชื่อ-นามสกุล</center></th>
										<th width="25%"><center>ชื่อโครงงาน</center></th>
										<th width="20%"><center>เกรดโครงงานที่ได้รับจากอาจารย์ที่ปรึกษา</center></th>
										<th width="30%"><center>คำแนะนำจากอาจารย์ที่ปรึกษา</center></th>
                                    </tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>นายวริทธิ์ อุสาหพานิช</td>
										<td>ประเพณีวิ่งควาย</td>
										<td><center>B</center></td>
										<td class="da-icon-column">
                                                	<a id="da-ex-dialog" href="#">
														<img title="ดูรายละเอียด" src="<?php echo base_url();?>/images/icons/color/magnifier.png" alt="" />
													</a>
													<!-- Dialog picture Sert-->
													<div id="da-ex-dialog-div" style="display:none;">
														
													</div>
										</td>
									</tr>
									<!--<tr>
										<td>2</td>
										<td>รายงานความคืบหน้าครั้งที่2</td>
										<td>2.โครงงาน</td>
										<td>ตรวจสอบแล้ว</td>
										<td class="da-icon-column">
                                                	<a href="#"><img src="<?php echo base_url(); ?>/images/icons/color/magnifier.png" /></a>
										</td>
												
                                        
									
									</tr>-->
								</tbody>
							</table>
                    </div>
                </div>