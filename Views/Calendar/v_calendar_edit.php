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
                                            <h1>
                                            ปฏิทินโครงงาน
                                            </h1>
                                            <hr>
                                <div class="da-panel-content">
                                <?php foreach($vision1->result() as $v1){
                                                $id = $v1->cal_id;
                                                } 
                                                ?>
                                 <form  class="da-form" action="<?php echo base_url();?>index.php/PDM/calendar_manager/editdata/<?php echo $id;?>"  method="post" onsubmit="check1();">                                                                                                    
                                            <div class="da-form-inline">
                                            <div class="da-form-row">
                                                    <label>ชื่อกิจกรรม<span class="required">*</span></label>
                                                    <div class="da-form-col-4-8">
                                                    <?php foreach($vision1->result() as $v1): ?>
                                                    <input type="text" id="name" name="name" value="<?php echo $v1->cal_name;?>"  />
                                                    <?php endforeach; ?>
                                                    </div>
                                                    
                                                </div>
                                                <div  style="width:750px;" class="da-form-row">
                                                    <label>วันเริ่มต้น<span class="required">*</span></label>
                                                    <div class="da-form-col-2-8">
                                                    <?php foreach($vision1->result() as $v1){ ?>
                                                    <input id="firstdate" name="firstdate" type="date" value="<?php echo $v1->cal_fdate;?>"/>
                                                    <?php } ?>
                                            </div>
                                            
                                            </div>
                                            <div style="width:750px;" class="da-form-row">
                                                    <label>วันสิ้นสุด<span class="required">*</span></label>
                                                    <div class="da-form-col-2-8">
                                                    <?php foreach($vision1->result() as $v1){ ?>
                                                   <input id="lastdate" name="lastdate" type="date" value="<?php echo $v1->cal_ldate;?>"/>
                                                    <?php } ?>
                                            </div>                                            
                                                </div>
												<div class="da-form-row">
                                                <label>สิ่งที่ต้องส่ง<span class="required">*</span></label>
                                                <div class="da-form-item large">                 
                                                    <select class="chzn-select" style="width:350px" name="sent">
													    <?php foreach($vision1->result() as $v1): ?>
                                                        <option  value = "<?php echo $v1->cal_ldate;?>"><?php echo $v1->cal_sent;?></option> 
														<?php endforeach; ?>
														<?php foreach($vision3->result() as $v3): ?>
														<option value="<?php echo $v3->wrk_name;?>"><?php echo $v3->wrk_name;?></option>                                                                                                     
                                                        <?php endforeach; ?>
													</select>
                                                </div>
                                              </div>												
                                               <div class="da-form-row">
                                                <label>บุคคลที่ทำ<span class="required">*</span></label>
                                                <div class="da-form-item large">                 
                                                    <select class="chzn-select" style="width:350px" name="activity">
                                                        <?php foreach($State_Ums1->result() as $state1):?>
                                                        <option selected disabled value = "0"><?php echo $state1->stums_name; ?></option>
                                                        <?php endforeach; ?> 
                                                        <?php foreach($State_Ums->result() as $state):?>
                                                        <option value="<?php echo $state->stums_state; ?>"><?php echo $state->stums_name; ?></option> 
                                                        <?php endforeach; ?>                                             
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="da-form-row">
                                                <label>ปีการศึกษา<span class="required">*</span></label>
                                                <div class="da-form-item large">                 
                                                    <select class="chzn-select" style="width:350px" name="year">                                                    
                                                        <option  value = "<?php echo $v1->cal_year;?>"><?php echo $v1->cal_year; ?></option>                                                       
                                                        <?php foreach($vision2->result() as $v2):
                                                                            if($v2->cal_year != $v1->cal_year){ ?>
                                                        <option  value = "<?php echo $v2->cal_year;?>"><?php echo $v2->cal_year; ?></option>
                                                            <?php } endforeach; ?>
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="da-form-row">
                                                    <label>วิธีดำเนินการ<span class="required">*</span></label>
                                                    <div class="da-form-item large">
                                                    <span class="formNote"></span>
                                                    <?php foreach($vision1->result() as $v1){ ?>
                                                    <textarea rows="auto" cols="auto" name="detail"><?php echo $v1->cal_activity;?></textarea>
                                                    <?php } ?>
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
                                            <div class="da-button-row">
                                        <input type="submit" value="บันทึก" class="da-button green right" />
                                            <input type="button" class="da-button red left" onclick="window.location.href='<?php echo base_url();?>index.php/PDM/calendar_manager/'" value="ยกเลิก" />
                                        </div>
                                        </form>    
                                       
                                 
                 </div>
                 </div>
                 </div>
                 </div>
                 </div>