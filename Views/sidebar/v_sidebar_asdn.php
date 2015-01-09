
<!-- Navigator Area -->             
<div class="grid_1">
                            <div class="da-panel-widget pdm-content">
                                <h1 >กิจกรรม</h1>
                                <hr>
                                <?php 
                                if(count($ASDN_Sidebar->result())==0){
                                ?>
                                <ul class="da-summary-stat">
                                    <li>
                                       ยังไม่มีกิจกรรม
                                    </li>
                                <?php 
                                }
                                else{ foreach ($ASDN_Sidebar->result() as $sidebar): ?>
                                <ul class="da-summary-stat">
                                    <li>
                                        <a href="#">
                                            <span class="da-summary-icon" style="background-color:#5C5C5C;">
                                                <img src="<?php echo base_url();?>/images/icons/white/32/folder.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <!-- <span class="value up">1</span> -->
                                                <span class="value"><?php echo $sidebar->cal_name ?></span>
                                                <span class="label">สิ้นสุด <?php echo $sidebar->cal_ldate?></span>
                                            </span>
                                        </a>
                                    </li>
                                <?php endforeach; }?>
                                </ul>
                            </div>  
                        </div>