<script type='text/javascript'>
 (function($) {
    $(document).ready(function(e) {
		$("#da-ex-dialog-div").dialog({
			autoOpen: false, 
			title: "ข้อมูลผู้จัดทำ", 
			modal: true, 
			width: "60%",
			height: "auto",
			buttons: [{
					text: "ปิด", 
					class:"cancelButton",
					click: function() {
						$( this ).dialog( "close" );
					}}]
			//buttons: [{
			//		text: "บันทึก", 
			//		click: function() {
			//			$( this ).find('form#da-ex-dialog-form-val').submit();
			//		}}]
		});
		$("#da-ex-dialog-form-div").dialog({
			autoOpen: false, 
			title: "ข้อมูลโครงงาน", 
			modal: true, 
			width: "60%",
			height: "auto",
			buttons: [{
					text: "ปิด", 
					class:"cancelButton",
					click: function() {
						$( this ).dialog( "close" );
					}}]
			//buttons: [{
			//		text: "บันทึก", 
			//		click: function() {
			//			$( this ).find('form#da-ex-dialog-form-val').submit();
			//		}}]
		});
    });
 
})(jQuery);
</script>						





					<div id="da-content-area">
                        <div class="grid_1">
                        	<div class="da-panel-widget pdm-content">
                                <h1 >กิจกรรม</h1>
                                <hr>
                                <ul class="da-summary-stat">
                                    <li>
                                    	<a href="<?php echo base_url();?>index.php/PDM/profile">
                                            <span class="da-summary-icon" style="background-color:#a6d037;">
                                                <img src="<?php echo base_url();?>/images/icons/white/32/truck.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <!-- <span class="value up">1</span> -->
                                                <span class="value">อนุมัติแบบฟอร์ม</span>
                                                <span class="label">อนุมัติแบบฟอร์ม (นักวิชาการศึกษา)</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
					</div>
					
					<!--======================  Body  ===========================-->
					
						<div class="grid_3">
                        	<div class="da-panel-widget pdm-content">
										<h1>
											อนุมัติแบบฟอร์ม
											<button  style="float:right;" class="da-button gray">อนุมัติแบบฟอร์ม</button>
										</h1>
										<hr>
								
								<!-- with-padding -->
								
                                <div class="da-panel-content">
								<table style="text-align:center" id="da-ex-datatable-numberpaging" class="da-table">
                                        <thead>
                                            <tr>
												<th style="text-align:center;width:8%;"><input type="checkbox" name="sports[]" /> <label>Select</label></li></th>
                                                <th style="text-align:center;width:10%;">รหัสนิสิต</th>
                                                <th style="text-align:center;width:30%;">ชื่อโครงงาน</th>
                                                <th style="text-align:center;width:35%;">ชื่อผู้จัดทำโครงงาน</th>
                                                <th style="text-align:center;width:10%;">เมนู</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $i = 1; $n=0;?>
											<tr>
												<th style="text-align:center;"><input type="checkbox" name="sports[]" /></th>
												<th style="text-align:center;"><?php echo $n; ?></th>
												<th><a id="da-ex-dialog-form" href="#">อนุรักษ์พันธ์ไม้</a></th>
													<div id="da-ex-dialog-form-div" class="no-padding" style="width:100%;height:auto;">
													<form id="da-ex-dialog-val" class="da-form">
													<div id="da-validate-error" class="da-message error" style="display:none;"></div>
									
													</form>
													</div>
												<th><a id="da-ex-dialog" href="#">แอดมิน นะแอดมิน</a></th>
												<th><button  style="float:right;" class="da-button gray">ไม่อนุมัติ</button></th>
											</tr>
										<?php  $n++; ?>
                                        </tbody>
                                </table>
								</div>
                            </div>
                        </div>
						
						
						<div id="da-ex-dialog-div" class="no-padding" style="width:100%;height:auto;">
                                        <form id="da-ex-dialog-form-val" class="da-form" action="<?php echo base_url();?>index.php/PDM/u_03/insert_proj/<?php echo $n;?>" method="post" name ="checkForm" id="checkForm" onsubmit="return check1(<?php echo $n;?>)">
										 <div id="da-validate-error" class="da-message error" style="display:none;"></div>
                                <table class="da-table">

                                            <tr id="head">
                                                <td class="da-icon-column" style="width:30%">
													ชื่อโครงงาน (ภาษาไทย)
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
													
                                                </td>
                                            </tr>
											<tr id="head">
                                                <td class="da-icon-column" style="width:30%">
													ชื่อโครงงาน (ภาษาอังกฤษ)
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
													
                                                </td>
                                            </tr>
											<tr id="head">
                                                <td class="da-icon-column" style="width:30%">
													อาจารย์ที่ปรึกษาโครงงาน
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
													
                                                </td>
                                            </tr>
											<tr id="head">
                                                <td class="da-icon-column" style="width:30%">
													ผู้รับผิดชอบโครงงาน
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
													
                                                </td>
                                            </tr>
											<tr id="head">
                                                <td class="da-icon-column" style="width:30%">
													ระยะเวลาเริ่มดำเนินงาน
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
													
                                                </td>
                                            </tr>
											<tr id="head">
                                                <td class="da-icon-column" style="width:30%">
													ระยะเวลาสิ้นสุดโครงงาน
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
													
                                                </td>
                                            </tr>
											<tr >
                                                <td class="da-icon-column" style="width:30%">
													สถานะโครงงาน
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
													
                                                </td>
                                            </tr>

                                    </table>
                                        </form>
                                    </div>