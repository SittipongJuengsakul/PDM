            <!-- ดูปฎิทินโครงงาน -->                
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
                                          <td><?php echo $v->cal_sent; ?></td>
                                          <td><?php echo $v->cal_activity; ?></td>
                                        </tr>
                                        <?php } ?>
                                </table>