﻿<div>
	<div class="alert"><strong>تعديل المرتب</strong></div>
	<?php
		require_once("session.php"); //جلب بيانات الجلسة والكويكز
		require_once("../db/db.php"); // الأتصال بقاعدة البيانات
		$id = $_SESSION['id']=$_GET['id'];
		$results = $mysqli->query("SELECT * 
										FROM job_salary
										WHERE job_salary.salary_id='$id'")or die($mysqli->error());
		if($results->num_rows != 1) {
		die("دخول خاطئ");
		}
		$rows = $results->fetch_object();
		$results->free_result();
		?>		
	<div class="modal-body">
		<form name="form2"  accept-charset="UTF-8"  action="edit_salary.php" method="POST" >
			<table class="iteminli" >
				<tr>
					<td>
						<label class="control-label" for="salary_name">
							المرتب
							<span  class="req">*</span>
						</label>
					</td>
					<td>
					<input id="salary_name" name="salary_name" type="text" value="<?php echo $rows->salary_name; ?>"  maxlength="99"  placeholder="المرتب" required  /></td>
			
					<td></td>
					<td>
					
					</td>
				</tr>
							
			</table>

			<div class ="btninsert">
				<input name="insert_cert" type="submit" value="حفظ" class="btn btn-info" /> 
				<a href='javascript:void(0);' onclick='jQuery("#facebox_overlay").click();' class="btn btn-danger ">إلغاء</a>
			</div>
		</form>
		
	</div>
</div>

<?php
$mysqli->close();
?>