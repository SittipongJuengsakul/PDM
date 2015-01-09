 
 <div class="grid_3 pdm-content">
    <div class="da-panel-widget pdm-content">
        <h1>รายงานความก้าวหน้าโครงงาน</h1>  
        <hr>
        <form name="FormProgressProject" id="da-form-report" class="da-form" action="<?php echo base_url('index.php/PDM/progess_project_std/progess_add_detail');?>" method="post">
                                        <fieldset class="da-form-inline">
                                            <legend style="padding-top:10px;">1.ความก้าวหน้าของโครงงาน  (นิสิต)</legend>
                                            <div class="da-form-row">
                                               <label style="width:200px">ชื่อโครงงาน</label>
                                                <div class="da-form-item" style="margin-left:100px">
                                                  <input type="text" disabled="disabled" name="form_name" value="<?php echo $form01_data[0]->frm1_nameth;?>">
                                                  <input type="hidden" name="form_id" value="<?php echo $form01_data[0]->frm1_id;?>">
                                               </div>
                                            </div>
                                            <div class="da-form-row">
                                               <label style="width:200px">1.1 กิจกรรมที่กำลังศึกษา<span class="required">*</span></label>
                                               <div class="da-form-item large">
                                               <textarea rows="auto" cols="auto" name="ActivityResearch"></textarea>
                                               </div>
                                            </div>
                                            <div class="da-form-row">
                                               <label style="width:200px">1.2 ปัญหาที่พบจากการดำเนินงานข้อ 1<span class="required">*</span></label>
                                               <div class="da-form-item large">
                                               <textarea rows="auto" cols="auto" name="ProblemResearch"></textarea>
                                               </div>
                                            </div>
                                            <div class="da-form-row">
                                               <label style="width:200px">1.3 แนวทางการแก้ปัญหาและอุปสรรคจากข้อ 2<span class="required">*</span></label>
                                               <div class="da-form-item large">
                                               <textarea rows="auto" cols="auto" name="FixProblemResearch"></textarea>
                                               </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="da-form-inline">
                                        <legend style="padding-top:10px;">2.สิ่งที่แนบมากับรายงานความก้าวหน้าฉบับนี้  (นิสิต)</legend>
                                            <div class="da-form-row">
                                               <label style="width:200px">2.1 อับโหลดเอกสารแนบ</label>
                                               <div class="da-form-item large">
                                               <input type="file" class="da-custom-file" name="FileLocation"/>
                                               </div>
                                            </div>
                                            <div class="da-form-row">
                                            <label style="width:200px">2.2 เอกสารพื้นฐานโครงงาน</label>
                                            <div class="da-form-item" style="margin-left: 200px;">
                                              <ul class="da-form-list">
                                                  <li><input type="checkbox" name="LR" value="1" /> <label>ทฤษฏีและงานวิจัยที่เกี่ยวข้อง (Literature Review)</label></li>
                                                  <li><input type="checkbox" name="SS" value="1"/> <label>ขอบเขตของโครงงาน (Software Specification)</label></li>
                                                  <li><input type="checkbox" name="CoD" value="1"/> <label>แผนภาพกระแสข้อมูล (Context Diagram)</label></li>
                                                  <li><input type="checkbox" name="DfD" value="1"/> <label>แผนภาพกระแสข้อมูล (Dataflow Diagram)</label></li>
                                                  <li><input type="checkbox" name="ERD" value="1"/> <label>แผนภาพแสดงความสัมพันธ์ของข้อมูล (E-R Diagram)</label></li>
                                                  <li><input type="checkbox" name="DaD" value="1"/> <label>พจนานุกรมข้อมูล (Data Dictionary)</label></li>
                                                  <li><input type="checkbox" name="StC" value="1" /> <label>ผังโครงสร้าง (Structure Chart)</label></li>
                                                  <li><input type="checkbox" name="Fc" value="1"/> <label>ผังงาน (Flowchart)/ขั้นตอนวิธี (Algorithms)/คำสั่งเทียม (Pseudo Code)</label></li>
                                                  <li><input type="checkbox" name="UML" id="UML" value="1"/> <label>แผนภาพยูเอ็มแอล (UML Diagram)</label></li>
                                                  <li style="padding-left:3em;"><input type="checkbox" name="UMLuc" value="1"/> <label>แผนภาพยูสเคส (UML Use Case Diagram)</label></li>
                                                  <li><input type="checkbox" name="DaS" value="1"/> <label>โครงสร้างข้อมูล (Data Structures)</label></li>
                                                  <li><input type="checkbox" name="MoD" value="1"/> <label>ออกแบบโมดูล (Module Design)</label></li>
                                                  <li><input type="checkbox" name="StD" value="1"/> <label>โครงสร้างหน้าจอ (Structure Design)</label></li>
                                                  <li><input type="checkbox" name="ScD" id="ScreenDesign" value="1"/> <label>การออกแบบหน้าจอ (Screen Design)</label></li>
                                                  <li><input type="checkbox" name="TeC" value="1"/> <label>กรณีทดสอบ (Test Case)</label></li>
                                                  <li><input type="checkbox" name="etc" value="1"/> <label>อื่นๆ (โปรดระบุ)</label></li>
                                                </ul>
                                            </div>
                                          </div>
                                          <div class="da-form-row">
                                               <label style="width:200px">2.3 อธิบายแจกแจงรายละเอียดที่ระบุใว้ในหัวข้อ 2.1 และ 2.2</label>
                                               <div class="da-form-item large">
                                               <textarea rows="auto" cols="auto" name="PresentWorks"></textarea>
                                               </div>
                                            </div> 
                                        </fieldset>
                                        <div class="da-button-row">
                                            <input type="submit" value="บันทึก" class="da-button green" />
                                            <input type="button" value="ยกเลิก" class="da-button red" />
                                        </div>
        </form>  
    </div>                 
</div>
