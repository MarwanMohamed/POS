$(window).load(function() {
		// Animate loader off screen
		//$(".se-pre-con").fadeOut("slow");
 

	});
// $(document).keydown(function(e){

//     if(e.keyCode==123){
//     return false;
//    }
 
// });

 

// $(document).on("contextmenu",function(e){        
//    e.preventDefault();
// });


$(document).ready(function(){
 

 $('.confirm').click(function(){

return  confirm('Are you sure ?');


});

// $(document).on("click","input",function(){
// 	 $(this).select();
// 	});

// 	$(".addNews form .imag_news ul li input").on('change',function(){

// 	    var input=$(this);
// 	    var input_val=input.val();//get the value of input


// 	    var extension=input_val.substr(input_val.lastIndexOf(".")+1);//to get tha extension 

// 	    var Allow_extension=['gif','GIF','jpg',"JPG","PNG","png","jpeg"];   //allow extension  

// 	    if (jQuery.inArray(extension,Allow_extension)>-1) 

// 	    {  
// 	        if (input.context.files && input.context.files[0]) 
// 	           {
// 	             var reader= new FileReader();

// 	             reader.onloadend=function(data){

// 	                input.parent().children(".img").html("<img class='ada' src='"+data.target.result+"'>");


// 	                  input.addClass('add-one');
// 	                  input.parent().css({"border":"0"});

// 	                  input.parent().children("span").css({"display":"block"})


	 


// 	              }
// 	            reader.readAsDataURL(input.context.files[0]);
// 	           } 

// 	      input.css({"pointer-events":"none"});
// 	     input.parent().css({"cursor":"not-allowed"})
// 	    }
// 	    else{
// 		   // $(".add_remove_photo div span").text("Invalid file extension allowed: jpg,jpeg, gif, png Ok").fadeIn(1000).delay(4000).fadeOut(1000);
// 		   //    input.val('');
// 		   //    input.css({"pointer-events":"auto"});
// 		   alert("Invalid file extension allowed: jpg,jpeg, gif, png Ok");

// 	    }
	  



//  });

	// $(".addNews form ul li span").click(function(){
 //     $(this).parent().children("input").val('').css({"border":"1px solid #ccc"});     
 
 //     $(this).parent().children(".img").html(""); 
 //     $(this).parent().children("span").css({"display":"none"}); 
     
 //     $(this).parent().children("input").css({"pointer-events":"auto"});
	// })
 
// $(".error").delay(2000).fadeOut(1000)


// validate forems news_c.php

var error_ar=[];
 
 
 $(".addNews form .title input").on("blur",function(){
 	var val=$(this).val();
 	var length=val.length;
 	var section=$(".addNews form .news_c_click");
 	var place_err=$(".addNews form .titl_err");
 	var the_err="<div class='error alert alert-danger col-xs-12 col-sm-12 col-md-12 col-lg-12'>العنوان يجب ان يكون اكثر من 5 احرف</div>";
    check_form(length,5,section,place_err,the_err,"title");
  
 });

  $(".addNews form .desc textarea").on("blur",function(){

 	var val=$(this).val();
 	var length=val.length;
 	var section=$(".addNews form .news_c_click");
 	var place_err=$(".addNews form .desc_err");
 	var the_err="<div class='error alert alert-danger col-xs-12 col-sm-12 col-md-12 col-lg-12'>الوصف يجب ان يكون اكثر من 30 حرف</div>";
    check_form(length,30,section,place_err,the_err,"desc");
  
 });
 
function check_form(length,max_length,section,place_err,the_err,this_f){
 	  if(length<max_length){
	  	
		 place_err.html(the_err);
		 error_ar[this_f]='no';
		  preven_def(section,false);
		  
	    
	   }else{
	      
	       place_err.children(".error").fadeOut(1000);
	      error_ar[this_f]='yes';
	       preven_def(section,true);
	    
	    }
}

 function preven_def(section,retuen_q){

 		                if (retuen_q&&(error_ar['title']=='yes' || error_ar['desc']=='yes')) {

 		                	$(section).unbind('click');
 		                }else{

 		                	$(section).on("click",function(){
 		                	   return false })
 		                }
 	               
      

 }
 

 



function ajax_rq(data,url,type,place){

	   $.ajax({
     	url    : url,
     	type   : type,
     	data   : data,
     	success:function(get_data){
                          $(place).html(get_data);
     	        },
     	cashe:false,        
     });
}


 

 

//start define_type
var i=1;  
var apend_h_1=' <div data-toggle="buttons" class="item_nnn col-xs-12"><div data-toggle="buttons"></div>  <label class="btn btn-default col-xs-12 col-md-3 pull-right select_s_c">';
var append_h_3='</label><div class="col-xs-12 col-md-3 type_and_num"><label>العدد المفصل:</label><input  type="text" class="" name="details_num[]" placeholder="العدد المفصل"  ></div>';
var apend_h_4='<div class="col-xs-12 col-md-4 type_and_num"><label>نوع الوحدة :</label><select class="  btn" name="type_[]"><option class="" value="0">----------</option><option class="" value="كرتونة">كرتونة</option><option class="" value="شوال">شوال</option><option class="" value="كيلو">كيلو</option></select></div><div><span class="add_more_def_type col-xs-12 col-md-1 btn btn-success glyphicon glyphicon-plus"></span><span class="delete_more_def_type col-xs-12 col-md-1 btn btn-danger glyphicon glyphicon-minus "></span></div></div> ';
var append_5='';
$('.subcat_m .add_in_cat .add_n_f').click(function(){  
   i++;  
 
   $('.subcat_m .add_in_cat').append('<div id="row_add_z'+i+'" class="input_name_pr_add col-xs-12"><input type="text" name="name[]" placeholder="اسم الصنف" class="col-xs-12 col-md-10 pull-right   name_list" /><button type="button" name="remove" id="'+i+'" class="col-xs-12 col-md-1 btn btn-danger btn_remove glyphicon glyphicon-remove"></button></div><br>');  
});  



$(document).on('click', '.btn_remove', function(){  

   var button_id = $(this).attr("id");   
   $('#row_add_z'+button_id+'').remove();  
});  
 

$(".subcat_m .done_a").on("click",function(){

   var main_cat_value=$(".subcat_m .main_cat select").val();
   var sup_cat_value=$(".subcat_m .sub_cat select").val();
   var input_0_value=$(".subcat_m .add_in_cat input").val();
 

 

    if (main_cat_value == -1||sup_cat_value == -1||input_0_value.length<2) {
				$(".subcat_m ._alert").html("يجب اكمال البيانات");//set error message to it
				$(".subcat_m ._alert").fadeIn(1000).delay(1000).fadeOut(1000); 

		  
      }else{
			$(".subcat_m").fadeOut(100)
			x=$('.add_in_cat').find("input")

			for (var i =0; i<=x.length-1; i++) {
					if (x[i].value !=''){
					var apend_h_2='<input type="checkbox" name="name_s_c[]" autocomplete="off" value="'+x[i].value+'"><span class="glyphicon glyphicon-ok glyphicon-lg"></span><p>'+x[i].value+'</p>';
					$(apend_h_1+apend_h_2+append_h_3+apend_h_4+append_5).appendTo(".pop_up_chick_t .items");
					}

					}
			var h_v=$('.supp_edit_form .select_main_cat').val();
			var in_hidden="<div class='dis'><span><input type='hidden' name='main_cat' value='"+h_v+"'></span><span><input type='hidden' name='sub_cat' value='"+sup_cat_value+"'></span><div>";
			$(".pop_up_chick_t .items").append(in_hidden);
			$('.form_check_add_subcat .pop_up_chick_t').delay(500).fadeIn(1000);
      }
          
  
 
  
});

////////////////////////
//////////////////////////define_type
$(document).on("click",".items .add_more_def_type",function(){
	var my_dev=$(this).parents(".item_nnn").clone().css({"background-color":"rgb(234, 234, 234)","display":"none"});
 
 my_dev.children(".type_and_num").fadeIn(1000) 
 $(this).parents(".item_nnn").after(my_dev);
 my_dev.fadeIn(1000)
  

});

$(document).on("click",".items .delete_more_def_type ",function(){
 $(this).parents(".item_nnn").fadeOut(1000,function(){$(this).remove()});


 
});

//checkAll  اضافة الاصناف
$(".form_check_add_subcat .items .checkAll").click(function () {   


     var element=$(".form_check_add_subcat .items .item_nnn .select_s_c ");

      if(this.checked){
      	$('.form_check_add_subcat .items input:checkbox').prop('checked',this.checked);
      	  element.addClass("active")
      
      }else{  
      	element.removeClass("active");
          
      }
     

      


    
 });

$(document).on("mousedown",".form_check_add_subcat .items .item_nnn .select_s_c",function(){

          var element=$(this).children("input:checkbox");
			if(element.attr("active")){
				 element.removeAttr("active");
			     
		 
			}else{  			
	         element.attr("active"," ");
			}
	     
	     
	 });

//getall sub cat by main cat
//to get the value of  select box and send it to page to get the subcat
$(".subcat_m .main_cat select").on("change",function(){
	var value_selecy=$(this).val();
   
	 if (value_selecy != -1) {
				var data={main_cat:value_selecy}          
				$.ajax({  
				url:"check_type.php",  
				method:"POST",  
				data:data,  
				success:function(data)  
				{   
                         if (data==0) {
							$(".subcat_m ._alert").html("حدث خطأ يرجى المحاولة مرة أخرى :(");//set error message to it
							$(".subcat_m ._alert").fadeIn(1000).delay(2000).fadeOut(1000); 
							$(".subcat_m .sub_cat").html("");//to remove the 
                         }else{

							$(".subcat_m .sub_cat").fadeOut(1000);//to fade out it befor get indo
							$(".subcat_m .sub_cat").html(data);
							$(".subcat_m .sub_cat").fadeIn(1000);//to fade out it befor get indo
                         }

				}  	}); 
	 

           }else{
           	$(".subcat_m ._alert").html("يجب تحديد الفئة الرئيسية للصنف");//set error message to it
           	$(".subcat_m ._alert").fadeIn(1000).delay(2000).fadeOut(1000); 
           	$(".subcat_m .sub_cat").html("");//to remove the 

           }

});


 


/*
**start co_bought
**/

$(".add_new_bill .select_type .selectpicker").on("change",function(){
 
	  var this_val=$(this).val();
	  if (this_val!="تاجر جملة" && this_val != "شركة") {
	  	$(".add_new_bill .d_err").text("يجب اختيار نوع المورد");
	  	$(".add_new_bill .d_err").fadeIn(1000).delay(2000).fadeOut(1000);
	  	$('.add_new_bill .select_type_name_c').html("");
	  	$('.add_new_bill .select_type_name_c').fadeOut(10);
	  }else{
	  	      var data={define_type:this_val}          
				$.ajax({  
				url:"check_type.php",  
				method:"POST",  
				data:data,  
				success:function(data)  
				{  
				   $('.add_new_bill .select_type_name_c').fadeOut(1000)	
				   $('.add_new_bill .select_type_name_c').html(data)
				   $('.add_new_bill .select_type_name_c').fadeIn(1000)
				     
				}  

				});  
			 
	  }

});

//to get sub cat from main cat
$(".add_new_bill .select_main_c .selectpicker").on("change",function(){

	   var this_val=$(this).val();
      
	  if (this_val<="0") {
	  	$(".add_new_bill .d_err").text("يجب اختيار الفئات الرئيسية للصنف");
	  	$(".add_new_bill .d_err").fadeIn(1000).delay(2000).fadeOut(1000);
	  }else{
 
	  	      var data={main_cat:this_val}          
				$.ajax({  
				url:"check_type.php",  
				method:"POST",  
				data:data,  
				success:function(data)  
				{  
				   $('.add_new_bill .select_type_subcat').fadeOut(1000)	
				   $('.add_new_bill .select_type_subcat').html(data)
				   $('.add_new_bill .select_type_subcat').fadeIn(1000)
				     
				}  

				});  
			 
	  }

});

var mydev_form_add_bill=$(".add_new_bill .add_bill_body")//copy the bill_body to add it after add bill
//to get define_type from sub cat (add)->co_bought
$(document).on("change",".add_new_bill .add_bill_body .select_type_subcat .selectpicker",function(){

	   var this_val=$(this).val();
	  if (this_val<="0") {
	  	$(".add_new_bill .d_err").text("يجب اختيار الفئات الفرعية  للصنف");
	  	$(".add_new_bill .d_err").fadeIn(1000).delay(2000).fadeOut(1000);
	  }else{
			var data={d_f:this_val}          
			$.ajax({  
			url:"check_type.php",  
			method:"POST",  
			data:data,  
			success:function(data)  
			{   
			      $(".supp_edit_form .type_sup_cat").fadeOut(1000)
			     $('.add_new_bill .popup_out .popup  .da').html(data)
			     $(".supp_edit_form .type_sup_cat").fadeIn(1000)

			     
			}  

			});
              
	  } 

});

//get define_type by  subcat
$(document).on("change",".add_new_bill .select_main_c select",function(){
	var this_val=$(this).val();//get th value of this  select
	 
	    if (this_val<="0") {
		  	$(".add_new_bill .d_err").text("يجب اختيار الفئات الرئيسية للصنف");
		  	$(".add_new_bill .d_err").fadeIn(1000).delay(2000).fadeOut(1000);
	     }
});
//onchange سم المورد  fadeout main cat
$(document).on("change",".add_new_bill .select_type_name_c select",function(){
       var this_val=$(this).val();//get th value of this  select
	    if (this_val==1) {
		  	$(".add_new_bill .d_err").text("يجب اختيار الفئات الرئيسية للصنف");
		  	$(".add_new_bill .d_err").fadeIn(1000).delay(2000).fadeOut(1000);
	     }else{// fadein sub cat
            $(".add_new_bill .select_main_c").fadeIn(1000);
	      }

});
/////////////popup

$(document).on("click",'.add_new_bill .type_sup_cat  .p_type_sup_cat',function(){
	  $('.add_new_bill .popup_out').fadeToggle(1000)
});
$(document).on("click",'.add_new_bill .popup_out  .popup .da table tbody tr',function(){
 
		var value=$(this).find("input").val();
		var text=$(this).find('.name').text();
	    $('.add_new_bill .type_sup_cat  .p_type_sup_cat').html(text)
        $('.add_new_bill .type_sup_cat .type_sup_cat_in').html("<input type='hidden' value='"+value+"' name='type_s_cat'>");
        $(".supp_edit_form .num_per_unit").fadeIn(1000)
        $('.add_new_bill .popup_out').fadeOut(100)
});

$(document).on("click",'.add_new_bill .type_sup_cat_c  .p_type_sup_cat',function(){
	
	  $('.add_new_bill .popup_out').fadeToggle(1000);
 
});
$(document).on("click",'.add_new_bill .popup_out  .popup .da table tbody tr , .add_new_bill .popup_out  .popup ',function(){
		var value=$(this).find("input").val();
		var text=$(this).find('.name').text();
	    $('.add_new_bill .type_sup_cat_c  .p_type_sup_cat').html(text)
        $('.add_new_bill .type_sup_cat_c .type_sup_cat_in').html("<input type='hidden' value='"+value+"' name='type_s_cat'>");
        $(".supp_edit_form .num_per_unit").fadeIn(1000)
        $('.add_new_bill .popup_out').fadeOut(100)
});

///////////end popup



 //////////////// get the cost

 $(".supp_edit_form .num_per_unit input").on("keyup",function(){ 
	var value=$(this).val();
	var cost_per_nu=$(".supp_edit_form .cost_per_unit input").val();
	if (isNaN(value)) {
           $(".pop_up_alert ").fadeIn(100);
			$(".pop_up_alert .upper .content h3").html("العدد");
			$(".pop_up_alert .upper .content p").html("العدد بالوحدة يجب ان يكون رقم");
			$(".pop_up_alert .upper").fadeIn(100);
             $(".cost_per_unit").fadeOut(1000) 
       }else{
       	 if(cost_per_nu != "" && value !=''){
            $(".supp_edit_form .total_cost input").val(value*cost_per_nu)
       	 }
       	 $(".cost_per_unit").fadeIn(1000)
       } 
});

 

 $(".supp_edit_form .cost_per_unit input").on("keyup",function(){
 
       var value=$(this).val();
       var value_num=$(".supp_edit_form .num_per_unit input").val();
        
       if (!isNaN(value)) {
       	        if(value_num == ""){
                     $(".pop_up_alert ").fadeIn(100);
					$(".pop_up_alert .upper .content h3").html("العدد");
					$(".pop_up_alert .upper .content p").html("يجب كتابة العدد بالوحدة");
					$(".pop_up_alert .upper").fadeIn(100);
                  

                    $(this).val('');

                    $(".cost_per_unit").fadeOut(1000) 
                    $(".total_cost").fadeOut(1000);
                    $(".add_new_bill .r_cost").fadeOut(1000);
                    $(".add_new_bill .r_cost").fadeOut(1000);
       	        }else{
                   $(".total_cost").fadeIn(1000);
             
           
                   $(".add_new_bill .nots").fadeIn(1000);

                   
 
                   $(".total_cost input").val(value*value_num); 
       	        }          
       }else{
         $(".pop_up_alert ").fadeIn(100);
		$(".pop_up_alert .upper .content h3").html("السعر");
		$(".pop_up_alert .upper .content p").html("السعر يجب ان يكون رقم");
		$(".pop_up_alert .upper").fadeIn(100);
       }
});
 
$(".supp_edit_form .total_cost input").on("keyup",function(){
		var value=$(".supp_edit_form .cost_per_unit input").val();
		var value_num=$(".supp_edit_form .num_per_unit input").val();
		var this_val=$(this).val()
		if (!isNaN(value)) {
                   $(".add_new_bill .r_cost input").val(this_val-value*value_num);
       	                 
       }else{
           $(".pop_up_alert ").fadeIn(100);
		$(".pop_up_alert .upper .content h3").html("السعر");
		$(".pop_up_alert .upper .content p").html("السعر يجب ان يكون رقم");
		$(".pop_up_alert .upper").fadeIn(100);
       }

});
// $(".supp_edit_form .tsdedat input").on("keyup ",function(){
// 	    var value=$(".supp_edit_form .total_cost input").val();
// 		var this_val=$(this).val()
// 		if (!isNaN(value)) {
//                    $(".add_new_bill .r_cost input").val(this_val-value);
       	                 
//        }else{
//        	alert("السعر يجب ان يكون رقم");
//        }
// });

// $(".supp_edit_form .desc_cost input").bind("blur",function(){
// 		var value_total=$(".supp_edit_form .total_cost input").val();
// 		var value=$(".supp_edit_form .cost_per_unit input").val();
// 		var value_num=$(".supp_edit_form .num_per_unit input").val();
// 		var this_val=$(this).val();

// 		if(this_val > 0 && !isNaN(value)){
		 
// 			var desc_=(this_val*value*value_num)/100
// 			var final_desc=value*value_num-desc_;
//            $(".add_new_bill .total_cost input").val(final_desc); 
//             var new_v=$(".supp_edit_form .total_cost input").val();
//             var tasdedat=$(".supp_edit_form .tsdedat input").val();
//            $(".add_new_bill .r_cost input").val(tasdedat-new_v);	                 
//        }else{
               
//             var tasdedat=$(".supp_edit_form .tsdedat input").val();
//             $(".add_new_bill .r_cost input").val(tasdedat-value_total);
//              $(".total_cost input").val(value*value_num); 
//        }

// });

 ///////////endof get the cost

//check the filed of bill co_bought and make tabel to send

$(document).on('mousedown',".add_new_bill .add_bill_body .done_c",function(){


    var inputs=$(".add_new_bill .add_bill_body :input").find("input");
    var input_val_totale=$('.calc_total_c .total_cost_d input').val();
 
    var input_1= inputs.prevObject[0].value;
    var input_2= inputs.prevObject[1].value;
    var input_3= inputs.prevObject[2].value;
    var input_4= inputs.prevObject[3].value;
    var input_5= inputs.prevObject[4].value;
    var input_6= inputs.prevObject[5].value;
    var input_7= inputs.prevObject[6].value;
    var input_8= inputs.prevObject[7].value;
    var input_9= inputs.prevObject[8].value;

   if (input_1<=0||input_2<=0||input_3<=0||input_4<=0||input_5<=0||input_6<=0||input_7<=0||input_8<=0) {
 
   		$(".add_new_bill .d_err").text("يجب اكمال البيانات");
	  	$(".add_new_bill .d_err").fadeIn(1000).delay(2000).fadeOut(1000);
   }else if(isNaN(input_3) || isNaN(input_4)||isNaN(input_5)||isNaN(input_6) ||isNaN(input_7)||isNaN(input_8)){
          
        $(".add_new_bill .d_err2").text("من فضلك اكتب ارقام فى الخانات");
	  	$(".add_new_bill .d_err2").fadeIn(1000).delay(2000).fadeOut(1000);
     
   }else{



        $('form_s_add_new_bill').fadeIn(1000);
		var type_supplier="<input type='hidden' name='type_supplier[]' value='"+inputs.prevObject[0].value+"'>";//نوع المورد 
		var name_supplier="<input type='hidden' name='name_supplier[]' value='"+inputs.prevObject[1].selectedOptions[0].outerText+"'>";//اسم المورد 
		var man_cat="<input type='hidden' name='main_cat[]' value='"+inputs.prevObject[2].value+"'>";//الفئات الرئيسية للصنف
		var sub_cat="<input type='hidden' name='sub_cat[]' value='"+inputs.prevObject[3].value+"'>";//لفئات الفرعية 
		var define_type="<input type='hidden' name='define_type[]' value='"+inputs.prevObject[4].value+"'>";//نوع الصنف
		var num_per_unit="<input type='hidden' name='num_per_unit[]' value='"+inputs.prevObject[5].value+"'>";//العدد بالوحدة
		var cost_per_unit="<input type='hidden' name='cost_per_unit[]' value='"+inputs.prevObject[6].value+"'>";//السعر بالوحدة
		var total_cost="<input type='hidden' name='t_c[]' value='"+inputs.prevObject[7].value+"'>";//اجمالى السعر
        var supplier_i="<input type='hidden' name='supplier_i[]' value='"+inputs.prevObject[1].value+"'>";//اسم المورد

		var notes="<input type='hidden' name='notes[]' value='"+inputs.prevObject[8].value+"'>";//الملاحظات



		var define_type_text=$('.add_new_bill .type_sup_cat  .p_type_sup_cat').text();
		var the_place=$('.form_s_add_new_bill table tbody');
		var info_bi="<tr><td>"+inputs.prevObject[0].value+"<span>"+type_supplier+"</span></td><td>"+inputs.prevObject[1].selectedOptions[0].outerText+"<span>"+name_supplier+"</span></td><td>"+define_type_text+"<span>"+define_type+"</span></td><td>"+inputs.prevObject[5].value+"<span>"+num_per_unit+"</span></td><td>"+inputs.prevObject[6].value+"<span>"+cost_per_unit+"</span></td><td class='main_num_delet_w'><span class='num_delet_w'>"+inputs.prevObject[7].value+"</span><span>"+total_cost+"</span> </td><td>"+inputs.prevObject[8].value+"<span>"+notes+"</span><span>"+supplier_i+"</span></td> <td><span class=' r_bi_a btn btn-danger btn_remove glyphicon glyphicon-remove'></span> </td> </tr>";
		the_place.append(info_bi)
		$('.form_s_add_new_bill').fadeIn(1000)
		$('.calc_total_c .total_cost_d input').val(parseInt(input_val_totale)+parseInt(inputs.prevObject[7].value))

             
		    //tsfer
	     $(".add_new_bill .add_bill_body .select_type  .selectpicker ").attr("disabled"," ");
	     $(".add_new_bill .add_bill_body .select_type_name_c  .selectpicker ").attr("disabled"," ");
 

		 inputs.prevObject[4].value=0;
		 inputs.prevObject[5].value=0;
		 inputs.prevObject[6].value=0;
		 inputs.prevObject[7].value=0;
		 $('.add_new_bill .type_sup_cat  .p_type_sup_cat').text("");
 
		 
   }








});
 
$(document).on("click",'.form_s_add_new_bill table tbody .r_bi_a',function(){

	 var input_val_totale=$('.calc_total_c .total_cost_d input').val();

     var num_=$(this).parents("tr").children(".main_num_delet_w"); 

     var new_num=num_.prevObject[0].cells[5].outerText;
   
 $('.calc_total_c .total_cost_d input').val(parseInt(input_val_totale)-parseInt(new_num))
 
	 $(this).parents("tr").fadeOut(1000,function(){$(this).remove();})
})

$(document).on('keyup','.calc_total_c .tsdedat input',function(){

	var input_val_totale=$('.calc_total_c .total_cost_d input').val();
 

	 $('.calc_total_c .elrased_ input').val($(this).val()-input_val_totale);

});

$(document).on("click",'.form_s_add_new_bill .done_c',function(){
 
  
  var input1_val=$('.calc_total_c .elrased_ input').val();
  var input1_va2=$('.calc_total_c .tsdedat input').val();

  if( isNaN(input1_va2)|| isNaN(input1_va2) ){

		$('.calc_total_c .elrased_err').text("يجب كتابة ارقام فقط فى التسديدات");
		$(".calc_total_c .elrased_err").fadeIn(1000).delay(2000).fadeOut(1000);
		$(this).val(0);
		return false;
		
  }
  else{
			$('.calc_total_c .total_cost_d input').removeAttr("disabled");
			$('.calc_total_c .elrased_ input').removeAttr("disabled");
			  
  } 
 

})
//end check


//distribution start
$(".dis_bution tbody input:hidden,.dis_bution tbody input:text").attr("disabled"," ")
$(".dis_bution  .checkall").on("click",function () {   
      
 
      if(this.checked){
      	$('.dis_bution   input:checkbox').prop('checked',this.checked);
        $(".dis_bution tbody input:hidden, .dis_bution tbody  input:text").removeAttr("disabled");
         
      }else{  
      $('.dis_bution   input:checkbox').prop('checked',this.checked);
      $(".dis_bution tbody input:hidden, .dis_bution tbody input:text").attr("disabled"," ")
          
      }
     
 });

$('.dis_bution tbody .cheak_child_box').on('click',function(){
   

   if(this.checked){
       $(this).parents("tr").find("input:hidden, input:text").removeAttr("disabled");
   }else{
      $(this).parents("tr").find("input:hidden,input:text").attr("disabled"," ");
   }
});

$('.dis_bution tbody .shop_input').on('blur',function(){
	 var val_input_pr=$(this).parents("tr").find(".number_per_unit input").val();
	 var val_input_2=$(this).parents("tr").find(".shop_input")

 

	 var shop_1=val_input_2[0].value;
	 var shop_2=val_input_2[1].value;
	 var shop_3=val_input_2[2].value;
	 var shop_4=val_input_2[3].value;
     
 

      if(parseInt(shop_1)>parseInt(val_input_pr) ||parseInt(shop_2)>parseInt(val_input_pr) ||parseInt(shop_3)>parseInt(val_input_pr) || parseInt(shop_4)>parseInt(val_input_pr) ){

            $(".pop_up_alert ").fadeIn(100);
            $(".pop_up_alert .upper .content h3").html("العدد");
			$(".pop_up_alert .upper .content p").html("عدد التوزيع  اكثر من المتاح");
			$(".pop_up_alert .upper").fadeIn(100);

  
           $(this).val(0)
      }
      if((parseInt(shop_1)+parseInt(shop_2)+parseInt(shop_3)+parseInt(shop_4))>val_input_pr  ){

               $(".pop_up_alert ").fadeIn(100);
      	    
            $(".pop_up_alert .upper .content h3").html("العدد");
			$(".pop_up_alert .upper .content p").html("عدد التوزيع  اكثر من المتاح");
			$(".pop_up_alert .upper").fadeIn(100);
           $(this).val(0)
      }
	 
});


$(document).on("click",".body_cat  .b_c  li",function(){

	   var this_val=$(this).children("input").val();

 
			var data={main_cat:this_val,do:'ul'}          
			$.ajax({  
			url:"check_type.php",  
			method:"POST",  
			data:data,  
			success:function(data)  
			{      

				  if(data.length<10){
						$('.body_cat .b_subcat').html("<div class='_alert  alert alert-danger'>لايوجد فئات فرعية</div>");
						$('.body_cat .b_define_type').html("")
						$(".body_cat .b_subcat").fadeIn(1000)
				  }else{
					 
						$('.body_cat .b_subcat').html(data)
						$(".body_cat .b_subcat").fadeIn(1000)
						$('.body_cat .b_define_type').html("")
				  }
			     

			     
			}  

			});
     

});
$(document).on("click",".body_cat .b_subcat li",function(){

	   var this_val=$(this).children("input").val();

 
			var data={d_f:this_val,do:'ul'}          
			$.ajax({  
			url:"check_type.php",  
			method:"POST",  
			data:data,  
			success:function(data)  
			{      

				  if(data.length<10){
						$('.body_cat .b_define_type').html("<div class='_alert  alert alert-danger'>لايوجد اصناف</div>")
						$(".body_cat .b_define_type").fadeIn(1000)
				  }else{
					 
						$('.body_cat .b_define_type').html(data)
						$(".body_cat .b_define_type").fadeIn(1000)
				  }
			     

			     
			}  

			});
     

});

$(document).on("click",".dis_cont .search_h ul .cat",function(){
	$('.dis_cont .body_cat').fadeIn(1000);
	$('.dis_cont .body_bill').fadeOut(1000);

});
$(document).on("click",".dis_cont .search_h ul .bill",function(){
	$('.dis_cont .body_bill').fadeIn(1000);
	$('.dis_cont .body_cat').fadeOut(10);

});

//dashboard.php
$(document).on('click',".right_side .row_main_cat ul li",function(){
	   var this_val=$(this).children("input").val();

 
			var data={main_cat:this_val,do:'ul'}          
			$.ajax({  
			url:"check_type.php",  
			method:"POST",  
			data:data,  
			success:function(data)  
			{      
                
				  if(data.length<46){

				 
						$('.pr_bill .row_sub_cat ').html("<div class='_alert  alert alert-danger'>لايوجد فئات فرعية</div>");
					
						$(".pr_bill .row_sub_cat ").fadeIn(1000).delay(100).fadeOut(1000);
						$('.pr_bill .right_side .define_type_body ').html(" ");
		   
                    $('.pr_bill .right_side .product_body').html(" "); 
				  }else{
					   
						$('.pr_bill  .row_sub_cat ').html(data)
						$(".pr_bill .row_sub_cat").fadeIn(1000);
					$('.pr_bill .right_side .define_type_body').html(" ");
		   
                    $('.pr_bill .right_side .product_body').html(" "); 
				  }
			     

			     
			}  

			});
});

$(document).on('click',".row_sub_cat .body_sub_cat ul li",function(){
	   var this_val=$(this).children("input").val();

 
			var data={d_f:this_val,do:'all_ul'}          
			$.ajax({  
			url:"check_type.php",  
			method:"POST",  
			data:data,  
			success:function(data)  
			{      
           
				  if(data.length<10){

						$('.pr_bill .right_side .define_type_body ').html("<div class='_alert  alert alert-danger'>لايوجد فئات فرعية</div>");
				 
						$(".pr_bill .right_side .define_type_body ").fadeIn(1000).delay(2000).fadeOut(1000);
						 $('.pr_bill .right_side .product_body').html(" "); 
				  }else if(data.length>10&&data.length<90){

                         $('.pr_bill .right_side .define_type_body ').html(data);
				  
						 $('.pr_bill .right_side .product_body').html(" "); 
				  }else{
				 	
						$('.pr_bill .right_side .define_type_body ').html(data)
					  
						 $('.pr_bill .right_side .product_body').html(" "); 
				  }
			     

			     
			}  

			});
});
 

$(document).on('click',".pr_bill .right_side .define_type_body ul li",function(){
	   var this_val_define_num=$(this).children("input").val();
	   var get="product";
 
 
			var data={define_type:this_val_define_num,get:get}          
			$.ajax({  
			url:"check_type.php",  
			method:"POST",  
			data:data,  
			success:function(data)  
			{      
                 
				  if(data.length<10){
						$('.pr_bill .right_side .product_body').html("<div class='_alert  alert alert-danger'>لايوجد فئات فرعية</div>");
				 
						$(".pr_bill .right_side .product_body").fadeIn(1000).delay(2000).fadeOut(1000)
				  }else if(data.length>10 && data.length<100){

                         $('.pr_bill .right_side .product_body').html(data);
				 
						$(".pr_bill .right_side .product_body").fadeIn(1000).delay(2000).fadeOut(1000)
				  }else{
					   
						$('.pr_bill .right_side .product_body').html(data)
						$(".pr_bill .right_side .product_body").fadeIn(1000)	 
				  }
			     

			     
			}  
 
			});
});

//
 
$(document).on("click",".left_side .items_s table tbody tr td .delete_row",function(){
   var print_row_class=$(this).parents('tr').attr('id');
   $(this).parents("tr").fadeOut(1000,function(){$(this).remove();});
   $("#print_aaa table tbody #"+print_row_class).fadeOut(1000,function(){$(this).remove();});
    var all_input=$(this).parents("tr").find("input");
    var totale=all_input[4].value;
    var input_val= $('.left_side .items_s .all_bill_c .totale_cost_bill input').val(); 
	$('.left_side .items_s .all_bill_c .totale_cost_bill input').val(input_val-totale);
	$(".left_side .items_s .all_bill_c .paied_bill input").val(input_val-totale);
	//////////////////////////////////////////////////////////////////////////////////

	$('#print_aaa .all_bill_c .totale_cost_bill span').text(input_val-totale);

	$('#print_aaa .all_bill_c .paied_bill span').text(input_val-totale);
}) 


$(document).on("click",".pr_bill .right_side .product_body .t_shop",function(){

	var name_snf=$(this).find(".name_snf").text();
    var all_input=$(this).find(".inp input");
    var this_id=$(this).attr('id');



 

	// for (var i = 0; i<get_sum_of_row_details_num.length; i++) {
	// total_details_num+=parseFloat(get_sum_of_row_details_num[i].value);
	// }
 //    if (parseFloat(total_cost)>=all_input[1].value || parseFloat(total_details_num) >= all_input[2].value) {
 //    	alert("لا يمكن الاضافة من هذا الصنف");
 //    	return false;
 //    }


 var get_sum_of_row_details_num=$(".left_side .items_s table tbody #"+this_id+" ")  

 


   if (get_sum_of_row_details_num.length>0) {

     var val_element=$(".left_side .items_s table tbody #"+this_id+" .num_per_unit input").val();

     if (parseFloat(val_element)>=parseFloat(all_input[1].value)) {
     	  $(".pop_up_alert ").fadeIn(100);
     	    $(".pop_up_alert .upper .content h3").html("االكمية");
			$(".pop_up_alert .upper .content p").html("لا يوجد كمية كافية");
			$(".pop_up_alert .upper").fadeIn(100);
     }else{
     	    var cost_per_unit_=$(".left_side .items_s table tbody #"+this_id+" .cost_per_unit input").val();
 
     	    $(".left_side .items_s table tbody #"+this_id+"  input[name='t_cost_per_one[]']").val(parseFloat(cost_per_unit_)*parseFloat(val_element));
     	    $(".left_side .items_s table tbody #"+this_id+" .num_per_unit input").val(parseFloat(val_element)+1);
             
			$(".left_side .items_s table tbody #"+this_id+" .cost_per_unit").fadeIn(500);
			$(".left_side .items_s table thead .cost_per_unit").fadeIn(500);
			$(".left_side .items_s table tbody #"+this_id+" .cost_per_unit input").removeAttr("disabled")
   
 
     }
    

 
   }else{
    var append_='<tr class="row1 " id="'+this_id+'">';
  
    append_+='<td class="name">'+name_snf+'</td>';
    append_+='<td class="num_per_unit"><input type="text" name="num_per_unit[]" value="0"></td>';
    append_+='<td class="cost_per_unit"><input type="text" name="cost_per_unit[]" value="0" disabled=""></td>';
    append_+='<td class="details_num"><input type="text" name="details_num[]" value="0"></td>';
    append_+='<td class="cost_details_num  "><input type="text" name="cost_details_num[]" value="0" disabled=""></td>';
    append_+='<td><input type="text" name="t_cost_per_one[]" value="0"></td>';
	append_+='<td><span class="delete_row glyphicon glyphicon-remove"></span></td>';
	append_+='<td class="d_n">';
	append_+='<input type="text" name="define_type[]" value="'+all_input[5].value+'">';

	append_+='<input type="text" name="cost_per_unit1[]" disabled=" ">';
	append_+='<input type="text" name="shop_id"  ></td>';
	append_+='<td class="d_n check">';
	append_+='<input type="hidden" class="num_per_unt" value="'+all_input[1].value+'" disabled="">';
	append_+='<input type="hidden" class="mian_details_num" value="'+all_input[2].value+'" > ';
	append_+='<input type="hidden" class="cost_per_unit" value="'+all_input[3].value+'" disabled=""> ';
	append_+='<input type="hidden" class="cost_per_details_unit" value="'+all_input[4].value+'"disabled="">';
	append_+='<input type="text" name="id_un[]" value="'+all_input[0].value+'">';///////////////////////////////////////////
	append_+='<input type="text"  value="'+all_input[6].value+'" disabled=" ">';
	append_+='<input type="text" name="user_saler" value="1" ></td> </tr>';

    $(".left_side .items_s table tbody").append(append_);

    // apent to print
   var append_2='<tr class="row1 " id="'+this_id+'">';
  
    append_2+='<td class="name">'+name_snf+'</td>';
    append_2+='<td class="num_per_unit"></td>';
    append_2+='<td class="cost_per_unit"></td>';
    append_2+='<td class="details_num"></td>';
    append_2+='<td class="cost_details_num  "></td>';
    append_2+='<td class="to_c"></td>';
 
	 

    $(".left_side #print_aaa table tbody").append(append_2);
    var all_input_inta=$('.left_side .items_s table tbody tr input');
    
  
  
    var get_sum_of_row=$(".left_side .items_s table tbody tr input[name='num_per_unit[]']");
		var total_cost=0;
		for (var i = 0; i<get_sum_of_row.length; i++) {
		total_cost+=parseFloat(get_sum_of_row[i].value);
		}
   }
 
 
   

 
  
}) 
function isFloat(x) { return !!(x % 1); }

$(document).on("keyup",".left_side .items_s table tbody tr   input",function(){
  
    var all_input_row=$(this).parents('tr').find("input");
    var print_row_class=$(this).parents('tr').attr('id');
    var this_val=$(this).val().trim();
   
    var input_per_p=all_input_row[2].value.trim();
    var num_per_unit_first_input=$(".left_side .items_s table tbody tr .num_per_unit input").val();
    var num_per_pieces_third_input=$(".left_side .items_s table tbody tr .details_num  input").val();
 
    var  orignal_numper_num_per_unit=all_input_row[8].value;//all available close unit 
    var  orignal_numper_num_per_pieces=all_input_row[9].value;// available open pieces 
     
    var  orignal_numper_num_detalis=all_input_row[13].value;//the orignal details number from define type t
    

    var  cost_per_unit=all_input_row[10].value;//s3r el krtona aw el shwal
    var  cost_per_detalis_unit=all_input_row[11].value;//s3r el krtona aw el shwal

    var get_allpieces_in_row=(parseFloat(all_input_row[0].value)*parseFloat(orignal_numper_num_detalis))+parseFloat(input_per_p);
    
    var get_avaliable_detalis_num=(orignal_numper_num_per_unit*orignal_numper_num_detalis)+parseFloat(orignal_numper_num_per_pieces);
 
    var get_the_unit_and_pieces=mode_(get_allpieces_in_row,orignal_numper_num_detalis);
    var change_func_to_pieces=(get_the_unit_and_pieces[0]*parseFloat(orignal_numper_num_detalis))+parseFloat(get_the_unit_and_pieces[1]);

   if (this_val.length>0) {

   	
    if(!isNaN(this_val)){
    	 
     var total_row=(parseFloat(all_input_row[2].value)* parseFloat(all_input_row[3].value) )+(parseFloat(all_input_row[1].value)* parseFloat(all_input_row[0].value));
    	

          if(change_func_to_pieces>get_avaliable_detalis_num){
            $(".pop_up_alert ").fadeIn(100);
          	$(".pop_up_alert .upper .content h3").html("االكمية");
			$(".pop_up_alert .upper .content p").html("الكمية اكثر من المتاح");
			$(".pop_up_alert .upper").fadeIn(100);
          	$(this).val(0);
          }

    	}else{
    		  $(".pop_up_alert ").fadeIn(100);
			$(".pop_up_alert .upper .content h3").html("شروط");
			$(".pop_up_alert .upper .content p").html("يجب كتابة ارقام فقط");
			$(".pop_up_alert .upper").fadeIn(100);
			$(this).val(0)
    	 
    	}  
   
       

  //show the cost per unit 
 
  if (parseFloat(all_input_row[0].value ) > 0) {
      

        
        $(this).parents('tr').find('.cost_per_unit').fadeIn(500);
        $(this).parents('tr').find(".cost_per_unit input").removeAttr("disabled");
        $('.left_side .items_s table thead .cost_per_unit').fadeIn(500);
        
  }else {
   
 
     $(this).parents('tr').find(".cost_per_unit input").attr("disabled",' ');
 
    all_input_row[4].value=total_row;
     $(this).parents('tr').find(".cost_per_unit input").val(0);


  }

  $("#print_aaa table tbody #"+print_row_class+" .num_per_unit").text(all_input_row[0].value);
  $("#print_aaa table tbody #"+print_row_class+" .cost_per_unit").text(all_input_row[1].value);
  $("#print_aaa table tbody #"+print_row_class+" .details_num").text(all_input_row[2].value);
  $("#print_aaa table tbody #"+print_row_class+" .cost_details_num  ").text(all_input_row[3].value);
  $("#print_aaa table tbody #"+print_row_class+" .to_c  ").text(total_row);


 

 

if (all_input_row[2].value > 0 || all_input_row[0].value > 0) {
 
	  all_input_row[4].value=(total_row)
}
check()
   }
   
    


 


});
$(document).on("click",".left_side .items_s table tbody tr   input",function(){
	if ($(this).val()==0) {
		$(this).val(" ")
	}
	
});
//when blur from number per unit


$(document).on("keyup",".left_side .items_s table tbody tr .details_num input",function(){
    var all_input_row=$(this).parents('tr').find("input");
    var this_val=$(this).val().trim();
    var  orignal_numper_num_per_unit=all_input_row[8].value;//all available close unit 
    var  orignal_numper_num_per_unit=all_input_row[9].value;// available open pieces 

    var  orignal_numper_num_detalis=all_input_row[13].value;//the orignal details number from define type t
    

    var  cost_per_unit=all_input_row[10].value;//s3r el krtona aw el shwal
    var  cost_per_detalis_unit=all_input_row[11].value;//s3r el krtona aw el shwal

  
  

   if (this_val.length>0) {
			if (parseFloat(all_input_row[2].value ) > 0) {
			$(this).parents('tr').find(".cost_details_num").fadeIn(500);
			$(".left_side .items_s table thead  .cost_det").fadeIn(500);
			 $(this).parents('tr').find(".cost_details_num input").removeAttr("disabled")


			}else {
			$(this).parents('tr').find(".cost_details_num input").attr("disabled",' ');

			all_input_row[4].value= (parseFloat(all_input_row[2].value)* parseFloat(all_input_row[3].value) )+(parseFloat(all_input_row[1].value)* parseFloat(all_input_row[0].value) );
			$(this).parents('tr').find('.cost_details_num input').val(0);

			}
			//for put total_cost
			var get_sum_of_row=$(".left_side .items_s table tbody tr input[name='t_cost_per_one[]']");
			var total_cost=0;
			for (var i = 0; i<get_sum_of_row.length; i++) {
			total_cost+=parseFloat(get_sum_of_row[i].value);
			}
			$('.left_side .items_s .all_bill_c .totale_cost_bill input').val(total_cost);
 
   }

//////////////////////////////////////////////////////////////////////////////////



});

function check(){

	var input_num_per_unit=$(".left_side .items_s table tbody tr .num_per_unit input");
	var input_cost_per_unit=$(".left_side .items_s table tbody tr .cost_per_unit input");
	var input_num_per_p=$(".left_side .items_s table tbody tr .details_num input");
	var input_cost_per_p=$(".left_side .items_s table tbody tr .cost_details_num input");
	var get_sum_of_row=$(".left_side .items_s table tbody tr input[name='t_cost_per_one[]']");

	var total_cost=0;
	for (var i = 0; i<get_sum_of_row.length; i++) {
	  
	    get_sum_of_row[i].value=(parseFloat(input_num_per_unit[i].value)*parseFloat(input_cost_per_unit[i].value) )+(parseFloat(input_num_per_p[i].value)* parseFloat(input_cost_per_p[i].value))
      total_cost+=parseFloat(get_sum_of_row[i].value);
	}
	
$('.left_side .items_s .all_bill_c .totale_cost_bill input').val(total_cost);

$(".left_side .items_s .all_bill_c .paied_bill input").val(total_cost);
//////////////////////////////////////////////////////////////////////////////////

$('#print_aaa .all_bill_c .totale_cost_bill span').text(total_cost);

$('#print_aaa .all_bill_c .paied_bill span').text(total_cost);


}

$(document).on("blur keyup",".left_side .items_s table tbody tr .cost_per_unit input",function(e){
 
		var all_input_row=$(this).parents('tr').find("input");
		var this_val=$(this).val().trim();
	 
		var  user_input_num_per_unit=all_input_row[0].value;
		var  user_input_num_detalis=all_input_row[1].value;
		var  orignal_numper_num_per_unit=all_input_row[8].value;//to checks3r el krtona
		var  orignal_numper_num_detalis=all_input_row[13].value;//to chech el3dad el mofasl
		var  cost_per_unit=all_input_row[10].value;//s3r el krtona aw el shwal
		var  cost_per_detalis_unit=all_input_row[11].value;//s3r el krtona aw el shwal
        
        if (this_val.length>0) {
				if (e.type=="keyup") {
					if (parseFloat(all_input_row[2].value)>0) {

					all_input_row[4].value=(parseFloat(all_input_row[2].value)* parseFloat(all_input_row[3].value) )+(parseFloat(all_input_row[1].value)* parseFloat(all_input_row[0].value) )
					}else{

					all_input_row[4].value=(parseFloat(all_input_row[1].value)* parseFloat(all_input_row[0].value) )
					}	
				}else{

					if ( ( parseFloat(all_input_row[10].value)* parseFloat(all_input_row[0].value) ) > (parseFloat(all_input_row[1].value)* parseFloat(all_input_row[0].value) )   ) {

					$(".pop_up_alert .upper .content h3").html("سعر الوحدة");
					$(".pop_up_alert .upper .content p").html("سعر الوحدة قليل");
					$(".pop_up_alert ").fadeIn(100);
					$(".pop_up_alert .upper").fadeIn(100);
					$(this).val(parseFloat(all_input_row[10].value))
					all_input_row[4].value=(parseFloat(all_input_row[2].value)* parseFloat(all_input_row[3].value) )+(parseFloat(all_input_row[1].value)* parseFloat(all_input_row[0].value) )
					
					}else{
					if (parseFloat(all_input_row[2].value)>0) {

					all_input_row[4].value=(parseFloat(all_input_row[2].value)* parseFloat(all_input_row[3].value) )+(parseFloat(all_input_row[1].value)* parseFloat(all_input_row[0].value) )
					}else{

					all_input_row[4].value=(parseFloat(all_input_row[1].value)* parseFloat(all_input_row[0].value) )
					}


					} 


		}
 check()
 }


})
$(document).on("blur keyup",".left_side .items_s table tbody tr .cost_details_num input",function(e){

    var all_input_row=$(this).parents('tr').find("input");
    var this_val=$(this).val().trim();
    var  user_input_num_per_unit=all_input_row[0].value;
    var  user_input_num_detalis=all_input_row[1].value;
    var  orignal_numper_num_per_unit=all_input_row[8].value;//to checks3r el krtona
    var  orignal_numper_num_detalis=all_input_row[13].value;//to chech el3dad el mofasl
    var  cost_per_unit=all_input_row[10].value;//s3r el krtona aw el shwal
    var  cost_per_detalis_unit=all_input_row[11].value;//s3r el krtona aw el shwal
    if (this_val.length>0) {
	    	 if (e.type=="keyup") {

	    	if (parseFloat(all_input_row[2].value)>0) {
				 	 all_input_row[4].value=(parseFloat(all_input_row[2].value)* parseFloat(all_input_row[3].value) )+(parseFloat(all_input_row[1].value)* parseFloat(all_input_row[0].value) )
				 	}else{
				 		 all_input_row[4].value=(parseFloat(all_input_row[2].value)* parseFloat(all_input_row[3].value) )
				 	}

	    }else{
				
	    if ( ( parseFloat(all_input_row[11].value)* parseFloat(all_input_row[2].value) ) > (parseFloat(all_input_row[2].value)* parseFloat(all_input_row[3].value) )   ) {
		 
			    $(".pop_up_alert .upper .content h3").html("السعر باقطعة");
				$(".pop_up_alert .upper .content p").html("السعر باقطعة قليل");
				$(".pop_up_alert .upper").fadeIn(100);
				$(".pop_up_alert ").fadeIn(100);
	           $(this).val( parseFloat(all_input_row[11].value)  )
	           all_input_row[4].value=(parseFloat(all_input_row[2].value)* parseFloat(all_input_row[3].value) )+(parseFloat(all_input_row[1].value)* parseFloat(all_input_row[0].value) )
			}else{
				 if (parseFloat(all_input_row[2].value)>0) {
				 	 all_input_row[4].value=(parseFloat(all_input_row[2].value)* parseFloat(all_input_row[3].value) )+(parseFloat(all_input_row[1].value)* parseFloat(all_input_row[0].value) )
				 	}else{
				 		 all_input_row[4].value=(parseFloat(all_input_row[2].value)* parseFloat(all_input_row[3].value) )
				 	}
	          

			} 
	    }
	    check()
    }

   
   
    

// var get_sum_of_row=$(".left_side .items_s table tbody tr input[name='t_cost_per_one[]']");
// var total_cost=0;
// for (var i = 0; i<get_sum_of_row.length; i++) {
// total_cost+=parseFloat(get_sum_of_row[i].value);
// }
// $('.left_side .items_s .all_bill_c .totale_cost_bill input').val(total_cost);

// $(".left_side .items_s .all_bill_c .paied_bill input").val(total_cost);
// //////////////////////////////////////////////////////////////////////////////////

// $('#print_aaa .all_bill_c .totale_cost_bill span').text(total_cost);

// $('#print_aaa .all_bill_c .paied_bill span').text(total_cost);



})

$(document).on("blur",".left_side .items_s table tbody tr .num_per_unit input",function(){

    var all_input_row=$(this).parents('tr').find("input");
    var  user_input_num_per_unit=all_input_row[0].value;
    var  user_input_num_detalis=all_input_row[1].value;
    var  orignal_numper_num_per_unit=all_input_row[8].value;//to checks3r el krtona
    var  orignal_numper_num_detalis=all_input_row[13].value;//to chech el3dad el mofasl
    var  cost_per_unit=all_input_row[10].value;//s3r el krtona aw el shwal
    var  cost_per_detalis_unit=all_input_row[11].value;//s3r el krtona aw el shwal


 if (parseFloat(all_input_row[0].value )==orignal_numper_num_per_unit) {

		all_input_row[2].value=0;
		all_input_row[3].value=0;
		}



})
$(document).on("keyup",".left_side .items_s table tbody tr .num_per_unit input",function(){

    var input_val=$(this).val();
   
 if (parseFloat(input_val )<1) {

		 alert_("شروط",'العدد بالوحدة يجب ان يكون اكثر من 0');
		 $(this).val(0);
		}



})


$(document).on('keyup','.left_side .items_s .all_bill_c .paied_bill input',function(){

	var this_val=$(this).val();
	var input_val= $('.left_side .items_s .all_bill_c .totale_cost_bill input').val();
    $('.left_side .items_s .all_bill_c .reminder input').val(parseFloat(this_val)-parseFloat(input_val));


     $('#print_aaa .all_bill_c .paied_bill span').text(this_val);
      $('#print_aaa .all_bill_c .reminder span').text(parseFloat(this_val)-parseFloat(input_val));

})
$(document).on('  submit','.left_side #form_bill',function(e){
	
	 
    var cus_select=$('.left_side .select_client select ').val();
 

   //for put total_cost
	var get_sum_of_row=$(".left_side .items_s table tbody tr input[name='t_cost_per_one[]']");
	var total_cost=0;
	for (var i = 0; i<get_sum_of_row.length; i++) {
	total_cost+=parseFloat(get_sum_of_row[i].value);
	}
	$('.left_side .items_s .all_bill_c .totale_cost_bill input').val(total_cost);
/////////////////////////////////////////////////////////////////////////////////////////////

    var get_num_per_unit=$(".left_side .items_s table tbody tr input[name='num_per_unit[]']");
    var get_cost_num_per_unit=$(".left_side .items_s table tbody tr input[name='cost_per_unit[]']");
 
	for (var i = 0; i<get_num_per_unit.length; i++) {

	  if ((parseFloat(get_cost_num_per_unit[i].value)<=0 || get_cost_num_per_unit[i].value==" " ) && parseFloat(get_num_per_unit[i].value)>0) {
         alert_("شروط","يجب كتابة السعر بالوحدة");
	  	 e.preventDefault();
	  }  	  	
	
	}

	//////////////////////////////////////////////////////////////////////////////////

	var get_details_num=$(".left_side .items_s table tbody tr input[name='details_num[]']");
    var get_cost_details_num=$(".left_side .items_s table tbody tr input[name='cost_details_num[]']");
 
	for (var i = 0; i<get_details_num.length; i++) {

	  if ((parseFloat(get_cost_details_num[i].value)<=0 || get_cost_details_num[i].value==" " ) && parseFloat(get_details_num[i].value)>0) {
         alert_("شروط","يجب كتابة السعر بالقطعة");
	  	 e.preventDefault();
	  }  	  	
	
	}
    if (cus_select<=0) {

    	  
		$(".pop_up_alert .upper .content h3").html("شروط");
		$(".pop_up_alert .upper .content p").html("يجب اختيار العميل");
		$(".pop_up_alert ").fadeIn(100);
		$(".pop_up_alert .upper").fadeIn(100);
    	e.preventDefault();
    }
   var input_val= $('.left_side .items_s .all_bill_c .totale_cost_bill input').val(); 
   if (input_val<0) {
 
   	        $(".pop_up_alert .upper .content h3").html("شروط");
			$(".pop_up_alert .upper .content p").html("اجمالى الفاتورة يجب ان يكون اكثر من 0");
			$(".pop_up_alert ").fadeIn(100);
			$(".pop_up_alert .upper").fadeIn(100);

    e.preventDefault();
   }
   var input_val_bill= $('.left_side .items_s .all_bill_c .paied_bill input').val(); 

   if (input_val_bill<0) {
   	  
			$(".pop_up_alert .upper .content h3").html("شروط");
			$(".pop_up_alert .upper .content p").html("المدفوع يجب  ان يكون اكثر من 0");
			$(".pop_up_alert ").fadeIn(100);
			$(".pop_up_alert .upper").fadeIn(100);
    	e.preventDefault();
   }
   
 if (parseFloat(input_val)==0) {
   	  
			$(".pop_up_alert .upper .content h3").html("شروط");
			$(".pop_up_alert .upper .content p").html("يجب اكمال البيانات");
			$(".pop_up_alert ").fadeIn(100);
			$(".pop_up_alert .upper").fadeIn(100);
    	e.preventDefault();
   }




   $('.left_side .items_s .all_bill_c .totale_cost_bill input').removeAttr("disabled");
   $('.left_side .items_s .all_bill_c .reminder input').removeAttr("disabled");
    $(".left_side .items_s table tbody tr .cost_details_num input").removeAttr("disabled");
       $(".left_side .items_s table tbody tr .cost_per_unit input").removeAttr("disabled");

 
  
});

// search suppliers
$('.suppliers .search_cus input').on('keypress',function(e){
 
	 var value=$(this).val();
	 if(e.which==13){
	 	 var data={search:value,do:'tabel'}          
			$.ajax({  
			url:"check_type.php",  
			method:"POST",  
			data:data,  
			success:function(data)  
			{    
                
			       $('.suppliers table tbody').html(data)
			     
			}  

			});
	 }

	
})


//search_cus
 $('.all_shop .search_cus input').on('keypress',function(e){
     
	 var value=$(this).val();
	 var shop_id=$('.shop_tabel .content_search_shop thead tr input').val(); 
   
	 if(e.which==13){
	 	 var data={search:value,do:'search_shop'}          
			$.ajax({  
			url:"check_type.php",  
			method:"POST",  
			data:data,  
			success:function(data)  
			{    
                
			       $('.content_search_shop').html(data)
			     
			}  

			});
	 }

	
});
 $('.shop_tabel .search_cus input').on('keypress',function(e){
      


       var value=$(this).val();
	 var shop_id=$('.suppliers_s .search_cus .s_h  input').val(); 
   
	 if(e.which==13){

	 	 var data={search:value,do:'search_shop_per_one',shopid:shop_id}          
			$.ajax({  
			url:"check_type.php",  
			method:"POST",  
			data:data,  
			success:function(data)  
			{       
                
			       $('.content_search_shop').html(data)
			     
			}  

			});
	 }
 

	
});
//.left_side .add_user_dash .supp_edit_form .add_cu_dash
 
 //dashboard add user
$(".pr_bill .left_side .client-add span").click(function(){
 $(this).parents('.left_side').find(".add_user_dash").animate({top: "0"},5);
 
});
$(".pr_bill .left_side .add_user_dash .close_user").click(function(){
 $(this).parents('.left_side').find(".add_user_dash").animate({top: "-2000px"},5);
})


$(".pr_bill .left_side .supp_edit_form .add_cu_dash").on("click",function(){
	 var input_form=$(this).parents('form').find('input');
	 var text_b=$(this).parents('form').find('.text').val();
	 var name=input_form[0].value;
	 var mobile=input_form[1].value;
	 var place=input_form[2].value;

 

	  var data={name:name,mobile:mobile,place:place,text:text_b}          
			$.ajax({  
					url:"check_type.php",  
					method:"POST",  
					data:data,  
					success:function(data)  
					{        if (data== -1) {
                               alert_("تحذير","اسم العميل موجود من قبل")
						  }else{
							$('.left_side .select_client select ').append(data);
							$(".left_side .add_user_dash").animate({top: "-10000px"},5);
							input_form[0].value='';
							input_form[1].value='';
							input_form[2].value='';
							$(this).parents('form').find('.text').val(" ");
							var name_ti=data.innerHTML;
					        $('.name_cust_in_bill').html("اسم العميل :"+name)

						  }


					     
					}  

			});

 
})

 /////////////////////close main popup
 $(document).on("click",".pop_up_alert .upper .content button,.pop_up_alert .upper .content span",function(){
  $(".pop_up_alert .upper").fadeOut(1000);

 });

$(document).on("click",'.pr_bill .left_side  .print_bill_bill',function(e){
 
    var get_num_per_unit=$(".left_side .items_s table tbody tr input[name='num_per_unit[]']");
    var get_cost_num_per_unit=$(".left_side .items_s table tbody tr input[name='cost_per_unit[]']");
 
	for (var i = 0; i<get_num_per_unit.length; i++) {

	  if ((parseFloat(get_cost_num_per_unit[i].value)<=0 || get_cost_num_per_unit[i].value==" " ) && parseFloat(get_num_per_unit[i].value)>0) {
         alert_("شروط","يجب كتابة السعر بالوحدة");
	  	 e.preventDefault();
	  	 return false;
	  }  	  	
	
	}

	//////////////////////////////////////////////////////////////////////////////////

	var get_details_num=$(".left_side .items_s table tbody tr input[name='details_num[]']");
    var get_cost_details_num=$(".left_side .items_s table tbody tr input[name='cost_details_num[]']");
 
	for (var i = 0; i<get_details_num.length; i++) {

	  if ((parseFloat(get_cost_details_num[i].value)<=0 || get_cost_details_num[i].value==" " ) && parseFloat(get_details_num[i].value)>0) {
         alert_("شروط","يجب كتابة السعر بالقطعة");
	  	 e.preventDefault();
	  	 return false;
	  }  	  	
	
	}

	var z=printthis();

})
$(document).on("click",'.print_bill',function(){

	var z=printthis();
})
  function printthis(){

				var data = document.getElementById('print_aaa').innerHTML;
				var mywindow = window.open('', 'RESETE', 'height=400,width=400');
				mywindow.document.write('<html><head><style type="text/css">*{text-align:center;font-weight:bold;font-size:12px;font-family:arial;}@page{size:auto;margin:0mm 0mm 0mm 0mm;}table{border: 1px solid #000000;}</style>');
				//mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
				mywindow.document.write('</head><body >');
				mywindow.document.write(data);
				mywindow.document.write('</body></html>');

				mywindow.print();

				mywindow.close();
				return true;

    }




//gard
$('.gard_shop .s_g').on('click',function(){
     var from=$(this).parents('.gard_shop').find(".g_from").val();
     var to=$(this).parents('.gard_shop').find(".g_to").val();
     var sh_i=$(".sh_i_sh input").val();
    
     if (from=='' || to=='') {
     	    $(".pop_up_alert .upper .content h3").html("شروط");
			$(".pop_up_alert .upper .content p").html("يجب تحديد الوقت فى الجرد من و الجرد الى");
			$(".pop_up_alert ").fadeIn(100);
			$(".pop_up_alert .upper").fadeIn(100);
     }else{
			var data={date_from:from,date_to:to,do:'gr_d',sh_i:sh_i}          
					$.ajax({  
					url:"check_type.php",  
					method:"POST",  
					data:data,  
					success:function(data)  
					{      


						$(".gard_shop_b_1 .content_search_shop ").html(data)
							 


			           }  
 
			});

     }
});

$(".gard_shop_b_1 .search_cus input").on("keypress",function(e){
      
		var value=$(this).val();
		var shop_id=$(".sh_i_sh input").val();
 


		if(e.which==13){
           
				var data={search:value,make:'gr_name',sh_i:shop_id}          
				$.ajax({  
				url:"check_type.php",  
				method:"POST",  
				data:data,  
				success:function(data)  
				{      $(".gard_shop_b_1 .content_search_shop ").html(data)
				    
				     
				}  

		});
		}
});
$('.all_shop_gr .gard_shop_all .s_g').on('click',function(){


     var from=$(this).parents('.gard_shop_all').find(".g_from").val();
     var to=$(this).parents('.gard_shop_all').find(".g_to").val();
  
    
     if (from=='' || to=='') {
     	    $(".pop_up_alert .upper .content h3").html("شروط");
			$(".pop_up_alert .upper .content p").html("يجب تحديد الوقت فى الجرد من و الجرد الى");
			$(".pop_up_alert ").fadeIn(100);
			$(".pop_up_alert .upper").fadeIn(100);
     }else{
			var data={date_from:from,date_to:to,m:'gr_d_all_main'}          
					$.ajax({  
					url:"check_type.php",  
					method:"POST",  
					data:data,  
					success:function(data)  
					{    

						$(".all_shop_gr .content_search_shop_grd ").html(data)
							 


			           }  
 
			});

     }
});
$(".all_shop_gr .search_cus input").on("keypress",function(e){
      
		var value=$(this).val();
	 
		if(e.which==13){
           
				var data={search:value,make:'gr_name_all'}          
				$.ajax({  
				url:"check_type.php",  
				method:"POST",  
				data:data,  
				success:function(data)  
				{      

					$(".all_shop_gr .content_search_shop_grd ").html(data)
				    
				     
				}  

		});
		}
});

$(".search_bill_cu .search_cus input").on("keypress",function(e){
      
		var value=$(this).val();
	 
		if(e.which==13){
           
				var data={search:value,make:'get_bill_a'}          
				$.ajax({  
				url:"check_type.php",  
				method:"POST",  
				data:data,  
				success:function(data)  
				{      

					$(".search_bill_cu .distribution_cont ").html(data)
				    
				     
				}  

		});
		}
});

$(".bill_p_main_page .search_bill_pr input").on("keypress",function(e){
      
		var value=$(this).val();
	 
		if(e.which==13){
           
				var data={search:value,make:'get_bill_prouduct'}          
				$.ajax({  
				url:"check_type.php",  
				method:"POST",  
				data:data,  
				success:function(data)  
				{    
					$(".bill_p_main_page table tbody ").html(data)
				    
				     
				}  

		});
		}
});


 
 

$(".right_side .search_cus input").on("keypress",function(e){
      
		var value=$(this).val();

	 
		if(e.which==13){
           
				var data={search:value,make:'get_all_p_all'}          
				$.ajax({  
				url:"check_type.php",  
				method:"POST",  
				data:data,  
				success:function(data)  
				{      

					if(data.length<10){
						$('.pr_bill .right_side .product_body').html("<div class='_alert  alert alert-danger'>لايوجد فئات فرعية</div>");
				 
						$(".pr_bill .right_side .product_body").fadeIn(1000).delay(2000).fadeOut(1000)
				  }else if(data.length>10 && data.length<100){

                         $('.pr_bill .right_side .product_body').html(data);
				 
						$(".pr_bill .right_side .product_body").fadeIn(1000).delay(2000).fadeOut(1000)
				  }else{
					   
						$('.pr_bill .right_side .product_body').html(data)
						$(".pr_bill .right_side .product_body").fadeIn(1000)	 
				  }
				    
				     
				}  

		});
		}
});

//checks
//to get define_type from sub cat (add)->co_bought
$(document).on("change",".check_b  .select_type_subcat_ .selectpicker",function(){

	   var this_val=$(this).val();
 
	  
	  if (this_val<="0") {
	  	$(".add_new_bill .d_err").text("يجب اختيار الفئات الفرعية  للصنف");
	  	$(".add_new_bill .d_err").fadeIn(1000).delay(2000).fadeOut(1000);
	  }else{
			var data={define_type:this_val,do:'select_id'}          
			$.ajax({  
			url:"check_type.php",  
			method:"POST",  
			data:data,  
			success:function(data)  
			{       

			      $(".check_b  .type_sup").fadeOut(1000)
			     $('.check_b  .type_sup').html(data)
			     $(".check_b  .type_sup").fadeIn(1000)

			     
			}  

			});
              
	  } 

});

//alert p
$(".alert_sh_d .al_").fadeIn(1000,function(){

	$(this).parents(".alert_sh_d").fadeIn(100)
	$(this).fadeIn(1000,function(){

				$(this).delay(5000).fadeOut(100,function(){
					$(this).parents(".alert_sh_d").fadeOut(100)
				}) ;
      })
})
$('.alert_sh_d .dis_this , .alert_sh_d .al_ .dis').on('click',function(){
 
     $(this).parents(".alert_sh_d").fadeOut(1000) ;
});

 

$(document).on("click",".alert_sh_d  .al_ .dele",function(){

	   var e_val=$(this).parents(".alert_sh_d").find('.show_me_a').text() ;
   
	   
			var data={edit_s:e_val,do:'ed_che_o_1'}          
			$.ajax({  
			url:"check_type.php",  
			method:"POST",  
			data:data,  
			success:function(data)  
			{     
              if (data==true) {
              	 $(".alert_sh_d").fadeOut(1000) ;
              }
			     
			}  

			});
              
	 

});



$(document).on('click','.desc_def_add .plus_desc_def_select',function(){


     var from=$(this).parents('.desc_def_add').find(".bill_from").val();
     var to=$(this).parents('.desc_def_add').find(".bill_to").val();
     var suo_us=$(this).parents('.desc_def_add').find(".type_sup .selectpicker").val();
     var select_type=$(this).parents('.desc_def_add').find(".select_type_subcat_ .selectpicker ").val();
 
  
    
     if (from=='' || to=='') {
     	    $(".pop_up_alert .upper .content h3").html("شروط");
			$(".pop_up_alert .upper .content p").html("يجب تحديد الوقت فى الفواتير من و الفواتير الى");
			$(".pop_up_alert ").fadeIn(100);
			$(".pop_up_alert .upper").fadeIn(100);

     }else if(suo_us== 'undefined' || suo_us == '' ||suo_us <1	 ||select_type<1 ){
     	    $(".pop_up_alert .upper .content h3").html("شروط");
			$(".pop_up_alert .upper .content p").html("يجب تحديد النوع");
			$(".pop_up_alert ").fadeIn(100);
			$(".pop_up_alert .upper").fadeIn(100);
     }
     else{
			var data={date_from:from,date_to:to,supp_i:suo_us,m:'get_sum'}          
					$.ajax({  
					url:"check_type.php",  
					method:"POST",  
					data:data,  
					success:function(data)  
					{        
                          $(".desc_def_add input[name='t_bill']").val(data)

			           }  
 
			   });

     }
});


$(document).on('click','.desc_def_add .plus_desc_def_select',function(){


     var from=$(this).parents('.desc_def_add').find(".bill_from").val();
     var to=$(this).parents('.desc_def_add').find(".bill_to").val();
     var suo_us=$(this).parents('.desc_def_add').find(".type_sup .selectpicker").val();
     var select_type=$(this).parents('.desc_def_add').find(".select_type_subcat_ .selectpicker ").val();
 
  
    
     if (from=='' || to=='') {
     	    $(".pop_up_alert .upper .content h3").html("شروط");
			$(".pop_up_alert .upper .content p").html("يجب تحديد الوقت فى الفواتير من و الفواتير الى");
			$(".pop_up_alert ").fadeIn(100);
			$(".pop_up_alert .upper").fadeIn(100);

     }else if(suo_us== 'undefined' || suo_us == '' ||suo_us <1	 ||select_type<1 ){
     	    $(".pop_up_alert .upper .content h3").html("شروط");
			$(".pop_up_alert .upper .content p").html("يجب تحديد النوع");
			$(".pop_up_alert ").fadeIn(100);
			$(".pop_up_alert .upper").fadeIn(100);
     }
     else{
			var data={date_from:from,date_to:to,supp_i:suo_us,m:'get_sum'}          
					$.ajax({  
					url:"check_type.php",  
					method:"POST",  
					data:data,  
					success:function(data)  
					{        
                          $(".desc_def_add input[name='t_bill']").val(data)

			           }  
 
			   });

     }
});

$(".desc_def_add input[name='desc']").on("blur",function(){
	var this_val=$(this).val();
	var t_cost=$(".desc_def_add input[name='t_bill']").val();

	
   if (this_val>100) {
				alert_("شروط",'قيمة الخصم اكثر من 100%');
				$(this).val(0);
   }else if(this_val==""){
		$(this).val(0);
		$(".desc_def_add input[name='desc_v']").val(0);
	}else if(isNaN(this_val)){
			    alert_("شروط",'يجب كتابة ارقام');
				$(this).val(0);
		$(".desc_def_add input[name='desc_v']").val(0); 
	}else{
		$(".desc_def_add input[name='desc_v']").val((parseFloat(this_val)*parseFloat(t_cost))/100);
	}
})


$(".bill_desc_edit input[name='desc']").on("blur",function(){
	var this_val=$(this).val();
	var t_cost=$(".bill_desc_edit input[name='t_bill']").val();

	
   if (this_val>100) {
				alert_("شروط",'قيمة الخصم اكثر من 100%');
				$(this).val(0);
   }else if(this_val==""){
		$(this).val(0);
		$(".bill_desc_edit input[name='desc_v']").val(0);
	}else if(isNaN(this_val)){
			    alert_("شروط",'يجب كتابة ارقام');
				$(this).val(0);
		$(".bill_desc_edit input[name='desc_v']").val(0); 
	}else{
		$(".bill_desc_edit input[name='desc_v']").val((parseFloat(this_val)*parseFloat(t_cost))/100);
	}
})


$("#desc_def_add").on("submit",function(e){

     $(".desc_def_add input[name='t_bill']").removeAttr("disabled");

 
})

$(document).on("change",".left_side .select_client select",function(){
	 
	 var name=this.selectedOptions[0].innerHTML;
     $('.name_cust_in_bill').html("اسم العميل :"+name)
     
});

 

//bill_prouduct remove readonly from input
 
 
$(".edit_form_bill_pr_s").on("click blur keyup focus",function(e){
	var this_val=$(this).val();
    var all_val=$(".edit_form_bill_pr_s");

 
       
    if (e.type=="keyup" || e.type=="blur" ) {
    	   if (isNaN(all_val[0].value) || isNaN(all_val[1].value) || isNaN(all_val[2].value) ) {
						alert_("شروط","يجب كتابة ارقام فقط");
						$(this).val(this_val)
         }
    }

    if (e.type=="click") {
    	 $(this).removeAttr("readonly");
    }
});

$(document).on("click",".pop_up_request .close",function(){
$(".pop_up_request").fadeOut(100);
$(".pop_up_request input").val(0)
});
//other shop  product popup
$(document).on("click",".o_shop",function(){
	$(".pop_up_request").fadeIn(100);
	var pop_up_inputs=$(".pop_up_request").find("input");
	var this_input=$(this).find("input");
	var product_i=this_input[0].value;//product id
	var num_per_unit=this_input[1].value;//orginal number per unit 
	var details_num=this_input[2].value;//orginal details_num
	var define_type_num=this_input[3].value;//orginal details_num
	var shop_id=this_input[4].value;//orginal details_num
	var send_num_per_unit=pop_up_inputs[0].value;
	var send_details_num=pop_up_inputs[1].value;
	var append_pop="<input type='hidden' value='"+product_i+"'>";
        append_pop+="<input type='hidden' value='"+num_per_unit+"'>";
        append_pop+="<input type='hidden' value='"+details_num+"'>";
        append_pop+="<input type='hidden' value='"+define_type_num+"'>";
        append_pop+="<input type='hidden' value='"+shop_id+"'>";
 
    $(".pop_up_request  .pop_up_body .inp_h").html(append_pop);

 
})

$(document).on("click",".alert_not  .do_  .ac",function(){
     var  id_log=$(this).parents(".alert_sh_d_n").find(".da input").val();
     var  this_=$(this);
		$.ajax({  
				url:"check_type.php",  
				method:"POST",  
				data:{make:"accept_","i":id_log},  
				success:function(data)  
				{             
					var new_data=data.trim();   
					  if (new_data=="done") {
					  	alert_("تم ","تم");
					  	this_.parents(".alert_sh_d_n").fadeOut(100);
					  }
				} 
		});
})

$(document).on("click",".alert_not  .do_  .dl",function(){
      var  id_log=$(this).parents(".alert_sh_d_n").find(".da input").val();
      var  this_=$(this);
   
		$.ajax({  
				url:"check_type.php",  
				method:"POST",  
				data:{make:"delete_","i":id_log},  
				success:function(data)  
				{     
				      var new_data=data.trim();   
					  if (new_data=="done") {
					  	alert_("تم ","تم");
					  	this_.parents(".alert_sh_d_n").fadeOut(100);
					  }
					  

					  
				} 
				 
		});
		
})


$(document).on("click",".pop_up_request .upper .get",function(){
 
	var pop_up_inputs=$(".pop_up_request").find("input");
	var this_input=$(this).parents(".pop_up_request").find(".pop_up_body input");

	var product_i      =parseFloat(this_input[3].value);//product id
	var num_per_unit   =parseFloat(this_input[4].value);//orginal number per unit 
	var details_num    =parseFloat(this_input[5].value);//orginal details_num
	var define_type_num=parseFloat(this_input[6].value);//orginal details_num
	var proudct_shopid =parseFloat(this_input[7].value);//orginal details_num

	var send_num_per_unit=parseFloat(this_input[0].value);
	var send_details_num=parseFloat(this_input[1].value);
	var send_shop_id=parseFloat(this_input[2].value);

	var final_details_num_shop=(num_per_unit*define_type_num)+details_num;

	var final_details_num_shop_need=(send_num_per_unit*define_type_num)+send_details_num;
	if (final_details_num_shop_need>final_details_num_shop) {
          alert_("شروط","الكمية اكثر من المتاح فى المتجر ");
          this_input[0].value=0;
          this_input[1].value=0;
	}else if(send_num_per_unit==0&& send_details_num==0){
		  alert_("شروط","يجب تحديد العدد بالوحدة او العدد بالقطعة");
		  this_input[0].value=0;
		  this_input[1].value=0;
	}else if(send_num_per_unit<=-1 || send_details_num<=-1){
		  alert_("شروط","القيم يجب ان تكون اكثر من 0");
		  this_input[0].value=0;
		  this_input[1].value=0;
	}else if(1==2){
          // check if the type of this  krtona wla  kilo to allow point 

		 // alert_("شروط","القيم يجب ان تكون اكثر من 0");
		 //  this_input[0].value=0;
		 //  this_input[1].value=0;
	}else{
		//send to data base

			var data={product_i:product_i,
				      send_num_per_unit:send_num_per_unit,
				      send_details_num:send_details_num,
				      send_shop_id:send_shop_id,
				      proudct_shopid:proudct_shopid,
				      make:'get_product'}          
					$.ajax({  
					url:"check_type.php",  
					method:"POST",  
					data:data,  
					success:function(data)  
					{       
                         var data_trim=data.trim();
                         if (data_trim=="product_id_error"){
                              alert_("حدث خطأ","حدث خطأ");
								this_input[0].value=0;
								this_input[1].value=0;
								$(".pop_up_request").fadeOut(100);
                         }else if(data_trim=="product_id_done"){
                                 alert_("تم","تم ارسال طلبك");
                                 $(".pop_up_request").fadeOut(100);
								this_input[0].value=0;
								this_input[1].value=0;

                         }else if(data_trim=="log_error"){
                                 alert_("شروط","يجب قبول او رفض الطلب المسبق لانشاء طلب اخر");
                                 $(".pop_up_request").fadeOut(100);
									this_input[0].value=0;
									this_input[1].value=0;

                         }else{
                         	$(".pop_up_request").fadeOut(100);
								this_input[0].value=0;
								this_input[1].value=0;
							}
				
			           }  
 
			   });

	}
 



	// var orginal_num= mode_(pars,define_type_num);//change all product in another shop to details_num


 
});

//manage_staff 7dor w ensraf
$(document).on("click",".control_manage_staff .add",function(){

	var  this_parent=$(this).parent(".control") 
    var day=$(this).parents(".control_manage_staff").find(".day").text();
    var staff_i=$(this).parents(".control_manage_staff").find(".staff").text();
    if(isNaN(staff_i)){
    	 alert_("404","حدث خطا");
    	 return null;
    }else{

    	var data={day:day,staff_i:staff_i,do:'7dor'}          
					$.ajax({  
					url:"check_type.php",  
					method:"POST",  
					data:data,  
					success:function(data)  
					{       
						var data_trim=data.trim();
                     
						if (data_trim=="7dor_done") {
						   alert_("تم","تمت عملية الحضور");
                          //change button 
                           this_parent.html("<span class='btn btn-danger remove'>إلغاء الحضور</span>");
						}else if(data_trim=="error_404"){
                           alert_("حدث خطا","يرجى المحاولة في وقت لاحق ");
			            }else if(data_trim=="id_not_found"){
                           alert_("حدث خطا","حدث خطا");
			            }else{
                           alert_("حدث خطا","خطا");
			            }    
				   }
 
			   });
    }
});

$(document).on("click",".control_manage_staff .remove",function(){

	var  this_parent=$(this).parent(".control"); 
	var day=$(this).parents(".control_manage_staff").find(".day").text();
	var staff_i=$(this).parents(".control_manage_staff").find(".staff").text();
    if(isNaN(staff_i)){
    	 alert_("404","حدث خطا");
    	 return null;
    }else{

    	var data={day:day,staff_i:staff_i,do:'ensraf'}          
					$.ajax({  
					url:"check_type.php",  
					method:"POST",  
					data:data,  
					success:function(data)  
					{    
						 
						var data_trim=data.trim();
						if (data_trim=="del_done") {
                           alert_("تم","تمت عملية الغاء الحضور");
                          //change button 
                           this_parent.html("<span class='btn btn-success add'>حضور</span>");
						}else if(data_trim=="error_404"){
                           alert_("حدث خطا","يرجى المحاولة في وقت لاحق ");
			            }else if(data_trim=="id_not_found"){
                           alert_("حدث خطا","حدث خطا");
			            }else{
                           alert_("حدث خطا","خطا");
			            }    
				   }
 
			   });
    }
});

$(document).on("click",".alert_not .alert_sh_d_n .close",function(){
 $(this).parents(".alert_sh_d_n").fadeOut(100);
});
 
num_only=function(t){
  
    if(isNaN(t.value)){
      alert_("شروط","يجب كتابة ارقام فقط");
      t.value=0;
    }
}

function mode_(top,bottom){
	var step1=Math.floor(top/bottom);
	var step2=step1*bottom;
	var step3=top-step2;
	var final_r=[step1,step3];
	return final_r;
}

function alert_(m_mes,desc_mes){
		$(".pop_up_alert ").fadeIn(100);
		$(".pop_up_alert .upper .content h3").html(m_mes);
		$(".pop_up_alert .upper .content p").html(desc_mes);
		$(".pop_up_alert .upper").fadeIn(100);
		 
}
  
 
})