/*
	author: istockphp.com
*/

jQuery(function($) {
	var val_holder;
	$("form input[name='insert_exp']").click(function() { // triggred click 
		var val_holder=0;
		/************** قيم الفورم الذي سنقوم بتحقق من بياناته **************/
		var exp_comp 		= jQuery.trim($("form input[name='exp_comp']").val()); // first name field
		var dom_id 		= jQuery.trim($("form select[name='dom_id']").val()); // last name field
		var exp_name 			= jQuery.trim($("form input[name='exp_name']").val()); // first name field
		var start_date_y		= jQuery.trim($("form select[name='start_date_y']").val()); // first name 
		var end_date_y 		= jQuery.trim($("form select[name='end_date_y']").val()); // first name field
		var start_date_m		= jQuery.trim($("form select[name='start_date_m']").val()); // first name 
		var end_date_m 		= jQuery.trim($("form select[name='end_date_m']").val()); // first name field
	

		
		if(exp_comp == "") {
			$("span.exp_comp_val").html("يجب تعبئة الحقل . ");
			val_holder = 1;
			}
			else{
			$("span.exp_comp_val").html("");
			}
		 
		 if(dom_id == '0') {
			$("span.dom_id_val").html("يجب أختيار قيمة .");
			val_holder = 1;
			}
			else{
			$("span.dom_id_val").html("");
			}
	
		 if(exp_name == "") {
			$("span.exp_name_val").html("يجب تعبئة الحقل .");
			val_holder = 1;
			}
			else{
			$("span.exp_name_val").html("");}
			
			if ((start_date_m == "0")|| (end_date_m =="0") || (end_date_y =="0") || (start_date_y =="0")){
			$("span.start_date_val").html("يجب تعبئة الحقل . ");
			val_holder = 1;
			}else if((start_date_y > end_date_y) && (end_date_y != 1) ){
			$("span.start_date_val").html("يجب ان يكون تاريخ الأنتهاء أكبر من تاريخ البدء . ");
			val_holder = 1;
			}else if((start_date_y == end_date_y) && (start_date_m >= end_date_m) ){
			$("span.start_date_val").html("يجب ان يكون تاريخ الأنتهاء أكبر من تاريخ البدء . ");
			val_holder = 1;
			}
			else{
			$("span.start_date_val").html("");
			}
			
			
	
		if(val_holder == 1) {
			return false;
		}  
		/************** end: email exist function and etc. **************/
	}); // click end
}); // jquery end