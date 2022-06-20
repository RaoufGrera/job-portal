﻿<?php
require_once("session.php"); //جلب بيانات الجلسة والكويكز
/*
# 
#التأكد من ان القيم تم أرسالها وكذالك التأكد من ان البيانات تحتوي علي قيم 
#
*/

if (!isset	($_POST['cert_name']) || 
	empty	($_POST["cert_name"])) {
		die('يجب تعبئة كل الحقول المطلوبة');
	}	
require_once("../db/db.php"); // الأتصال بقاعدة البيانات

/*
#دالة safe_input 
#طريقة العمل : تقوم بأستقبال قيمة لتأمينها ومن ثم أرجاع القيمة بعد التأمين
#الوظيفة : تقوم بتأمين المدخلات أي حماية الموقع من اي عمليات حقن تعليمات الاستعلام البنيوية 
#
#SQL INJECTION
#
*/

$cert_name		=	safe_input($_POST['cert_name']);


	$insert_cert = $mysqli->query("INSERT INTO `job_cert`(`cert_name`,`user_id`)
						VALUE ('$cert_name','$txt_user_id')"); 

if(!($insert_cert)){
die("حدث خطاء أثناء تحديث البيانات");
} 
else{
header("location: profile.php#cert");
}
$mysqli->close();
?>


