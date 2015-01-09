<script type="text/javascript" src="<?php echo base_url();?>js/core/plugins/dandelion.wizard.min.js"></script>
<script>
    function check_validate(){
        var checkname = document.forms['myForm']['nameadv'].value;
        alert('HA HA HA');
    }
    function CretenewCoAvs()
    {
        var intLine = parseInt(document.myForm.coavsmaxline.value);
        intLine++;
        var theDiv = document.getElementById("coavsdiv");
        var celm = document.createElement("div");
        celm.setAttribute("class","da-form-row");
        var lv2thelabel = document.createElement("label");
        var texts = "อาจารย์ที่ปรึกษารอง";
        var txtn = document.createTextNode(texts);
        lv2thelabel.appendChild(txtn);
        var lv2select = document.createElement("select");
        lv2select.setAttribute("class","chzn-select");
        lv2select.setAttribute("style","width:350px");
        lv2select.setAttribute("id","coavs"+intLine)
        lv2select.setAttribute("name","ncoavs"+intLine)
        celm.appendChild(lv2thelabel);
        celm.appendChild(lv2select);
        theDiv.appendChild(celm);
        CreateSelectOption("coavs"+intLine);
        document.myForm.coavsmaxline.value = intLine;
    }
    function CreateSelectOption(ele)
    {
        var opsel = document.getElementById(ele);
        var Item = new Option("กรุณาเลือกอาจารย์ที่ปรึกษารอง"); 
        opsel.options[opsel.length] = Item;
        <?php foreach($advisor as $adv):?>
        var Item = new Option("<?php echo $adv->pers_fname." ".$adv->pers_lname ?>","<?php echo $adv->pers_id ?>");
        opsel.options[opsel.length] = Item;
        <?php endforeach; ?>
        
    }
    function RemoveRow()
    {
                intLine = parseInt(document.myForm.coavsmaxline.value);
                var list = document.getElementById("coavsdiv");
                list.removeChild(list.childNodes[intLine]);               
                intLine--;
                document.myForm.coavsmaxline.value = intLine;
    }   
</script>
                <?php echo $nav; echo $sidebar; ?>
                        <div class="grid_3">
                            <div class="da-panel-widget pdm-content">
                                            <h1>เสนอโครงงานใหม่</h1>
                                            <hr>
                                <form name="myForm" id="da-ex-wizard-form" class="da-form" action="<?php echo base_url();?>index.php/PDM/form_u01/insert_data" method="post">
                                        <fieldset class="da-form-inline">
                                            <legend style="padding-top:10px">ชื่อหัวข้อที่นำเสนอ</legend>
                                            <div class="da-form-row">
                                                <label>ชื่อโครงงาน(ไทย)<span class="required">*</span></label>
                                                <div class="da-form-col-5-8">
                                                    <input type="text" name="nameTH" id="nameTH" class="required" />
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>ชื่อโครงงาน(EN)<span class="required">*</span></label>
                                                <div class="da-form-col-5-8">
                                                    <input type="text" name="nameEN" id="nameEN"  class="required" />
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>อาจารย์ที่ปรึกษาหลัก<span class="required">*</span></label>
                                                <select class="chzn-select" style="width:350px" name="nameadv"  required>
                                                    <?php foreach($advisor as $adv):?>
                                                    <option value="<?php echo $adv->pers_id ?>">
                                                    <?php echo $adv->pers_fname?>
                                                    <?php echo " ".$adv->pers_lname ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <img src="<?php echo base_url('images/icons/color/add.png');?>" alt="" onClick="CretenewCoAvs();" title="เพิ่มอาจารย์ที่ปรึกษารอง">
                                                <img src="<?php echo base_url('images/icons/color/cross.png');?>" alt="" onClick="RemoveRow();" title="ลดอาจารย์ที่ปรึกษารอง">
                                                <input type="hidden" name="coavsmaxline" value="0">
                                            </div>
                                            <div id="coavsdiv">
                                            </div>
                                        </fieldset>
                                        <fieldset class="da-form-inline">
                                            <legend>ความเป็นมา</legend>
                                            <div class="da-form-row">
                                                <label>ความเป็นมาและความสำคัญของปัญหา</label>
                                                <div class="da-form-item">
                                                    <textarea  rows="auto" cols="auto" name="importance" id="importance" class="required" ></textarea>
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>วัตถุประสงค์ของการศึกษา</label>
                                                <div class="da-form-item">

                                                    <textarea rows="auto" cols="auto" name="propose" id="propose" class="required"></textarea>
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>หลักการ ทฤษฎี เหตุผล</label>
                                                <div class="da-form-item">

                                                    <textarea rows="auto" cols="auto" name="theory" id="theory" class="required" ></textarea>
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>ระยะเวลาดำเนินการ</label>
                                                <div class="da-form-item">

                                                    <textarea rows="auto" cols="auto" name="time" id="time" class="required"></textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="da-form-inline">
                                            <legend>แผนดำเนินงาน</legend>
                                            <div class="da-form-row">
                                                <label>แผนการดำเนินงาน(ให้ระบุขั้นตอน)</label>
                                                <div class="da-form-item">

                                                    <textarea rows="auto" cols="auto" name="plantask" id="plantask" class="required"></textarea>
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>ขอบเขตการศึกษา(ให้กำหนดขอบเขตที่จะศึกษา)</label>
                                                <div class="da-form-item">

                                                    <textarea rows="auto" cols="auto" name="planscope" id="planscope" class="required" ></textarea>
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>ฮาร์ดแวร์ (Hardware) ที่ใช้ระบุ</label>
                                                <div class="da-form-item">

                                                    <textarea rows="auto" cols="auto"name="hardware" id="hardware" class="required" ></textarea>
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>ซอฟต์แวร์(Software)ที่ใช้ระบุ</label>
                                                <div class="da-form-item">
                                                    <textarea rows="auto" cols="auto" name="software" id="software" class="required"></textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="da-form-inline">
                                            <legend>ส่วนท้าย</legend>
                                            <div class="da-form-row">
                                                <label>ประโยชน์ที่คาดว่าจะได้รับ</label>
                                                <div class="da-form-item">
                                                    <textarea rows="auto" cols="auto" name="banefit" id="banefit" class="required"></textarea>
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>คำนิยามศัพท์เฉพาะ (ถ้ามี)</label>
                                                <div class="da-form-item">
                                                    <textarea rows="auto" cols="auto" name="definition" id="definition"></textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                            </div>
                        </div>