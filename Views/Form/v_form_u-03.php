<style>
.Button
{
    border: 1px solid rgb(50,50,50)    /*{borderColorContent}*/;    
    background:#A9CA60 !important;
}
.Buttonclose
{
    border: 1px solid rgb(50,50,50)    /*{borderColorContent}*/;    
    background:#E15656 !important;
}
#head{
    border-right: 1px solid silver;
    border-bottom:1px solid silver;
}
#body{
    display:block;
}
#css_false{
    border-style: solid;
    border-width: 2px;
    border-color: red;
}
#css_true{
    border-color:silver;
}
</style>
<script type='text/javascript'>
    function dialog(frm1_nameth,frm1_nameen,pers_fname,pers_lname,std_fname,std_lname,frm1_subdate,frm1_assigndate,proj_nameth){
            //alert('HA HA');
        document.getElementById('formid1').innerHTML = frm1_nameth;
        document.getElementById('formid2').innerHTML = frm1_nameen;
        document.getElementById('formid3').innerHTML = pers_fname+" "+pers_lname;
    //    document.getElementById('formid4').innerHTML = pers_lname;
        document.getElementById('formid5').innerHTML = std_fname+" "+std_lname;
    //    document.getElementById('formid6').innerHTML = std_lname;
        document.getElementById('formid7').innerHTML = frm1_subdate;
        document.getElementById('formid8').innerHTML = frm1_assigndate;
        document.getElementById('formid9').innerHTML = proj_nameth;
        $(function()
            {
                $("#dialog").dialog({ 
                    title: "รายละเอียดแบบฟอร์ม",
                    modal: true, 
                    width: "60%", 
                    buttons: [{
                            text: "ปิด",
                            class:"Buttonclose",
                            click: function() {
                                $( this ).dialog( "close" );
                            }
                    }]
                })    
            });
        }
 function addData(frmId,frmname,status,namestatus,prename,fname,lname){
	//alert("HA HA");
	$id = document.value = frmId;
	document.getElementById('nameDemo').innerHTML = frmname;
	document.getElementById('profile').innerHTML = prename+" "+fname+" "+lname;
	document.getElementById('sta').innerHTML = namestatus;
	$(function(){
         $("#dialog_form").dialog({
            //autoOpen: false, 
            title: "ยื่นสอบโครงงาน",
            modal: true, 
            width: "500", 
            buttons: [{
                    text: "ขอสอบ",
                    class:"Button",
                    click: function() {
                        $( this ).function(sent($id));
                    }
					}]
            })
			});
        }(jQuery);
function sent($id){
	//alert("HA HA");
	window.location.href = "https://10.16.64.86/sesite/index.php/PDM/form_u03/getStatus?id="+$id;
}
</script>
                    <?php
                    $status = $showdata[0]->proj_id;
                    $iduser = $this->session->userdata('UsPsCode');
                    echo $nav;
                    echo $sidebar; 
                    ?>
                        <div class="grid_3">
                            <div class="da-panel-widget pdm-content">
                                            
                                            <h1>แบบฟอร์ม วก. U-03
                                            <?php foreach($showdata as $u03):?>
                                            <?php if($u03->std_id == $iduser){
                                                if($u03->proj_id == 10){?>
												<a OnClick="addData(<?php echo $u03->frm1_id;?>,'<?php echo $u03->frm1_nameth;?>','<?php echo $u03->proj_id?>','<?php echo $u03->proj_nameth;?>','<?php echo $u03->pref_nameth;?>','<?php echo $u03->pers_fname;?>','<?php echo $u03->pers_lname;?>')">
                                                    <button  type="submit" style="float:right" Onsubmit="addData()" class="da-button gray">ยื่นสอบโครงงาน</button>
												</a>
                                            <?php
                                                }
                                            } 
                                            endforeach;
                                            ?></h1>
                                            <hr>
                                
                                <!-- with-padding -->
                                <table style="text-align:center" id="da-ex-datatable-numberpaging" class="da-table">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;width:10%;">ลำดับ</th>
                                                <th style="text-align:center;width:25%;">ชื่อโครงงาน</th>
                                                <th style="text-align:center;width:25%;">ชื่ออาจารย์ที่ปรึกษาหลัก</th>
                                                <th style="text-align:center;width:10%;">สถานะ</th>
                                                <th style="text-align:center;width:5%;">เมนู</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1; $n=0; foreach($showdata as $u03):?>
                                        <?php if($u03->std_id == $iduser && $u03->proj_id == 10 ){?> 
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $u03->frm1_nameth;?></td>
                                                <td><?php $nameAdvisor = $advisor_data[0]->pref_nameth." ".$advisor_data[0]->pers_fname." ".$advisor_data[0]->pers_lname; echo $nameAdvisor;?></td>
                                                <?php if($status == 200){?>
                                                <td style="text-align:center"><a href="#"><?php echo $u03->proj_nameth;?></a></td>
                                                <?php } else if($status == 20){?>
                                                <td style="text-align:center;color:red;"><?php echo $u03->proj_nameth;?></td>
                                                <?php }else{?>
                                                <td style="text-align:center"><?php echo $u03->proj_nameth;?></td>
                                                <?php }?>
                                                <td style="text-align:center;">
                                                    <a OnClick="dialog('<?php echo $u03->frm1_nameth;?>','<?php echo $u03->frm1_nameen;?>','<?php echo $u03->pers_fname;?>','<?php echo " ".$u03->pers_lname;?>','<?php echo $u03->std_fname;?>','<?php echo $u03->std_lname;?>','<?php echo $u03->frm1_subdate;?>','<?php echo $u03->frm1_assigndate;?>','<?php echo $u03->proj_nameth;?>')" href="javascript:void(0)">
                                                        <img title="ดูรายละเอียด" src="<?php echo base_url();?>/images/icons/color/magnifier.png" alt="" />
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <?php  $n++; endforeach; ?>
                                        </tbody>
                                </table>
                                <br />
                                    <div>    
                                        <table border="0">
                                        <tr>
                                            <td><b>หมายเหตุ</b></td>
                                        </tr>
                                        <tr>
                                            <td> แบบฟอร์มที่ใช้ในการยื่นสอบปากเปล่าเมื่อมีการอนุมัติแล้ว
                                        </tr>
                                        <tr>
                                            <td><b>สถานะ</b></td>
                                        </tr>
                                        <tr>
                                            <td>** รายงานความก้าวหน้า : ช่วงรอผลการอนุมัติจากอาจารย์ กรุณาทำการรายงานความคืบหน้าเพื่อเป็นแรงจูงใจในการอนุมัติ </td>
                                        </tr>
                                        <tr>
                                            <td>** เมื่อผ่านการอนุมัติจากอาจารย์ที่ปรึกษาแล้ว ผู้จัดทำโครงงานจึงจะสามารถยื่นสอบได้</td>
                                        </tr>
                                        <tr>
                                            <td>** เมื่อทำการยื่นขอสอบแล่วจะขึ้นสถานะ รอผลอนุมัตฺสอบ</td>
                                        </tr>
                                        <tr>
                                            <td>** เมื่อผ่านการอนุมัติจะสามารถตรวจสอบวัน เวลา และสถานที่สอบได้</td>
                                        </tr>
                                        <tr>
                                            <td>** เพื่อความปลอดภัยกรุณาเข้ามาทำการตรวจสอบอย่างต่อเนื่องด้วย ^^</td>
                                        </tr>
                                        </table>
                                    </div>
                                    <!--=============================  Dialog Form =================================-->
                                                <div id="dialog_form" class="no-padding" style="display:none;">
                                                <form id="da-ex-dialog-form-val" class="da-form" action="<?php echo base_url();?>index.php/PDM/form_u03/getStatus/<?php echo $u03->frm1_id;?>" method="get">
                                                <div id="validate-error" class="da-message error" style="display:none;"></div>
                                                <br/>
                                                <center><table border="0" style="width:70%">
                                                            <tr>
                                                                <td style="width:10%;"> </td>
                                                                <td style="width:30%;"><b> ชื่อโครงงาน </b></td>
                                                                <td id="nameDemo" style="width:40%;" ><b>:</b></td>
                                                            </tr>
                                                            <tr>
																<td></td>
                                                                <td ><b> อาจารย์ที่ปรึกษา  </b></td>
                                                                <td id="profile"><b>:</b></td>
                                                            </tr>
                                                            <tr>
																<td></td>
                                                                <td ><b> สถานะโครงงาน  </b></td>
                                                                <td id="sta"><b>:</b></td>
                                                            </tr>
                                                    </table></center>
                                                </form>
                                                </div>
                                    <!--====================================  End Dialog ==============================-->    
                                    <!--================================ Dialog picture Sert ==================================-->
                                    <div id="dialog" style="display:none;">
                                    <div class="da-panel-content pdm-content">
                                    <table class="da-table">
                                        <?php $row = 0; foreach($showdata as $u03):?>
                                        <?php if($u03->std_id == $iduser){?> 
                                            <?php if($row==0) {?>
                                            <tr id="head">
                                                <td class="da-icon-column" style="width:30%">
                                                    ชื่อโครงงาน (ภาษาไทย)
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
                                                    <p id="formid1"></p>
                                                </td>
                                            </tr>
                                            <tr id="head">
                                                <td class="da-icon-column" style="width:30%">
                                                    ชื่อโครงงาน (ภาษาอังกฤษ)
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
                                                    <p id="formid2"></p>
                                                </td>
                                            </tr>
                                            <tr id="head">
                                                <td class="da-icon-column" style="width:30%">
                                                    อาจารย์ที่ปรึกษาโครงงาน
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
                                                    <p id="formid3"></p>
                                                </td>
                                            </tr>
                                            <tr id="head">
                                                <td class="da-icon-column" style="width:30%">
                                                    ผู้รับผิดชอบโครงงาน
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
                                                    <p id="formid5"></p>
                                                </td>
                                            </tr>
                                            <tr id="head">
                                                <td class="da-icon-column" style="width:30%">
                                                    ระยะเวลาเริ่มดำเนินงาน
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
                                                    <p id="formid7"></p>
                                                </td>
                                            </tr>
                                            <tr id="head">
                                                <td class="da-icon-column" style="width:30%">
                                                    ระยะเวลาสิ้นสุดโครงงาน
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
                                                    <p id="formid8"></p>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td class="da-icon-column" style="width:30%">
                                                    สถานะโครงงาน
                                                </td>
                                                <td class="da-icon-column" style="text-align:left;">
                                                    <p id="formid9"></p>
                                                </td>
                                            </tr>
                                            
                                            <?php } $row++; } ?>
                                            <?php endforeach; ?>
                                    </table>
                                    </div>
                                    </div>
                                    <!--================================ End ================================-->
        
                            </div>
                        </div>
                        
<script>
(function($) {
    $(document).ready(function(e) {
            $("#validate").validate({
                rules: {
                    Prj_date: {
                        required: true
                    }, 
                    Prj_time: {
                        required: true
                    }, 
                    Prj_sta: {
                        required: true
                    },
                    Prj_hta: {
                        required: true
                    }
                }, 
                invalidHandler: function(form, validator) {
                    var errors = validator.numberOfInvalids();
                    if (errors) {
                        var message = errors == 1
                        ? 'You missed 1 field. It has been highlighted'
                        : 'You missed ' + errors + ' fields. They have been highlighted';
                        $("#validate-error").html(message).show();
                    } else {
                        $("#validate-error").hide();
                    }
                }
            });
    });
});
</script>