<div class="grid_4">
                        	<div class="da-panel collapsible">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img src="images/icons/black/16/list.png" alt="" />
                                        ติดตามผลของโครงงาน
                                    </span>
                                    
                                </div>
                                <div class="da-panel-content">
								<?php $att_form = array("class" => "da-form");
									echo form_open("PDM/c_main",$att_form); ?>
                                    <table class="da-table">
									
                                        <thead>
                                            <tr>
                                            	
                                                <th><center>ชื่อโครงงาน</th>
                                                <th><center>ชื่อนิสิต</th>
                                                <th><center>ผลการอนุมัติของอาจารย์</th>
                                                <th><center>ผลการอนุมัติของนักวิชาการศึกษา</th>
                                                <th><center>ผลอนุมัติโครงงาน</th>
                                            </tr>
                                        </thead>
                                        <tbody>
									
											 <tr>
                                            	<td>โครงงานวิชาการของนิสิต</td>
                                                <td>ชื่อนิสิต</td>
                                                <td>อนุมัติ</td>
                                                <td>อนุมัติ</td>
                                                <td>รอการอนุมัติ</td>   
                                            </tr>
											
                                        </tbody>
                                    </table>
									<div class="da-button-row">		
                                        	<?php $att_sub = array("value" => "ตกลง","class" => "da-button green","name" =>"submit");
											echo form_submit($att_sub); ?>
                                    </div>
									<?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>