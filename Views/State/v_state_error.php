<?php $state = $state->result();?>
<!-- พื้นที่ไช้ echo content -->
<div id="da-content-wrap" class="clearfix">
                    <!-- Content Area -->                                  
                        <?php 
                            echo $nav;
                        ?>
                        <?php
                            echo $sidebar;
                        ?>
                        <div class="grid_3 pdm-content">
                            <div class="da-panel-widget pdm-content">
                                    <h1 style="color:red;">ผิดพลาด!ข้ามขั้นตอนโครงงาน</h1>  
                                      <hr class="green">
                                      <ul class="da-summary-stat">
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/PDM/form_profile">
                                            <span class="da-summary-icon" style="background-color:white;">
                                            <?php if($state[0]->std_status<1) {?>
                                                <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_false.png" alt="" />
                                           <?php } else{?>
                                                   <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_true.png" alt="" />
                                           <?php } ?>
                                            </span>
                                            <span class="da-summary-text">
                                                <!-- <span class="value up">1</span> -->
                                                <span class="value">ข้อมูลพื้นฐาน</span>
                                                <span class="label">คลิกเพื่อเพิ่มข้อมูลพื้นฐาน</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/PDM/form_u01">
                                            <span class="da-summary-icon" style="background-color:white;">
                                            <?php if($state[0]->std_status<5) {?>
                                                <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_false.png" alt="" />
                                           <?php } else{?>
                                                   <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_true.png" alt="" />
                                           <?php } ?>
                                            </span>
                                            <span class="da-summary-text">
                                                <!-- <span class="value up">1</span> -->
                                                <span class="value">เสนอโครงงาน</span>
                                                <span class="label">คลิกเพื่อเสนอโครงงาน</span>
                                            </span>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/PDM/progess_project_std">
                                            <span class="da-summary-icon" style="background-color:white;">
                                            <?php if($state[0]->std_status<11) {?>
                                                <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_false.png" alt="" />
                                           <?php } else{?>
                                                   <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_true.png" alt="" />
                                           <?php } ?>
                                            </span>
                                            <span class="da-summary-text">
                                                <!-- <span class="value up">1</span> -->
                                                <span class="value">รายงานความก้าวหน้า</span>
                                                <span class="label">คลิกรายงานความก้าวหน้าโครงงาน</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/PDM/form_u03">
                                            <span class="da-summary-icon" style="background-color:white;">
                                            <?php if($state[0]->std_status<20) {?>
                                                <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_false.png" alt="" />
                                           <?php } else{?>
                                                   <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_true.png" alt="" />
                                           <?php } ?>
                                            </span>
                                            <span class="da-summary-text">
                                                <!-- <span class="value up">1</span> -->
                                                <span class="value">เสนอขอสอบโครงงาน วก.U03</span>
                                                <span class="label">คลิกเสนอขอสอบโครงงาน วก.U03</span>
                                            </span>
                                        </a>
                                    </li>   
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/PDM/form_u03_2">
                                            <span class="da-summary-icon" style="background-color:white;">
                                            <?php if($state[0]->std_status<30) {?>
                                                <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_false.png" alt="" />
                                           <?php } else{?>
                                                   <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_true.png" alt="" />
                                           <?php } ?>
                                            </span>
                                            <span class="da-summary-text">
                                                <!-- <span class="value up">1</span> -->
                                                <span class="value">เสนอขอสอบปากเปล่าโครงงาน วก.U03-2</span>
                                                <span class="label">คลิกเสนอขอสอบปากเปล่าโครงงาน วก.U03-2</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/PDM/form_pdfU03_2">
                                            <span class="da-summary-icon" style="background-color:white;">
                                            <?php if($state[0]->std_status<100) {?>
                                                <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_false.png" alt="" />
                                           <?php } else{?>
                                                   <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_true.png" alt="" />
                                           <?php } ?>
                                            </span>
                                            <span class="da-summary-text">
                                                <!-- <span class="value up">1</span> -->
                                                <span class="value">พิมพ์รายงานผลสอบโครงงาน</span>
                                                <span class="label">คลิกพิมพ์รายงานผลสอบโครงงาน</span>
                                            </span>
                                        </a>
                                    </li>                             
                                </ul>    
                        </div>
                    </div>
</div>