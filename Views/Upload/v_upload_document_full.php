<!-- ค้นหาเอกสารโ๕รงงาน -->
<script>
	function loadding(){
	//alert("HA HA");
		document.getElementById('strDowload').innerHTML="<b> Loadding . .</b>";
		var show = document.getElementById('da-ex-pba');
		show.style.display = "block";
		
		$("#da-ex-pba").progressbar('value', Math.floor(100));
		
	}
</script>
 			<?php echo $nav;
					 echo $sidebar;
					 ?>
                    <div class="grid_3">
                        <div class="da-panel-widget pdm-content">
							<h1>
								โครงงานทีอัปโหลดแล้ว
							</h1>
                        <hr>
						<table border=0 class="da-table" id="da-ex-datatable-numberpaging">
						<thead>
							<tr >
								<th style="text-align:center;width:10px">ลำดับ</th>
								<th style="text-align:center">ชื่อโครงงาน</th>
								<th style="text-align:center">วันที่ทำการอัปโหลด</th>
								<th style="text-align:center">ไฟล์ที่อัปโหลด</th>
								<th style="text-align:center">สถานะโครงงาน</th>
								<th style="text-align:center">ตัวเลือก</th>
							</tr>
						</thead>
						<tbody>
						<?php $i = 1; foreach($Upload as $up):?>
							<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $up->frm1_nameth;?></td>
								<td><?php echo $up->upl_subdate;?></td>
								<td><a href="<?php echo base_url()."index.php/PDM/upload_document_full/download/".$up->upl_namefile."?id=".$up->upl_nameId;?>"><?php echo $up->upl_namefile;?></a></td>
								<td><?php echo $up->proj_nameth;?></td>
								<td>
									<a href="<?php echo base_url();?>index.php/PDM/upload_document_full/update?nameFile=<?php echo $up->frm1_id;?>" >
                                        <img title="แก้ไข" src="<?php echo base_url();?>/images/icons/color/pencil.png" alt="" />
                                    </a>
								</td>
							</tr>
						<?php $i++; endforeach;?>
						</tbody>
						</table>
						</div>
					</div>

	
					<div class="grid_3" id="form1">
						<div class="da-panel-widget pdm-content">
							<h1>
								อัพโหลดเอกสาร
							</h1>
                        <hr>
                        <form name="myform" id="myform" class="da-form" action="<?php echo base_url();?>index.php/PDM/upload_document_full/getFile" method="post" enctype="multipart/form-data" style="width:100%;" OnSubmit="loadding()">
                            <div id="da-validate-error" class="da-message error" style="display:none;"></div>
                            <div class="da-form-inline">
                                <div class="da-form-row">
                                    <label>ชื่อโครงงาน</label>
                                    <div class="da-form-item large">
									<?php if($low == 0){?>
                                        <select disabled value="ไม่มีโครงงานที่สามารถอัปโหลดไฟล์ได้"></select>
										<?php } else {?>
										<select class="chzn-select" name="ProjectName">
										<?php foreach($namePrj as $prj):?>
											<option name="value" value="<?php echo $prj->frm1_id;?>"><?php echo $prj->frm1_nameth;?></option>
										<?php endforeach;?>
										</select>
										<?php } ?>
                                    </div>
                                </div>
                                <div class="da-form-row">
                                    <label>อัพโหลดเอกสาร</label>
                                    <div class="da-form-item large">
                                    	<span class="formNote">doc, docx</span>
                                        <input type="file" name="FileUpload" class="da-custom-file" />
                                    	<label for="picture" class="error" generated="true" style="display:none;"></label>
                                    </div>
                                </div>
                                <div class="da-form-row">
                                    <label>เพิ่มเติม</label>
                                    <div class="da-form-item large">
                                    	<textarea rows="4" cols="50" name="OtherText" id="textinput"></textarea>
                                    </div>
                                </div>
								<div class="da-form-row">
								<?php if($low == 0){?>
									<input type="reset" class="da-button gray" style="margin-left:10px;float:right" value="reset">
									<input type="button" disabled="disabled" style="background-color:#A7D037;float:right" class="da-button green" value="อัพโหลด" >
									<p style="color:red;">ไม่มีโครงงานที่สามารถอัปโหลดไฟล์ได้</p>
								<?php }else{?>
                                    <input type="submit" style="background-color:#A7D037;float:right" class="da-button green" value="อัพโหลด" OnClick="return confirm('ต้องการอัปโหลดหรือไม่ !')">
									<span class="formNote"><p id="strDowload" style="color:green;float:left;margin-right:10px;"></p></span>
									<div id="da-ex-pba" class="animated blue" style="margin-left:10px;width:20%;display:none"></div>
                                <?php }?>
								</div>
                            </div>
                        </form>
						</div>
					</div>