<head>
<style>
#css_false{
    border-style: solid;
    border-width: 2px;
    border-color: red;
}
#css_true{
    border-color:silver;
}
.cancelButton
{
    border: 1px solid rgb(50,50,50);
    background:#A9CA60 !important;
}
</style>
</head>
<body>
<script type='text/javascript'>
    $(document).ready(function() {
        $("#faculty").change(function () {
        //alert($("#faculty").val());
            $.ajax({
                url: "<?php echo base_url();?>index.php/PDM/form_profile/getmaj",
                data: {ID: $("#faculty").val()},
                type: "POST",
                dataType:"html",
                success:function (data) {
                    $("#major").html(data);
                    $('#major').val('').trigger('liszt:updated');
                }
            })
        });
        $("#insertform").validate({
            rules:{
                chosen1:{
                required: true
                },
                chosen2:{
                required: true
                },
                status: {
                required: true
                },
                Email: {
                required: true,
                fontEN: true
                },
                Phone: {
                required: true
                }
            }
        });
         $("#da-ex-dialog-form-div").dialog({
            autoOpen: false,
            title: "แก้ไข Profile",
            modal: true,
            width: "1000",
            //onclick="return confirm('Are you sure?')",
            buttons: [{
                    text: "ตกลง",
                    class:"cancelButton",
                    //onclick:"return confirm('Are you sure?')",
                    click: function() {
                        $( this ).find('form#da-ex-dialog-form-val').submit();
                    }}]
            })
});
</script>
                                    <?php echo $nav;
                                    echo $sidebar?>
                                    <div class="grid_3">
                                        <div class="da-panel-widget pdm-content">
                                        <h1>ข้อมูลพื้นฐาน<input style="float:right;" type="button" value="แก้ไขข้อมูลพื้นฐาน" id="da-ex-dialog-form" class="da-button gray" onClick="#"></h1>
                                        <hr>
                                    <form id="insertform" class="da-form" >
                                            <div id="insertform" class="da-form-inline">
                                                    <div class="da-form-row">
                                                        <label style="">ชื่อ<span class="required">*</span></label>
                                                            <div class="da-form-col-2-8">
                                                            <?php foreach($dataUser as $userfname):
                                                            if(($userfname->std_fname == NULL) || ($userfname->std_fname == '0')){
                                                            ?>
                                                            <input type="text" style="color:red" name="fName" id="fName" disabled="disabled" value="ยังไม่มีข้อมูล กรุณาเพิ่ม">
                                                            <?php }
                                                            else { ?>
                                                            <input type="text" name="fName" id="fName" disabled="disabled" value="<?php echo $userfname->std_fname;?>">
                                                            <?php }
                                                            endforeach; ?>
                                                            </div>
                                                        <label style="width:8%">นามสกุล<span class="required">*</span></label>
                                                            <div class="da-form-col-2-8">
                                                            <?php foreach($dataUser as $userlname):
                                                            if(($userlname->std_lname == NULL) || ($userlname->std_lname == '0')){
                                                            ?>
                                                            <input type="text" style="color:red" name="lName" id="lName" disabled="disabled" value="ยังไม่มีข้อมูล กรุณาเพิ่ม">
                                                            <?php }
                                                            else { ?>
                                                            <input type="text" name="lName" id="lName" disabled="disabled" value="<?php echo $userlname->std_lname;?>">
                                                            <?php }
                                                            endforeach; ?>
                                                            </div>
                                                        <label style="width:8%">รหัสนิสิต<span class="required">*</span></label>
                                                            <div class="da-form-col-1-8">
                                                            <?php foreach($dataUser as $userid):
                                                            if(($userid->std_id == NULL)){
                                                            ?>
                                                            <input style="width:100px;color:red;"  type="text" name="idstd" id="idstd" disabled="disabled" value="ยังไม่มีข้อมูล กรณาเพิ่ม">
                                                            <?php }
                                                            else{ ?>
                                                            <input style="width:100px" type="text" name="idstd" id="idstd" disabled="disabled" value="<?php echo $userid->std_id;?>">
                                                            <?php }
                                                            endforeach; ?>
                                                            </div>
                                                    </div>
                                                    <div class="da-form-row">
                                                    <label style="">คณะ<span class="required">*</span></label>
                                                            <div class="da-form-col-2-8">
                                                            <?php foreach($dataFac as $fac):
                                                            if(($fac->fac_faculty == NULL) || ($fac->fac_faculty == '0')){
                                                            ?>
                                                            <input type="text" style="color:red;" name="Faculty" id="Faculty" disabled="disabled" value="ยังไม่มีข้อมูล กรณาเพิ่ม">
                                                            <?php }
                                                            else{ ?>
                                                            <input type="text" name="Faculty" id="Faculty" disabled="disabled" value="<?php echo $fac->fac_faculty;?>">
                                                            <?php }
                                                            endforeach; ?>
                                                            </div>
                                                    <label style="width:8%">สาขา<span class="required">*</span></label>
                                                            <div class="da-form-col-2-8">
                                                            <?php foreach($dataMaj as $maj):
                                                            if(($maj->maj_major == NULL) || ($maj->maj_major == '0')){
                                                            ?>
                                                            <input type="text" style="color:red;" name="Major" id="Major" disabled="disabled" value="ยังไม่มีข้อมูล กรณาเพิ่ม">
                                                            <?php }
                                                            else{ ?>
                                                            <input type="text" name="Major" id="Major" disabled="disabled" value="<?php echo $maj->maj_major;?>">
                                                            <?php }
                                                            endforeach; ?>
                                                            </div>
                                                    <label style="width:8%">ภาควิชา<span class="required">*</span></label>
                                                            <div class="da-form-col-1-8">
                                                            <?php foreach($dataType as $type):
                                                            if(($type->stdt_type == NULL) || ($type->stdt_type == '0')){
                                                            ?>
                                                            <input style="width:100px" type="text" style="color:red;" name="Type" id="Type" disabled="disabled" value="ยังไม่มีข้อมูล กรณาเพิ่ม">
                                                            <?php }
                                                            else{ ?>
                                                            <input style="width:100px" type="text" name="Type" id="Type" disabled="disabled" value="<?php echo $type->stdt_type;?>">
                                                            <?php }
                                                            endforeach; ?>
                                                            </div>
                                                    </div>
                                                    <div class="da-form-row">
                                                            <label style="margin:0px 0px">E-Mail</label>
                                                            <div class="da-form-col-3-8">
                                                            <?php foreach($dataUser as $user):
                                                            if($user->std_email == NULL){
                                                            ?>
                                                            <input type="text" style="color:red;" name="Email" id="Email" disabled="disabled" value="ยังไม่มีข้อมูล กรณาเพิ่ม">
                                                            <?php }
                                                            else{ ?>
                                                            <input type="text" name="Email" id="Email" disabled="disabled" value="<?php echo $user->std_email;?>">
                                                            <?php }
                                                            endforeach; ?>
                                                            </div>
                                                            <label style=" ">เบอร์โทรศัพท์</label>
                                                            <div class="da-form-col-2-8">
                                                            <?php foreach($dataUser as $user):
                                                            if($user->std_tel == NULL){
                                                            ?>
                                                            <input type="text" style="color:red;" name="tel" id="tel" disabled="disabled" value="ยังไม่มีข้อมูล กรณาเพิ่ม">
                                                            <?php }
                                                            else{ ?>
                                                            <input type="text" name="tel" id="tel" disabled="disabled" value="<?php echo $user->std_tel;?>">
                                                            <?php }
                                                            endforeach; ?>
                                                            </div>
                                                    </div>
                                            </div>
                                    </form>
                                    </div>
                                    </div>
                                <!--=============================  Dialog Form =================================-->
                                    <div id="da-ex-dialog-form-div" class="no-padding" style="width:100%;height:auto;">
                                        <form id="da-ex-dialog-form-val" class="da-form" action="<?php echo base_url();?>index.php/PDM/form_profile/edit_form/<?php echo $userid->std_id;?>" method="post" name ="checkForm" id="checkForm" onsubmit="return check1()">
                                            <div id="da-validate-error" class="da-message error" style="display:none;"></div>
                                            <div class="da-form-inline">
                                            <?php foreach($dataUser as $userfname):?>
                                            <input type="hidden" name="std_status" value="<?php echo $userfname->std_status;?>">
                                            <?php endforeach;?>
                                                    <div class="da-form-row">
                                                        <label style="">ชื่อ<span class="required">*</span></label>
                                                            <div class="da-form-col-2-8">
                                                            <?php foreach($dataUser as $userfname):?>
                                                            <input type="text" name="fName" id="fName" onKeyPress="chk_fname(this.value)" value="<?php echo $userfname->std_fname;?>">
                                                            <p id="demo_fname"></p>
                                                            <?php endforeach;?>
                                                            </div>
                                                        <label style="width:8%">นามสกุล<span class="required">*</span></label>
                                                            <div class="da-form-col-2-8">
                                                            <?php foreach($dataUser as $userlname):?>
                                                            <input type="text" name="lName" id="lName" onKeyPress="chk_lname()" value="<?php echo $userlname->std_lname;?>">
                                                            <p id="demo_lname"></p>
                                                            <?php endforeach;?>
                                                            </div>
                                                        <label style="width:8%">รหัสนิสิต<span class="required">*</span></label>
                                                            <div class="da-form-col-1-8">
                                                            <?php foreach($dataUser as $userid):?>
                                                            <input style="width:100px" disabled="disabled" type="text" name="idstd" id="idstd" value="<?php echo $userid->std_id;?>">
                                                            <?php endforeach;?>
                                                            </div> 
                                                    </div>
                                                     <div class="da-form-row">
                                                    <label style="">คณะ<span class="required">*</span></label>
                                                            <div class="da-form-item">
                                                                <select style="width:500px;" id="faculty" class="chzn-select" name="faculty" required>
                                                                <?php foreach($dataFac as $fac): ?>
                                                                <option value="<?php echo $fac->fac_id;?>"><?php echo $fac->fac_faculty;?></option>
                                                                <?php endforeach; ?>
                                                                        <?php foreach($data as $item):
                                                                            if($item->fac_faculty != $fac->fac_faculty){ ?>
                                                                        <option value="<?php echo $item->fac_id;?>"><?php echo $item->fac_faculty;?></option>
                                                                        <?php } endforeach; ?>
                                                                </select>
                                                               </div>
                                                    </div>
                                                    <div class="da-form-row">
                                                    <label style="width:8%">สาขา<span class="required">*</span></label>
                                                            <div class="da-form-item">
                                                            <select style="width:500px;" class="chzn-select" id="major" name="major" required>
                                                            <?php foreach($dataMaj as $maj): ?>
                                                            <option value="<?php echo $maj->maj_id;?>"><?php echo $maj->maj_major;?></option>
                                                            <?php endforeach; ?>
                                                            </select>
                                                            </div>
                                                    </div>
                                                    <div class="da-form-row">
                                                        <label>ภาควิชา<span class="required">*</span></label>
                                                    <div class="da-form-item">
                                                            <select style="width:500px;" class="chzn-select" id="status" name="status" required>
                                                            <?php foreach($dataType as $type): ?>
                                                                <option value="<?php echo $type->stdt_id;?>"><?php echo $type->stdt_type;?></option>
                                                                <?php endforeach; ?>
                                                            <?php foreach($Type as $item) :
                                                            if($item->stdt_id != $type->stdt_id){
                                                            ?>
                                                            <option value="<?php echo $item->stdt_id;?>"><?php echo $item->stdt_type;?></option>
                                                            <?php } 
                                                            endforeach; ?>
                                                            </select>
                                                    </div>
                                                    </div>
                                                    <div class="da-form-row">
                                                            <label style="margin:0px 0px">E-Mail</label>
                                                            <div class="da-form-col-3-8">
                                                            <?php foreach($dataUser as $userfname):?>
                                                            <input type="text" name="Email" id="Email" value="<?php echo $userfname->std_email;?>">
                                                            <p id="demo_email"></p>
                                                            <?php endforeach;?>
                                                            </div>
                                                            <label style=" ">เบอร์โทรศัพท์</label>
                                                            <div class="da-form-col-2-8">
                                                            <?php foreach($dataUser as $userfname):?>
                                                            <input type="text" name="tel" id="tel" onKeyPress="chk_tel(this.value)" value="<?php echo $userfname->std_tel;?>">
                                                            <p id="demo_tel"></p>
                                                            <?php endforeach;?>
                                                            </div>
                                                    </div>
                                            <script language="JavaScript" type="text/javascript">
                                                function chk_fname(){
                                                    var CheckEn = document.forms["checkForm"]["fName"].value;
                                                    var lowEn = CheckEn.length;
                                                    for(var i=0 ; i<lowEn ; i++){
                                                            var digitEn = CheckEn.charAt(i);
                                                            if(((digitEn >= "a" && digitEn <= "z") || (digitEn >="0" && digitEn <="9") || (digitEn >="A" && digitEn <="Z"))){
                                                                document.forms["checkForm"]["fName"].id = "css_false";
                                                                document.getElementById('demo_fname').innerHTML = "กรอกข้อมูลเป็นภาษาไทย";
                                                                document.checkForm.fName.focus();
                                                            return false ;
                                                            }
                                                            else if(!((digitEn >= "a" && digitEn <= "z") || (digitEn >="0" && digitEn <="9") || (digitEn >="A" && digitEn <="Z"))){
                                                                document.forms["checkForm"]["fName"].id = "css_true";
                                                                document.getElementById('demo_fname').innerHTML = "";
                                                            }
                                                            return true;
                                                    }
                                                }
                                                function chk_lname(){
                                                    var CheckEn = document.forms["checkForm"]["lName"].value;
                                                    var lowEn = CheckEn.length;
                                                    for(var i=0 ; i<lowEn ; i++){
                                                            var digitEn = CheckEn.charAt(i);
                                                            if(((digitEn >= "a" && digitEn <= "z") || (digitEn >="0" && digitEn <="9") || (digitEn >="A" && digitEn <="Z"))){
                                                                document.forms["checkForm"]["lName"].id = "css_false";
                                                                document.getElementById('demo_lname').innerHTML = "กรอกข้อมูลเป็นภาษาไทย";
                                                                document.checkForm.lName.focus();
                                                            return false ;
                                                            }
                                                            else if(!((digitEn >= "a" && digitEn <= "z") || (digitEn >="0" && digitEn <="9") || (digitEn >="A" && digitEn <="Z"))){
                                                                document.forms["checkForm"]["lName"].id = "css_true";
                                                                document.getElementById('demo_lname').innerHTML = "";
                                                            }
                                                            return true;
                                                    }
                                                }
                                                function chk_tel(){
                                                    var CheckEn = document.forms["checkForm"]["tel"].value;
                                                    var lowEn = CheckEn.length;
                                                    for(var i=0 ; i<lowEn ; i++){
                                                            var digitEn = CheckEn.charAt(i);
                                                        if(CheckEn.charAt(0) != 0){
                                                            document.forms["checkForm"]["tel"].id = "css_false";
                                                                document.getElementById('demo_tel').innerHTML = "กรุณากรอกข้อมูลในรูปแบบ 0899999999";
                                                                document.checkForm.tel.focus() ;
                                                                return false ;
                                                            }else if(CheckEn.charAt(0) == 0){
                                                            if(!((digitEn >="0" && digitEn <="9"))){
                                                                document.forms["checkForm"]["tel"].id = "css_false";
                                                                document.getElementById('demo_tel').innerHTML = "กรุณากรอกข้อมูล 0-9";
                                                                document.checkForm.tel.focus() ;
                                                                return false ;
                                                                }
                                                                else if(((digitEn >="0" && digitEn <="9"))){
                                                                    document.forms["checkForm"]["tel"].id = "css_true";
                                                                    document.getElementById('demo_tel').innerHTML = "";
                                                                }
                                                                return true;
                                                            }else return false;
                                                    }
                                                }
                                    //  ==========================  form submit ===============================================//
                                                function check1() {
                                                    var Check_fname = document.forms["checkForm"]["fName"].value;
                                                    var Check_lname = document.forms["checkForm"]["lName"].value;
                                                    var Check_tel = document.forms["checkForm"]["tel"].value;
                                                    var Check_email = document.forms["checkForm"]["Email"].value;
                                                    var n=0;
                                                    if(Check_fname == ""){
                                                        n=1;
                                                        document.forms["checkForm"]["fName"].id = "css_false";
                                                        document.getElementById('demo_fname').innerHTML = "กรุณากรอกข้อมูล";
                                                        if(Check_lname == ""){
                                                            n=1;
                                                            document.forms["checkForm"]["lName"].id = "css_false";
                                                            document.getElementById('demo_lname').innerHTML = "กรุณากรอกข้อมูล";
                                                            if(Check_tel == ""){
                                                            n=1;
                                                            document.forms["checkForm"]["tel"].id = "css_false";
                                                            document.getElementById('demo_tel').innerHTML = "กรุณากรอกข้อมูล";
                                                            return false;
                                                            }
                                                        return false;
                                                        }
                                                        else if(Check_tel == ""){
                                                            n=1;
                                                            document.forms["checkForm"]["tel"].id = "css_false";
                                                            document.getElementById('demo_tel').innerHTML = "กรุณากรอกข้อมูล";
                                                        return false;
                                                        }
                                                    return false;
                                                    }
                                                    else if(Check_lname == ""){
                                                            n=1;
                                                            document.forms["checkForm"]["lName"].id = "css_false";
                                                            document.getElementById('demo_lname').innerHTML = "กรุณากรอกข้อมูล";
                                                            if(Check_tel == ""){
                                                                n=1;
                                                                document.forms["checkForm"]["tel"].id = "css_false";
                                                                document.getElementById('demo_tel').innerHTML = "กรุณากรอกข้อมูล";
                                                            return false;
                                                            }
                                                        return false;
                                                    }
                                                    else if(Check_tel == ""){
                                                            n=1;
                                                            document.forms["checkForm"]["tel"].id = "css_false";
                                                        return false;
                                                    }
                                                    //alert(n);
                                                    var CheckEn = document.forms["checkForm"]["fName"].value;
                                                    var lowEn = CheckEn.length;
                                                    for(var i=0 ; i<lowEn ; i++){
                                                            var digitEn = CheckEn.charAt(i);
                                                            if(((digitEn >= "a" && digitEn <= "z") || (digitEn >="0" && digitEn <="9") || (digitEn >="A" && digitEn <="Z"))){
                                                                document.forms["checkForm"]["fName"].id = "css_false";
                                                                document.getElementById('demo_fname').innerHTML = "กรอกข้อมูลเป็นภาษาไทย";
                                                                document.checkForm.fName.focus();
                                                            return false;
                                                            }
                                                            else if(!((digitEn >= "a" && digitEn <= "z") || (digitEn >="0" && digitEn <="9") || (digitEn >="A" && digitEn <="Z"))){
                                                                document.forms["checkForm"]["fName"].id = "css_true";
                                                                document.getElementById('demo_fname').innerHTML = "";
                                                            }
                                                    }
                                                    var CheckEn = document.forms["checkForm"]["lName"].value;
                                                    var lowEn = CheckEn.length;
                                                    for(var i=0 ; i<lowEn ; i++){
                                                            var digitEn = CheckEn.charAt(i);
                                                            if(((digitEn >= "a" && digitEn <= "z") || (digitEn >="0" && digitEn <="9") || (digitEn >="A" && digitEn <="Z"))){
                                                                document.forms["checkForm"]["lName"].id = "css_false";
                                                                document.getElementById('demo_lname').innerHTML = "กรอกข้อมูลเป็นภาษาไทย";
                                                                document.checkForm.lName.focus();
                                                            return false ;
                                                            }
                                                            else if(!((digitEn >= "a" && digitEn <= "z") || (digitEn >="0" && digitEn <="9") || (digitEn >="A" && digitEn <="Z"))){
                                                                document.forms["checkForm"]["lName"].id = "css_true";
                                                                document.getElementById('demo_lname').innerHTML = "";
                                                            }
                                                    }
                                                    var CheckEn = document.forms["checkForm"]["tel"].value;
                                                    var lowEn = CheckEn.length;
                                                    for(var i=0 ; i<lowEn ; i++){
                                                            var digitEn = CheckEn.charAt(i);
                                                            if((CheckEn.charAt(0) != 0) ||(lowEn < 10) ||(lowEn>10)){
                                                            document.forms["checkForm"]["tel"].id = "css_false";
                                                                document.getElementById('demo_tel').innerHTML = "กรุณากรอกข้อมูลในรูปแบบ 0899999999";
                                                                document.checkForm.tel.focus();
                                                                return false ;
                                                            }else if(CheckEn.charAt(0) == 0){
                                                                if(!((digitEn >="0" && digitEn <="9"))){
                                                                    document.forms["checkForm"]["tel"].id = "css_false";
                                                                    document.getElementById('demo_tel').innerHTML = "กรุณากรอกข้อมูล 0-9";
                                                                    document.checkForm.tel.focus();
                                                                return false ;
                                                                }
                                                                else if(((digitEn >="0" && digitEn <="9"))){
                                                                    document.forms["checkForm"]["tel"].id = "css_true";
                                                                    document.getElementById('demo_tel').innerHTML = "";
                                                                }
                                                            }
                                                    }
                                                    var x = document.forms["checkForm"]["Email"].value;
                                                    var atpos = x.indexOf("@");
                                                    //alert(atpos);
                                                    var dotpos = x.lastIndexOf(".");
                                                    //alert(dotpos);
                                                    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length){
                                                        document.forms["checkForm"]["Email"].id = "css_false";
                                                        document.getElementById('demo_email').innerHTML = "กรอกข้อมูลให้ถูกต้อง";
                                                        document.checkForm.Email.focus();
                                                        return false;
                                                    }
                                                    else if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length){
                                                        document.forms["checkForm"]["Email"].id = "css_true";
                                                        document.getElementById('demo_email').innerHTML = "";
                                                        return true;
                                                    }
                                                    else if(document.checkForm.faculty.value=="0"){
                                                    alert("กรุณาเลือก select ให้ถูกต้อง");
                                                    document.checkForm.faculty.focus();
                                                    return false;
                                                    }else if(document.checkForm.major.value=="0"){
                                                            alert("กรุณาเลือก select ให้ถูกต้อง");
                                                            document.checkForm.major.focus();
                                                            return false;
                                                    }else if(document.checkForm.status.value=="0"){
                                                            alert("กรุณาเลือก select ให้ถูกต้อง");
                                                            document.checkForm.status.focus() ;
                                                            return false ;
                                                    }else return true;
                                                }
                                            </script>
                                            </div>
                                        </form>
                                    <!--====================================  End Dialog ==============================-->
                        </div>