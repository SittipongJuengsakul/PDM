<div class="grid_3 pdm-content">
                            <div class="da-panel-widget pdm-content">
                                    <h1><?php echo $cal[0]->cal_name;?></h1>  
                                    <hr>
                                    <ul class="da-summary-stat">
                                    <?php if($checks==0){ ?>
                                    <h3 style="text-align:center;">ไม่มีสิ่งที่ต้องส่ง</h3>
                                    <?php return 0;
                                        }
                                        else{?>
                                    <?php foreach ($works as $wk): ?>  
                                    <li>
                                        <a href="<?php echo site_url($wk->wrk_url);?>">
                                            <span class="da-summary-icon" style="background-color:white;">
                                            <?php if($state[0]->std_status<$wk->wrk_status) {?>
                                                <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_false.png" alt="" />
                                           <?php } else{?>
                                                <img class="check-state" src="<?php echo base_url();?>/images/PDM/check_true.png" alt="" />
                                           <?php } ?>
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value"><?php echo $wk->wrk_name;?></span>
                                                <span class="label">คลิกเพื่อเพิ่ม<?php echo $wk->wrk_name;?></span>
                                            </span>
                                        </a>
                                    </li>
                                    <?php endforeach; }?>
                                    </ul>        
                        </div>                 
                    </div>
