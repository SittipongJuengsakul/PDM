                                        <?php echo $nav;
                                        echo $sidebar;
                                        ?>
                                        <div id="show_content">
                                        <div class="grid_3">
                                        <div class="da-panel-widget pdm-content">
                                        <h1>รายงานความก้าวหน้า
                                        <?php foreach($form01_data as $chk):
										if($chk->proj_id == 9){
										?>
                                        <button id="AddProgess" class="da-button gray" style="float:right">เพิ่มความก้าวหน้า</button>
                                        <?php }
										endforeach;
										?>
                                        </h1>
                                        <hr>
                                        <table  class="da-table">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center">ครั้งที่</th>
                                                <th style="text-align:center">กิจกรรมที่กำลังศึกษา</th>
                                                <th style="text-align:center;width:50">ปัญหา</th>
                                                <th style="text-align:center">ผลการอนุมัติจากอาจารย์ที่ปรึกษา</th>
                                                <th style="text-align:center">เพิ่มเติม</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(count($progess_data)==0) { ?>
                                        <tr>
                                        <td colspan="5" style="text-align:center">ไม่มีข้อมูลรายงานความก้าวหน้า</td>
                                        </tr>
                                        <?php }
                                        else{
                                        $i = 1;
                                        foreach ($progess_data as $pgs_data):
                                        ?>
                                        <tr>
                                        <td style="text-align:center;"><?php echo $i;?></td>
                                        <td style="text-align:center;"><?php echo $pgs_data->pgs_report;?></td>
                                        <td style="text-align:center;"><?php echo $pgs_data->pgs_problem;?></td>
                                        <td style="text-align:center;"><?php $status = $pgs_data->pgs_status;
                                                                            if($status==0||$status==20){
                                                                            echo "รอการตรวจสอบ";
                                                                            }
                                                                            else if($status==10){
                                                                            echo "ได้รับการตรวจสอบแล้ว";
                                                                            }
                                                                            ?></td>
                                        <td >
                                        คลิก
                                        </td>
                                        </tr>
                                        <?php $i++;endforeach;} ?>
                                        </tbody>
                                  </table>
                            </div>
                        </div>
                        </div>
                         <script>
                                $('#AddProgess').click(function(){
                                   
                                        $.ajax({
                                            url: "<?php echo site_url('PDM/progess_project_std/addProgress');?>",
                                            type: 'POST',
                                            success: function(response){
                                                $('#show_content').html(response);
                                                $("#show_content").hide().fadeIn(300);
                                            }
                                        })
                                    });
                        </script>