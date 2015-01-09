						<div class="grid_3_center">
                        	<div class="da-panel collapsible">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                    </span>
                                </div>
                                <div class="da-panel-content">
                                    <table id="da-ex-datatable-default" class="da-table">
                                        <thead>
                                            <tr>
                                                <!--<th>NO.</th>-->
												<th>ฟอร์มเสนอโครงงาน</th>
                                                <th>รหัสนิสิต</th>
                                                <th>รหัสอาจารย์ที่ปรึกษา</th>
												<th>Menu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                             <?php
								if(count($rs)==0)
								{
									echo"<tr><td colspan='10' align='center'>--nodata--</td></tr>";
								}
								else
								{
								$no=1;
								foreach($rs as $r)
								{
									echo"<tr>";
									//echo"<td align='center'>$no</td>";
									//echo"<td>".$r['user_id']."</td>";
									echo"<td>".$r['frm1_id']."</td>";
									echo"<td>".$r['std_id']."</td>";	
									echo"<td>".$r['adv_id']."</td>";
									//echo"<td>".$r['frm1_nameen']."</td>";
									//echo"<td>".$r['proj_id']."</td>";
									/*$sta = $r['proj_id'];
									if ($sta==0){
										echo "<td>รอผล</td>";
									}else if ($sta==10){
										echo "<td>ผ่าน</td>";
									}else if ($sta==20){
										echo "<td>ไมผ่าน</td>";
									}
									echo"<td>".$r['frm1_subdate']."</td>";
									echo"<td>".$r['frm1_assigndate']."</td>";*/
									echo '<td><a href="edit.php?stu_id=' . $r['std_id'] . '">Edit</a></td>';
									//echo"<td align='center'>";
									echo"</td>";
									echo"</tr>";
									$no++;
								}
									//while($r=mysql_fetch_array($rs))
									//{
									//}
								}
	?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
