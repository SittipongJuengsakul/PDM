<div id="da-content-wrap" class="clearfix">
                    <!-- Content Area -->
                    <div id="da-content-area">
                        <?php 
                            echo $nav;

                        ?>
                        <div class="grid_4">
                        <div class="da-panel-widget pdm-content">
                        <div class="da-panel-header">
                                    <span class="da-panel-title">
                                        <h1>เลือกปีการศึกษา</h1>
                                    </span>
                                </div>
                                    <hr>
                                    <div class="da-form-inline">
                                 <center><div class="da-form-row">
                                                <div class="da-form-item large">                 
                                                    <select class="chzn-select" style="width:200px" name="year" id="ChooseYear">
                                                        <option selected disabled value = "0">กรุณาเลือกปีการศึกษา</option>
                                                        <option value="<?php echo $year=2557; ?>">2557</option>
                                                        <option value="<?php echo $year=2556; ?>">2556</option>
                                                        <option value="<?php echo $year=2555; ?>">2555</option>
                                                    </select>
                                                </div>
                                              </div></center>
                                </div>
                        </div>
                        </div>
                        <div id="ShowContent">
                        <div class="grid_4">
                            <div class="da-panel-widget pdm-content">
                                        <h1>ปฏิทินโครงงาน</h1>
                                        <hr>                        
                                <table id="da-ex-datatable" class="da-table">
                                        <thead>
                                            
                                            <tr>
                                                <th width="3%" >ลำดับ</th>
                                                <th width="20%"style="text-align:center">ชื่อกิจกรรม</th>
                                                <th width="8%" style="text-align:center">ตั้งแต่</th>
                                                <th width="8%" style="text-align:center">สิ้นสุด</th>
                                                <th width="15%"style="text-align:center">สิ่งที่ตองส่ง</th>
                                                <th width="25%"style="text-align:center">คำอธิบาย</th>    
                                            </tr>
                                        </thead>
                                        <?php 
                                        $i=1;
                                        foreach($vision->result() as $v){
                                        ?>
                                        <tr>
                                          <td style="text-align:center"><?php echo $i++; ?></td>
                                          <td><?php echo $v->cal_name; ?></td>
                                          <td style="text-align:center"><?php echo $v->cal_fdate; ?></td>
                                          <td style="text-align:center"><?php echo $v->cal_ldate; ?></td>
                                          <td><?php echo $v->wrk_name; ?></td>
                                          <td><?php echo $v->cal_activity; ?></td>
                                        </tr>
                                        <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                   <script>
                                $('#ChooseYear').change(function() {
                                	var year = document.getElementById('ChooseYear').value;
                                        $.ajax({
                                            url: "<?php echo site_url('PDM/calendar_show/refresh_cal');?>/"+year,
                                            type: 'POST',
                                            success: function(response){
                                                $('#ShowContent').html(response);
                                                $('#ShowContent').hide().fadeIn(300);
                                            }
                                        })
                                });      
                    </script>
                        