<?php echo $nav;?>
             

    <div class="grid_1">
                                <div class="da-panel-widget pdm-content">
                                <h1>ส่วนนำทาง</h1>
                                <hr>
                                <ul class="da-summary-stat">
                                    <li>
                                        <a href="#profile">
                                            <span class="da-summary-icon" style="background-color:#a6d037;">
                                                <img src="<?php echo base_url();?>/images/icons/white/32/truck.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <!-- <span class="value up">1</span> -->
                                                <span class="value">ข้อมูลพื้นฐาน</span>
                                                <span class="label">เลื่อนไปดู</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#chman">
                                            <span class="da-summary-icon" style="background-color:#a6d037;">
                                                <img src="<?php echo base_url();?>/images/icons/white/32/truck.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <!-- <span class="value up">1</span> -->
                                                <span class="value">ส่วนของการลงนาม</span>
                                                <span class="label">เลื่อนไปดู</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edu">
                                            <span class="da-summary-icon" style="background-color:#a6d037;">
                                                <img src="<?php echo base_url();?>/images/icons/white/32/truck.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <!-- <span class="value up">1</span> -->
                                                <span class="value">ข้อมูลจากนักวิชาการ</span>
                                                <span class="label">เลื่อนไปดู</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                
                                </div>
                            </div>
    <div class="grid_3" id="profile">
                            <div class="da-panel-widget pdm-content">
                                            <h1>แสดงแบบฟอร์ม วก.U-03</h1>
                                            <hr>
                                <?php $att_form = array("class" => "da-form");
                                echo form_open("PDM/send",$att_form);?>
                                <?php
                                    if(count($showStudent)==0){
                                ?>
                                <div class="da-form-row">
                                                        <label style="width:13%">ชื่อ-นามสกุล</label>
                                                            <div class="da-form-col-4-8">
                                                            <input type="text" disabled="disabled" value="ไม่มีชื่อ-นามสกุล" style="color:red"/>
                                                            </div>
        
                                                        <label style="width:10%">รหัสนิสิต</label>
                                                            <div class="da-form-col-2-8">
                                                            <input type="text" disabled="disabled" value="ไม่มีรหัสนิสิต" style="color:red"/>
                                                            </div>
                                            </div>
                                            <div class="da-form-row">                                                
                                                <label style="width:13%">คณะ</label>
                                                <div class="da-form-col-2-8">                                               
                                                    <input type="text" disabled="disabled" value="ไม่มีคณะ" style="color:red"/>
                                                </div>
                                                                                                
                                                <label style="width:8%">สาขา</label>
                                                <div class="da-form-col-2-8">
                                                    <input type="text" disabled="disabled" value="ไม่มีสาขา" style="color:red"/>
                                                </div>
                                                                                                
                                                <label style="width:14%">ประเภทนิสิต</label>
                                                <div class="da-form-col-1-8">
                                                    <input type="text" style="width:100px;" disabled="disabled" value="ไม่มีประเภทนิสิต" style="color:red"/>
                                                </div>
                                                
                                            </div>
                                            <div class="da-form-row">
                                                
                                                <label style="">E-mail</label>
                                                <div class="da-form-col-3-8">                                                                                                
                                                    <input type="text" disabled="disabled" value="ไม่มีอีเมลล์" style="color:red"/>
                                                </div>
                                                
                                                <label style="width:10%">เบอร์โทรศัพท์</label>
                                                <div class="da-form-col-1-8">
                                                    <input type="text" style="width:150px;" disabled="disabled" value="ไม่มีเบอร์โทรศัพท์" style="color:red"/>
                                                </div>                                                                                                                                                                                        
                                            </div>
                                    <?php
                                    }
                                    else{                                
                                                foreach($showStudent as $row):                                                    
                                    ?>                                                    
                                        <div class="da-form-inline">
                                            <div class="da-form-row">
                                                        <label style="width:13%">ชื่อ-นามสกุล</label>
                                                            <div class="da-form-col-4-8">
                                                            <input type="text" disabled="disabled" value="<?php echo $row['pref_nameth'],"",$row['std_fname']," ",$row['std_lname']; ?>" />
                                                            </div>
                                                        <label style="width:10%">รหัสนิสิต</label>
                                                            <div class="da-form-col-2-8">
                                                            <input type="text" disabled="disabled" value="<?php echo $row['std_id']; ?>" />
                                                            </div>
                                            </div>
                                            <div class="da-form-row">                                                
                                                <label style="width:13%">คณะ</label>
                                                <div class="da-form-col-2-8">                                               
                                                    <input type="text" disabled="disabled" value="<?php echo $row['fac_faculty']; ?>" />
                                                </div>
                                                                                                
                                                <label style="width:8%">สาขา</label>
                                                <div class="da-form-col-2-8">
                                                    <input type="text" disabled="disabled" value="<?php echo $row['maj_major']; ?>" />
                                                </div>
                                                                                                
                                                <label style="width:14%">ประเภทนิสิต</label>
                                                <div class="da-form-col-1-8">
                                                    <input type="text" style="width:100px;" disabled="disabled" value="<?php echo $row['stdt_type']; ?>" />
                                                </div>
                                                
                                            </div>
                                            <div class="da-form-row">
                                                
                                                <label style="">E-mail</label>
                                                <div class="da-form-col-3-8">                                                                                                
                                                    <input type="text" disabled="disabled" value="<?php echo $row['std_email']; ?>" />
                                                </div>
                                                
                                                <label style="margin-right:10px;width:10%">เบอร์โทรศัพท์</label>
                                                <div class="da-form-col-1-8">
                                                    <input type="text" style="width:150px;" disabled="disabled" value="<?php echo $row['std_tel']; ?>" />
                                                </div>                                                                                                                                                                                        
                                            </div>                                                
                                            <?php endforeach; }?>
                                            <?php 
                                                
                                                if(count($showAdvisor)==0){
                                                
                                            ?>
                                            <div class="da-form-row">                                                
                                                <label style="width:18%">อาจารย์ที่ปรึกษาโครงงาน</label>
                                                <div class="da-form-col-5-8">
                                                    <input type="text" disabled="disabled" value="ไม่มีอาจารย์" style="color:red" />
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label style="width:18%">ชื่อโครงงาน(ภาษาไทย)</label>
                                                <div class="da-form-col-6-8">
                                                    <input type="text" disabled="disabled" value="ไม่มีโครงงาน" style="color:red" />
                                                </div>
                                            </div>                                            
                                            <div class="da-form-row">
                                                <label style="width:18%">ชื่อโครงงาน(ภาษาอังกฤษ)</label>
                                                <div class="da-form-col-6-8">
                                                    <input type="text" disabled="disabled" value="ไม่มีโครงงาน" style="color:red" />
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            else{
                                                foreach($showAdvisor as $row2):    
                                            ?>
                                            
                                            <div class="da-form-row">                                                
                                                <label style="width:23%">อาจารย์ที่ปรึกษาโครงงาน</label>
                                                <div class="da-form-col-6-8">
                                                    <input type="text" disabled="disabled" value="<?php echo $row2['pref_nameth'],"",$row2['pers_fname']," ",$row2['pers_lname']; ?>" />
                                                </div>
                                            </div>                                            
                                            <div class="da-form-row">
                                                <label style="width:23%">ชื่อโครงงาน(ภาษาไทย)</label>
                                                <div class="da-form-col-6-8">
                                                    <input type="text" disabled="disabled" value="<?php echo $row2['frm1_nameth']; ?>" />
                                                </div>
                                            </div>                                            
                                            <div class="da-form-row">
                                                <label style="width:23%">ชื่อโครงงาน(ภาษาอังกฤษ)</label>
                                                <div class="da-form-col-6-8">
                                                    <input type="text" disabled="disabled" value="<?php echo $row2['frm1_nameen']; ?>" />
                                                </div>
                                            </div>
                                            <?php endforeach; }?>
                                            
                                            
                                            <?php
                                                    if(count($showAssociateDean)==0){
                                            ?>
                                            <div class="da-form-row">
                                                <label style="width:22.5%">ขออนุมัติสอบปากเปล่าโครงงานวันที่</label>
                                                <div class="da-form-col-2-8">
                                                    <input type="text" disabled="disabled" value="ไม่มีวันที่ขอสอบ" style="color:red"/>
                                                </div>    
                                                
                                                <label style="width:5%">เวลา</label>
                                                <div class="da-form-col-1-8">
                                                    <input type="text" disabled="disabled" value="ไม่มีเวลา" style="color:red"/>
                                                </div>

                                                <label style="width:8%">สถานที่</label>
                                                <div class="da-form-col-2-8">
                                                    <input type="text" disabled="disabled" value="ไม่มีสถานที่ที่ขอสอบ" style="color:red"/>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            else{
                                                    foreach($showAssociateDean as $row3):                                                    
                                            ?> 
                                            <div class="da-form-row">
                                                <label style="width:22.5%">ขออนุมัติสอบปากเปล่าโครงงานวันที่</label>
                                                <div class="da-form-col-2-8">
                                                    <input type="text" disabled="disabled" />
                                                </div>    
                                                
                                                <label style="width:3%">เวลา</label>
                                                <div class="da-form-col-1-8">
                                                    <input type="text" disabled="disabled" />
                                                </div>

                                                <label style="width:5%">สถานที่</label>
                                                <div class="da-form-col-2-8">
                                                    <input type="text" disabled="disabled" />
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; }?>
                                            
                            
                                
                            <?php echo form_close(); ?>    
                        
                            </div>
                                                
<!-- ส้วนที่ 2 -->            
                            </div><!-- 5555 -->
                            <div class="da-panel-widget pdm-content" id="chman">
                                            <h1>ส่วนของการลงนาม</h1>
                                            <hr>
                                    <?php $att2_form = array("class" => "da-form");
                                    echo form_open("PDM/send",$att2_form);?>
                                    
                                    <?php
                                        if(count($showAssociateDean)==0){
                                    ?>
                                    <div class="da-form-row">                                                
                                                <label style="width:20%">รองคณบดีฝ่ายวิชาการ</label>
                                                <div class="da-form-col-3-8">
                                                    <input type="text" disabled="disabled" value="ไม่มีรองคณะบดีฝ่ายวิชาการ" style="color:red"/>
                                                </div>                                                
                                        </div>
                                    <?php
                                    }
                                    else{
                                        foreach($showAssociateDean as $row3):                                                    
                                    ?>  
                                    
                                    <div class="da-form-inline">
                                        <div class="da-form-row">                                                
                                                <label style="width:20%">รองคณบดีฝ่ายวิชาการ</label>
                                                <div class="da-form-col-3-8">
                                                    <input type="text" disabled="disabled" value="<?php echo $row3['pref_nameth'],"",$row3['pers_fname']," ",$row3['pers_lname']; ?>" />
                                                </div>                                                
                                        </div>
                                        <?php endforeach; }?>
                                        
                                        
                                        <?php
                                                if(count($showBranchChief)==0){
                                        ?>
                                        <div class="da-form-row">                                                
                                                <label style="width:20%">ประธานสาขาวิชาฯ</label>
                                                <div class="da-form-col-3-8">
                                                    <input type="text" disabled="disabled" value="ไม่มีประธานสาขาวิชาฯ" style="color:red"/>
                                                </div>                                                
                                        </div>                                    
                                        <?php
                                        }
                                        else{
                                                foreach($showBranchChief as $row4):                                                    
                                        ?> 
                                        <div class="da-form-row">                                                
                                                <label style="width:20%">ประธานสาขาวิชาฯ</label>
                                                <div class="da-form-col-3-8">
                                                    <input type="text" disabled="disabled" value="<?php echo $row4['pref_nameth'],"",$row4['pers_fname']," ",$row4['pers_fname']; ?>" />
                                                </div>                                                
                                        </div>
                                        <?php endforeach; }?>
                                        
                                        
                                        <?php
                                                if(count($showChairman)==0){
                                        ?>
                                        <div class="da-form-row">                                            
                                                <label style="width:20%">ประธานกรรมการ</label>
                                                <div class="da-form-col-3-8">
                                                    <input type="text" disabled="disabled" value="ไม่มีปะธานกรรมการ" style="color:red" />
                                                </div>                                                
                                        </div>
                                        <?php
                                        }
                                        else{
                                                foreach($showChairman as $row5):                                                    
                                        ?> 
                                        <div class="da-form-row">                                            
                                                <label style="width:20%">ประธานกรรมการ</label>
                                                <div class="da-form-col-3-8">
                                                    <input type="text" disabled="disabled" value="<?php echo $row5['pref_nameth'],"",$row5['pers_fname']," ",$row5['pers_lname']; ?>" />
                                                </div>                                                
                                        </div>
                                        <?php endforeach; }?>
                                        
                                        
                                        <?php
                                                if(count($showDirector)==0){
                                        ?>
                                        <div class="da-form-row">                                            
                                                <label style="width:20%">กรรมการ(ถ้ามี)</label>
                                                <div class="da-form-col-3-8">
                                                    <input type="text" disabled="disabled" value="ไม่มีกรรมการ" style="color:red"/>
                                                </div>                                                
                                        </div>
                                        <?php
                                        }
                                        else{
                                                foreach($showDirector as $row6):                                                    
                                        ?> 
                                        <div class="da-form-row">                                            
                                                <label style="width:20%">กรรมการ(ถ้ามี)</label>
                                                <div class="da-form-col-3-8">
                                                    <input type="text" disabled="disabled" value="<?php echo $row6['pref_nameth'],"",$row6['pers_fname']," ",$row6['pers_lname']; ?>" />
                                                </div>                                                
                                        </div>
                                        <?php endforeach; }?>
                                        
                                    </div>
                                <?php echo form_close(); ?>
                            
                            




                                <div class="da-panel-widget pdm-content" id="edu">
                                    <h1>ข้อมูลจากนักวิชาการ</h1>
                                    <hr>
                                    <?php $att3_form = array("class" => "da-form");
                                    echo form_open("PDM/send",$att3_form);?>
                                    
                                    <?php
                                            if(count($showBranchChief)==0){
                                    ?>
                                    <div class="da-form-row">                                                
                                                <label style="width:26%">รับเรื่องขออนุมัติสอบ ในวันที่</label>
                                                <div class="da-form-col-2-8">
                                                    <input type="text" disabled="disabled" value="ไม่มีวันที่รับเรื่อง" style="color:red"/>
                                                </div>                                                
                                        </div>
                                        <div class="da-form-row">                                        
                                                <label style="width:26%">จัดทำคำสั่งแต่งตั้งแล้ว ในวันที่</label>
                                                <div class="da-form-col-2-8">
                                                    <input type="text" disabled="disabled" value="ไม่มีวันที่จัดทำคำสั่ง" style="color:red"/>
                                                </div>                                                                                        
                                        </div>                                        
                                        <div class="da-button-row">
                                            
                                            <input type="submit" value="บันทึก" class="da-button green" />
                                            <input type="button" value="ยกเลิก" class="da-button red" />
                                        </div>
                                    <?php
                                    }
                                    else{
                                        foreach($showBranchChief as $row4):                                                    
                                    ?>
                                    
                                    <div class="da-form-inline">                                            
                                        <div class="da-form-row">                                                
                                                <label style="width:21%">รับเรื่องขออนุมัติสอบ ในวันที่</label>
                                                <div class="da-form-col-2-8">
                                                    <input type="text" disabled="disabled" value="<?php echo $row4['frm1_subdate']; ?>" />
                                                </div>                                                
                                        </div>
                                        <div class="da-form-row">                                        
                                                <label style="width:21%">จัดทำคำสั่งแต่งตั้งแล้ว ในวันที่</label>
                                                <div class="da-form-col-2-8">
                                                    <input type="text" disabled="disabled" value="<?php echo $row4['frm1_assigndate']; ?>" />
                                                </div>                                                                                        
                                        </div>                                        
                                        <div class="da-button-row">
                                            
                                            <input type="submit" value="บันทึก" class="da-button green" />
                                            <input type="button" value="ยกเลิก" class="da-button red" />
                                        </div>
                                    </div>
                                <?php endforeach; }?>
                                </div>
                                
                                
                                <?php echo form_close(); ?>    
                            </div>
                            