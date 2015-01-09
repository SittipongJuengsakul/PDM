                  <!-- Content Area -->
<script language="javascript">
$(document).ready(function() {
    var d=new Date(); 
    var toDay = d.getDate() + '/' + (d.getMonth()+1) + '/' + (d.getFullYear()+543);
    $(".a").datepicker({ dateFormat: 'dd/mm/yy',
         isBuddhist: true, 
         defaultDate: toDay ,
         dayNames: ['อาทิตย์','จันทร์','อังคาร',
                            'พุธ','พฤหัสบดี','ศุกร์','เสาร์'],
         dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
         monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม',
                            'เมษายน','พฤษภาคม','มิถุนายน',
                            'กรกฎาคม','สิงหาคม','กันยายน',
                            'ตุลาคม','พฤศจิกายน','ธันวาคม'],
         monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.',
                             'พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.',
                             'พ.ย.','ธ.ค.']
        });

  });
function Numbers(e){
    var keynum;
    var keychar;
    var numcheck;
    if(window.event) {// IE
      keynum = e.keyCode;
    }
    else if(e.which) {// Netscape/Firefox/Opera
      keynum = e.which;
    }
    if(keynum == 13 || keynum == 8 || typeof(keynum) == "undefined"){
            return true;
    }
    keychar= String.fromCharCode(keynum);
    numcheck =  /^[0-9]*(\.?)[0-9]*$/; // อยากจะพิมพ์อะไรได้มั่ง เติม regular expression ได้ที่ line นี้เลยคับ
    //calc(); //ทำการคำนวนงบประมาณอัตโนมัติ
    return numcheck.test(keychar);
}
</script>
<style>
.cancelButton
{
    border: 1px solid rgb(50,50,50)    /*{borderColorContent}*/;    
    background:#A9CA60 !important;
}
</style> 
<script>
 (function($) {
    $(document).ready(function(e) {
 $("#da-ex-dialog-form-div").dialog({
            autoOpen: false, 
            title: "เพิ่มปฎิทินโครงงาน", 
            modal: true, 
            width: "750",            
            buttons: [{
                    text: "ตกลง", 
                    class:"cancelButton",
                    click: function() {
                        $( this ).find('form#da-ex-dialog-form-val').submit();
                    }}]
        }) 
        });
})(jQuery);
(function($) {
    $(document).ready(function(e) {
 $("#da-ex-dialog-form1-div").dialog({
            autoOpen: false, 
            title: "แก้ไขปฎิทินโครงงาน", 
            modal: true, 
            width: "750",            
            buttons: [{
                    text: "ตกลง", 
                    class:"cancelButton",
                    click: function() {
                        $( this ).find('form#da-ex-dialog-form1-val').submit();
                    }}]
        }) 
        });
})(jQuery);
</script>
 
 <div id="da-content-wrap" class="clearfix">
                    <!-- Content Area -->
                    <div id="da-content-area">
                    <?php 
                    echo $nav;
                    ?>
                        <div class="grid_4">
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
                                                    <select class="chzn-select" style="width:350px" name="year" onchange="location.href=this.value">
                                                        <option selected disabled value = "0">กรุณาเลือกปีการศึกษา</option>
                                                        <option value="<?php echo base_url();?>index.php/PDM/calendar_manager?year=<?php echo $year=2557; ?>" >2557</option>
                                                        <option value="<?php echo base_url();?>index.php/PDM/calendar_manager?year=<?php echo $year=2556; ?>">2556</option>
                                                        <option value="<?php echo base_url();?>index.php/PDM/calendar_manager?year=<?php echo $year=2555; ?>">2555</option>                                                    
                                                    </select>
                                                </div>
                                            
                                              </div></center>
                                              
                                              </div>
                        </div>
                        </div>
                        <div class="grid_4">
                            <div class="da-panel-widget pdm-content">
                                            <h1>ปฏิทินโครงงาน
                                            <button id="da-ex-dialog-form" class="da-button gray" style="float:right">เพิ่มปฎิทินโครงงาน</button>
                                            </h1>
                                            <hr>
                                <div class="da-panel-content">
                                
                                
                              <div id="da-ex-dialog-form-div" class="no-padding">
                                        <form id="da-ex-dialog-form-val" class="da-form" action='<?php echo base_url();?>index.php/PDM/calendar_manager/insert' method='post'  name ="checkForm" id="checkForm" onsubmit="return check1()" >
                                            <div id="da-validate-error" class="da-message error" style="display:none;"></div>
                                            <div class="da-form-inline">
                                            <div class="da-form-row">
                                                    <label>ชื่อกิจกรรม<span class="required">*</span></label>
                                                    <div class="da-form-col-4-8">
                                                    <input type="text" id="name" name="name"  />
                                                    </div>
                                                    <img src="<?php echo base_url(); ?>/images/icons/Help.png" style="width:20px;height:20px;"alt="" class="da-tooltip-w" title="กรอกข้ื่อโครงงานภาษาไทย"/>
                                                </div>
                                                <div  style="width:750px;" class="da-form-row">
                                                    <label>วันเริ่มต้น<span class="required">*</span></label>
                                                    <div class="da-form-col-2-8">
                                                    <input id="firstdate" name="firstdate" type="date" />
                                            </div>
                                            <img src="<?php echo base_url(); ?>/images/icons/Help.png" style="width:20px;height:20px;"alt="" class="da-tooltip-w" title="กรอกข้ื่อโครงงานภาษาไทย"/>
                                            </div>
                                            <div style="width:750px;" class="da-form-row">
                                                    <label>วันสิ้นสุด<span class="required">*</span></label>
                                                    <div class="da-form-col-2-8">
                                                   <input id="lastdate" name="lastdate" type="date" />
                                            </div>
                                            <img src="<?php echo base_url(); ?>/images/icons/Help.png" style="width:20px;height:20px;"alt="" class="da-tooltip-w" title="กรอกข้ื่อโครงงานภาษาไทย"/>
                                                </div>                                                
                                                 <div class="da-form-row">
                                                <label>สิ่งที่ต้องส่ง<span class="required">*</span></label>
                                                <div class="da-form-item large">                 
                                                    <select class="chzn-select" style="width:350px" multiple="multiple" name="sent[]">                                       
														<?php foreach($vision3->result() as $v3): ?>
														<option value="<?php echo $v3->wrk_id ?>"><?php echo $v3->wrk_name ?></option>                                                                                                     
                                                        <?php endforeach; ?>
													</select>
                                                </div>
                                              </div>
											  <div class="da-form-row">
                                        	<label>บุคคลที่ทำ</label>
                                            <div class="da-form-item large">                                          	
                                            	<select class="chzn-select" style="width:350px" multiple="multiple" name="activity[]">
                                                	<?php foreach($State_Ums->result() as $state):?>
                                                        <option value="<?php echo $state->stums_state ?>"><?php echo $state->stums_name ?></option> 
                                                     <?php endforeach; ?>   
                                                </select>
                                            </div>
                                            </div>
                                               <!--<div class="da-form-row">
                                                <label>บุคคลที่ทำ<span class="required">*</span></label>
                                                <div class="da-form-item large">                 
                                                    <select class="chzn-select" style="width:350px" name="activity">
                                                        <option selected disabled value = "0">กรุณาเลือกบุคลที่ทำส่วนนี้</option>
                                                        <?php foreach($State_Ums->result() as $state):?>
                                                        <option value="<?php echo $state->stums_state ?>"><?php echo $state->stums_name ?></option> 
                                                        <?php endforeach; ?>                                             
                                                    </select>
                                                </div>
                                              </div>-->
                                              <div class="da-form-row">
                                                <label>ปีการศึกษา<span class="required">*</span></label>
                                                <div class="da-form-item large">                 
                                                    <select class="chzn-select" style="width:350px" name="year">
                                                        <option selected disabled value = "0">กรุณาเลือกปีการศึกษา</option>                                                       
														<option value="2557">2557</option>
                                                        <option value="2556">2556</option>
                                                        <option value="2555">2555</option>                                                    
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="da-form-row">
                                                    <label>วิธีดำเนินการ<span class="required">*</span></label>
                                                    <div class="da-form-item large">
                                                    <span class="formNote"></span>
                                                    <textarea rows="auto" cols="auto" name="detail"></textarea>
                                                    <img src="<?php echo base_url(); ?>/images/icons/Help.png" style="width:20px;height:20px;"alt="" class="da-tooltip-w" title="กรอกข้ื่อโครงงานภาษาไทย"/>
                                                    </div> 
                                                    
                                                </div>
                                            </div>
                                            
                                            <script language="JavaScript" type="text/javascript">

                                                function check1() {
                                                if(document.checkForm.name.value=="") {
                                                    alert("กรุณากรอกข้อมูลโครงงานให้ถูกต้อง") ;
                                                    document.checkForm.name.focus() ;
                                                    return false ;
                                                    }
                                                
                                                else if(document.checkForm.detail.value=="") {
                                                    alert("กรุณากรอกข้อมูลโครงงานให้ถูกต้อง") ;
                                                    document.checkForm.detail.focus() ;
                                                    return false ;
                                                    }
                                                else if(document.checkForm.year.value=="0") {
                                                    alert("กรุณากรอกข้อมูลโครงงานให้ถูกต้อง") ;
                                                    document.checkForm.year.focus() ;
                                                    return false ;
                                                    }
                                                else return true;
                                                    var Check = document.forms["checkForm"]["nameTH"].value;
                                                    var low = Check.length;
                                                    //alert(low);
                                                    for(var i=0 ; i<low ; i++){
                                                            var digit = Check.charAt(i);
                                                            if(((digit >= "a" && digit <= "z") || (digit >="0" && digit <="9") || (digit >="A" && digit <="Z"))){
                                                            alert("กรุณากรอกข้อมูลโครงงานให้ถูกต้อง");
                                                            document.checkForm.nameTH.focus() ;
                                                            return false ;
                                                            }
                                                    }
                                                    var CheckEn = document.forms["checkForm"]["nameEN"].value;
                                                    var lowEn = CheckEn.length;
                                                    //alert(low);
                                                    for(var i=0 ; i<lowEn ; i++){
                                                            var digitEn = CheckEn.charAt(i);
                                                            if(!((digitEn >= "a" && digitEn <= "z") || (digitEn >="0" && digitEn <="9") || (digitEn >="A" && digitEn <="Z"))){
                                                            alert("กรุณากรอกข้อมูลโครงงานให้ถูกต้อง");
                                                            document.checkForm.nameEN.focus() ;
                                                            return false ;
                                                            }else
                                                            return true;
                                                    }
                                                }
                                            </script>
                                            
                                            
                                        </form>
                                    </div>
                                <table id="da-ex-datatable-numberpaging" class="da-table">
                                        <thead>
                                            
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th style="text-align:center">ชื่อกิจกรรม</th>
                                                <th style="text-align:center">ตั้งแต่</th>
                                                <th style="text-align:center">สิ้นสุด</th>
                                                <th width="10%"style="text-align:center">สิ่งที่ตองส่ง</th>
                                                <th style="text-align:center">คำอธิบาย</th>
                                                <th style="text-align:center">เมนู</th>
                                                
                                               
                                               
                                            </tr>
                                        </thead>
                                        <?php 
                                        $i=1;
                                        foreach($vision->result() as $v){
                                        ?>
                                        <tr>
                                          <td width="2%" style="text-align:center"><?php echo $i++; ?></td>
                                          <td width="15%" ><?php echo $v->cal_name; ?></td>
                                          <td width="10%" style="text-align:center"><?php echo $v->cal_fdate; ?></td>
                                          <td width="10%" style="text-align:center"><?php echo $v->cal_ldate; ?></td>										  
                                          <td width="10%" ><?php echo $v->wrk_name; ?></td>
                                          <td width="10%" ><?php echo $v->cal_activity; ?></td>
                                          <td width="3%" style="text-align:center">
                                                    <a href="<?php echo base_url();?>index.php/PDM/calendar_manager/edit/<?php echo $v->cal_id;?>" >
                                                        <img title="แก้ไข" src="<?php echo base_url();?>/images/icons/color/pencil.png" alt="" />
                                                    </a>
                                                    <a href="<?php echo base_url();?>index.php/PDM/calendar_manager/remove_form/<?php echo $v->cal_id;?>" onclick="return confirm('Are you sure?')">
                                                        <img title="ลบโครงงาน" src="<?php echo base_url();?>/images/icons/color/cross.png" alt="" />
                                                    </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                    </table>
                    <!-- <div id="da-ex-dialog-form1-div" class="no-padding">
                                        <form id="da-ex-dialog-form1-val" class="da-form" action='<?php echo base_url();?>index.php/PDM/manager_calendar/edit/<?php echo $v->cal_id;?>' method='post'  name ="checkForm" id="checkForm" onsubmit="return check1()" >
                                            <div id="da-validate-error" class="da-message error" style="display:none;"></div>
                                                
                                            <?php 
                                        foreach($vision->result() as $v){
                                        if($v->cal_id==$v->cal_id){
                                        ?>
                                            <div class="da-form-inline">
                                            <div class="da-form-row">
                                                    <label>ชื่อกิจกรรม<span class="required">*</span></label>
                                                    <div class="da-form-col-4-8">
                                                    <input type="text" id="name" name="name" value="<?php echo $v->cal_name;?>""  />
                                                    </div>
                                                    <img src="<?php echo base_url(); ?>/images/icons/Help.png" style="width:20px;height:20px;"alt="" class="da-tooltip-w" title="กรอกข้ื่อโครงงานภาษาไทย"/>
                                                </div>
                                                <div  style="width:750px;" class="da-form-row">
                                                    <label>วันเริ่มต้น<span class="required">*</span></label>
                                                    <div class="da-form-col-2-8">
                                                    <input id="firstdate" name="firstdate" type="date" value="<?php echo $v->cal_fdate; ?>" />
                                            </div>
                                            <img src="<?php echo base_url(); ?>/images/icons/Help.png" style="width:20px;height:20px;"alt="" class="da-tooltip-w" title="กรอกข้ื่อโครงงานภาษาไทย"/>
                                            </div>
                                            <div style="width:750px;" class="da-form-row">
                                                    <label>วันสิ้นสุด<span class="required">*</span></label>
                                                    <div class="da-form-col-2-8">
                                                   <input id="lastdate" name="lastdate" type="date" value="<?php echo $v->cal_ldate; ?>" />
                                            </div>
                                            <img src="<?php echo base_url(); ?>/images/icons/Help.png" style="width:20px;height:20px;"alt="" class="da-tooltip-w" title="กรอกข้ื่อโครงงานภาษาไทย"/>
                                                </div>
                                                
                                                <div class="da-form-row">
                                                    <label>สิ่งที่ต้องส่ง</label>
                                                    <div class="da-form-col-4-8 ">
                                                    <input type="text" id="sent" name="sent" value="<?php echo $v->cal_sent; ?>" />
                                                </div>
                                                <img src="<?php echo base_url(); ?>/images/icons/Help.png" style="width:20px;height:20px;"alt="" class="da-tooltip-w" title="กรอกข้ื่อโครงงานภาษาไทย"/>
                                               </div>
                                               <div class="da-form-row">
                                                <label>บุคคลที่ทำ<span class="required">*</span></label>
                                                <div class="da-form-item large">                 
                                                    <select class="chzn-select" style="width:350px" name="activity">
                                                        <option selected disabled value = "0">กรุณาเลือกบุคลที่ทำส่วนนี้</option>
                                                        <?php foreach($State_Ums->result() as $state):?>
                                                        <option value="<?php echo $state->stums_state ?>"><?php echo $state->stums_name ?></option> 
                                                        <?php endforeach; ?>                                             
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="da-form-row">
                                                <label>ปีการศึกษา<span class="required">*</span></label>
                                                <div class="da-form-item large">                 
                                                    <select class="chzn-select" style="width:350px" name="year">
                                                        <option selected disabled value = "0">กรุณาเลือกปีการศึกษา</option>
                                                        <option value="2557">2557</option>
                                                        <option value="2556">2556</option>
                                                        <option value="2555">2555</option>                                                    
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="da-form-row">
                                                    <label>วิธีดำเนินการ<span class="required">*</span></label>
                                                    <div class="da-form-item large">
                                                    <span class="formNote"></span>
                                                    <textarea rows="auto" cols="auto" name="detail" ><?php echo $v->cal_activity; ?></textarea>
                                                    <img src="<?php echo base_url(); ?>/images/icons/Help.png" style="width:20px;height:20px;"alt="" class="da-tooltip-w" title="กรอกข้ื่อโครงงานภาษาไทย"/>
                                                    </div> 
                                                    
                                                </div>
                                                <?php }} ?>
                                            </div>
                    
                                </div>
                            </div>
                        </div>
                <div class="grid_1">
                            <div class="da-panel">
                                <div class="da-panel-header">
                                    <span class="da-panel-title">
                                        การแจ้งเตือน
                                    </span>
                                </div>
                                <div class="da-panel-content">
                                    ss
                                </div>
                            </div>
                        </div>-->
                        
                </div>
                
                
                