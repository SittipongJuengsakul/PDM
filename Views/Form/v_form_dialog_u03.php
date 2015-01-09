<!--======================= DIalog =====================-->
<style>
#padding {
    padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
}
</style>
                <?php echo $nav;?>
                <?php echo $sidebar;?>
                            <div class="grid_3">
                            <div class="da-panel">
							<div class="da-panel-header">
                                <h1>
                                    อนุมัติแบบฟอร์มเสนอโครงงาน
                                </h1>
							</div>
                                <div class="da-panel-content" style="padding-bottom: 10px;">
                                <form action="<?php echo base_url();?>index.php/PDM/form_u02/insert_status/<?php echo 10;?>" method="get">
                                    <table class="da-table">
                                    <?php foreach($form as $u02):?>
                                                <tr >
                                                    <td class="da-icon-column" style="width:20%">
                                                        รหัสแบบฟอร์มโครงงาน
                                                    </td>
                                                    <td class="da-icon-column" style="text-align:left;">
                                                    <input type="hidden" name="idform" value="<?php echo $u02->frm1_id?>">
                                                        <?php echo $u02->frm1_id?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="da-icon-column" >
                                                        ชื่อโครงงาน (ภาษาไทย)
                                                    </td>
                                                    <td class="da-icon-column" style="text-align:left;">
                                                        <?php echo $u02->frm1_nameth?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="da-icon-column" >
                                                        ชื่อโครงงาน (ภาษาอังกฤษ)
                                                    </td>
                                                    <td class="da-icon-column" style="text-align:left;">
                                                        <?php echo $u02->frm1_nameen?>
                                                    </td>
                                                </tr>
                                                <?php endforeach; foreach($student as $u02std):?>
                                                <tr>
                                                    <td class="da-icon-column" >
                                                    <input type="hidden" name="idStd" value="<?php echo $u02std->std_id;?>">
                                                        ผู้รับผิดชอบโครงงาน
                                                    </td>
                                                    <td class="da-icon-column" style="text-align:left;">
                                                        <p><?php echo $u02std->std_id." "?>
                                                        <?php echo $u02std->std_fname;?>
                                                        <?php echo " ".$u02std->std_lname;?>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <?php endforeach; foreach($form as $u02):?>
                                                <tr>
                                                    <td class="da-icon-column" >
                                                        ความเป็นมาและความสำคัญ
                                                    </td>
                                                    <td class="da-icon-column" style="text-align:left;">
                                                    <p id="importance" value="<?php echo $u02->frm1_importance?>">
                                                    <?php echo $u02->frm1_importance?>
                                                    </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="da-icon-column" >
                                                        วัตถุประสงค์
                                                    </td>
                                                    <td class="da-icon-column" style="text-align:left;">
                                                    <p id="phopos" value="<?php echo $u02->frm1_propose;?>">
                                                    <?php echo $u02->frm1_propose;?>
                                                    </p>
                                                    </td>
                                                </tr>
                                                <tr >
                                                    <td class="da-icon-column" >
                                                        หลักการ ทฤษฎี เหตุผล
                                                    </td>
                                                    <td class="da-icon-column" style="text-align:left;">
                                                    <p id="try" value="<?php echo $u02->frm1_theory;?>">
                                                    <?php echo $u02->frm1_theory;?>
                                                    </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="da-icon-column" >
                                                        แผนการดำเนินงาน
                                                    </td>
                                                    <td class="da-icon-column" style="text-align:left;">
                                                    <p id="plan" value="<?php echo $u02->frm1_plantask;?>">
                                                    <?php echo $u02->frm1_plantask;?>
                                                    </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="da-icon-column">
                                                        ระยะเวลาเริ่มดำเนินงาน
                                                    </td>
                                                    <td class="da-icon-column" style="text-align:left;">
                                                    <p id="time" value="<?php echo $u02->frm1_time;?>">
                                                    <?php echo $u02->frm1_time;?>
                                                    </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="da-icon-column">
                                                        ขอบเขตงาน
                                                    </td>
                                                    <td class="da-icon-column" style="text-align:left;">
                                                    <p id="scope" value="<?php echo $u02->frm1_planscope;?>">
                                                    <?php echo $u02->frm1_planscope;?>
                                                    </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="da-icon-column" >
                                                        ประโยชน์ที่คาดว่าจะได้รับ
                                                    </td>
                                                    <td class="da-icon-column" style="text-align:left;">
                                                    <p id="ben" value="<?php echo $u02->frm1_benefit;?>">
                                                    <?php echo $u02->frm1_benefit;?>
                                                    </p>
                                                    </td>
                                                </tr>
                                                <?php endforeach;?>
                                    </table>
                                            <div class="da-button-row" id="padding">
                                                <input type="button" class="da-button red"   style="float:left;" value="กลับ" OnClick="window.location.href = '<?php echo base_url();?>/index.php/PDM/approve_project_avs/'">
                                                <input type="button" class="da-button red"   style="float:right;" value="ไม่อนุมัติแบบฟอร์มโครงงาน" OnClick="window.location.href = '<?php echo base_url();?>/index.php/PDM/form_u02/insert_statusfalse/<?php echo 20;?>/<?php echo $u02->frm1_id;?>'">
                                                <input type="submit" class="da-button green" style="float:right;margin-right:15px;" value="อนุมัติแบบฟอร์มโครงงาน">
                                            </div>
                                </form>
								</div>
                            </div>
                            </div>
                            <!--========================== END Dialog ====================-->
