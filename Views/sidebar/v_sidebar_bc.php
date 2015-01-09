
<!-- Navigator Area -->             
<div class="grid_1">
                            <div class="da-panel-widget pdm-content">
                                <h1 >กิจกรรม</h1>
                                <hr>
                                <?php 
                                if(count($Bc_Sidebar->result())==0){
                                ?>
                                <ul class="da-summary-stat">
                                    <li>
                                       ยังไม่มีกิจกรรม
                                    </li>
                                <?php 
                                }
                                else{
                                ?>
                                <ul class="da-summary-stat">
                                <?php $i=0;foreach ($Bc_Sidebar->result() as $sidebar): ++$i;?>
                                    <li>
                                        <a id="show_cal_<?php echo $i;?>">
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
                                <script>
                                $('#show_cal_<?php echo $i;?>').click(function(){
                                        $.ajax({
                                            url: "<?php echo site_url('PDM/activity_main/show_activity');echo "/$sidebar->cal_id"?>",
                                            type: 'POST',
                                            success: function(response){
                                                $('#show_content').html(response);
                                                $("#show_content").hide().fadeIn(300);
                                            }
                                        })
                                    });
                                </script>
                                <?php endforeach; }?>
                                </ul>
                            </div>  
                        </div>