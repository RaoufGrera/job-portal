﻿<div>
	<div class="alert"><strong>أضافة شهادة جديدة</strong></div>
	<?php
	require_once("session.php"); //جلب بيانات الجلسة والكويكز
	require_once("../db/db.php"); // الأتصال بقاعدة البيانات
	?>
	<div class="modal-body">
		<form name="form2"  accept-charset="UTF-8"  action="insert_cert.php" method="POST" >
			<table class="iteminli" >
				<tr>
					<td>
						<label class="control-label" for="cert_name">
							الشهادة
							<span  class="req">*</span>
						</label>
					</td>
					<td>
					<input id="cert_name" name="cert_name" type="text"  maxlength="99"  placeholder="اسم المهارة"  />
					</td>
					<td></td>
					<td>
					<span class="cert_name_val validation"></span>
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
<script type="text/javascript" src="../js/script_skilles.js"  ></script>