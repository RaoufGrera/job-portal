﻿<div>
	<div class="alert  "><strong>أضافة لغة جديدة</strong></div>
		<?php
		require_once("session.php"); //جلب بيانات الجلسة والكويكز
		require_once("../db/db.php"); // الأتصال بقاعدة البيانات
		?>			
		<div class="modal-body">
			<form  name="form2"  accept-charset="UTF-8"  action="insert_lang.php" method="POST" >
				<table class="iteminli">
					<tr>
						<td>
							<label class="control-label" for="lang_id">
								اللغة
								<span  class="req">*</span>
							</label>
						</td>
						<td>
							<select id="lang_id" name="lang_id" > 
							<option value="" selected="selected">
							اللغة
							</option>
							<?php
						
							$rs = $mysqli->query("SELECT lang_id,lang_name
																	FROM job_lang
																	WHERE lang_id NOT
																	IN (

																	SELECT lang_id
																	FROM job_lang_seeker
																	WHERE user_id ='$txt_user_id')")or die($mysqli->error());
							while ($row =$rs->fetch_object()){
							echo "<option ";
							echo "value='".$row->lang_id."'>".$row->lang_name."</option>\n";
							}
							$rs->free_result();
						
							?>
							</select>
						</td>
					<td></td>
						<td>
						<span class="lang_id_val validation"></span>
						</td>
					</tr>
					
					
					<tr class="iteminli">
						<td>
							<label class="control-label" for="level_id">
								المستوي
								<span  class="req">*</span>
							</label>
						</td>
						<td>
							<select id="level_id" name="level_id" > 
							<option value="" selected="selected">
							المستوي
							</option>
							<?php
							$rs = $mysqli->query("SELECT level_name,level_id FROM job_level")or die($mysqli->error());
							while ($row =$rs->fetch_object()){
							echo "<option ";
							echo "value=\"$row->level_id\">$row->level_name</option>\n";
							}
							$rs->free_result();
							$mysqli->close();
							?>
							</select>
						</td>
					<td>
		
					</td>
						<td>
						<span class="level_val validation"></span>
						</td>
					</tr>
											
				</table>

					<div class ="btninsert">
				<input name="insert_lang" type="submit" value="حفظ" class="btn btn-info"/> 
				<a href='javascript:void(0);' onclick='jQuery("#facebox_overlay").click();' class="btn btn-danger ">إلغاء</a>
				</div>
		
				
				 </form>
			
					</div>
  
    </div>
	<script type="text/javascript" src="../js/script_lang.js"></script>