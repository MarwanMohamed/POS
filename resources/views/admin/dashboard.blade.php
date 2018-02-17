
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>

        <link rel='stylesheet' href="{{asset('layout/css/bootstrap.css')}}"/>
        <link rel='stylesheet' href="{{asset('layout/css/style.css')}}"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="pop_up_alert">
                <div class="upper">
                    <div class="content">
                        <h3> </h3>
                        <p> </p>
                        <span class="exit glyphicon glyphicon-remove"></span>
                        <button class="btn btn-success exit">ok</button>
                    </div>
                </div>

            </div>
            <!-- <div class="se-pre-con"></div> -->
        </div>


        <nav c{{-- lass="navbar navbar-default">

            <!-- Brand and toggle get grouped for better phone display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">

            <li> 
              <a href="manage_staff.php?do=show_shop_staff">
                  <span class="  glyphicon glyphicon-wrench"> </span>
                  <span class="">ادارة العاملين</span>
              </a>


          </li>

          <li>
              <a href="car.php?do=cont">
                <span class="  glyphicon glyphicon-filter"> </span>
                <span class="">ادارة السيارات</span>
            </a>
        </li>


        <li> 
            <a href="bill_prouduct.php?do=cont">
              <span class="news   glyphicon glyphicon-shopping-cart"></span>
              <span class="">ادارة  المبيعات</span>
          </a>
        </li>
        <li> 
            <a href="shop.php?do=cont">
              <span class="news   glyphicon glyphicon-shopping-cart"></span>
              <span class="">ادارة  المحلات</span>
          </a>
        </li>




        <li> 
          <a href="dashboard.php">
            <span class="news  glyphicon glyphicon-home"></span>
            <span class="">الصفحة الرئيسية</span>
        </a>
        </li>



        <!--  <li><a href=" comment.php"><span class=" user_u glyphicon glyphicon-cloud"></span></a></li>  -->
        </ul>

        <ul class="nav navbar-nav navbar-left">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">name<span class="caret"></span></a>
              <ul class="dropdown-menu">


                <li><a href="Logout.php">تسجيل الخروج</a></li>

            </ul>
        </li>
        </ul>
        </div>

        </nav> --}}

<div class='container-fluid'>

 
 
      {{--    

                 <div class='_alert alert alert-success'>Done</div>
                 <div class='_alert alert alert-danger'>Error</div>
                 <div class='_alert alert alert-danger'></div> --}}

  @if($errors->any())
                 <div class='_alert alert alert-danger'>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('message'))
                 <div class='_alert alert alert-success'>
                            {{ session()->get('message') }}
                        </div>
                    @endif


 
 
 <div class="pr_bill">
     <div  class="left_side col-xs-12 col-md-6">
       <div class="add_user_dash">
                  <div class="supp_edit_form"> 
                       <span class="close_user glyphicon glyphicon-remove"></span>     
                      <form  action="{{route('customer.frontStore')}}" method="POST">
                        {{csrf_field()}}
                          <div class="form-group">
                            <label for=" ">الاسم</label>
                            <input type="text" class="form-control" name="name" id="formGroupExampleInput">
                          </div>


                          <div class="form-group">
                          <label for="formGroupExampleInput2">رقم الموبيل</label>
                             <input type="text" class="form-control" id="formGroupExampleInput2" name="phone"  >
                            
                          </div>
                          <div class="form-group">
                          <label for="formGroupExampleInput2">محل الاقامة </label>
                             <input type="text" class="form-control" id="formGroupExampleInput2" name="address"  >
                            
                          </div>
                          <div class="form-group">
                          <label for="comment">الملاحظات:</label>
                          <textarea class="form-control text" rows="5" id="comment" name="note"> </textarea>
                          </div>
                         <button  class="btn btn-primary add_cu_dash" type="submit">اضافة عميل</button>
                      </form>
                  </div>
       </div>

          <div class="col-xs-12 row">
                 <div class="col-xs-4 client-add">
                    <span class="glyphicon glyphicon-user"></span>
               </div>
               <div class="col-xs-8">اختيار العميل</div>
          </div>
        <form  id='form_bill' action="" method="POST">

               <div class="col-xs-12 select_client">

              
  
                    <span class='save_customer btn  btn-primary'>عميل إفتراضى</span>
                    <input type='hidden' class='shop_i' value=''>
  

                    

                    

                    <select class=" form-control selectpicker" data-live-search="true" name="name_supplier">

                        <option value="0" selected >اختار</option>

                          @foreach($customers as $customer)
                            <option data-tokens="dd" selected value="xx">{{$customer->name}}</option>
                          @endforeach                         

                         </select>
                    

                    

                  

                  
                   

                   
               </div>
               <div class="col-xs-12 items_s">
                   <table class="table">
                                <thead>
                                  <tr>
                                     <th>الصنف</th>
                                    <th>العدد</th>
                                    <th class="cost_per_unit">السعر</th>
                                    <th>الاجمالى</th>
                                  </tr>
                                </thead>
                                <tbody>
                               
                                
                               
                                 
                                </tbody>
                    </table>
                              <div class="all_bill_c">
                                   <div class="totale_cost_bill">
                                      <label>اجمالى الفاتورة</label>
                                       <input type="text" name="totale_cost_bill" value="0"  disabled=""> 
                                   </div>
                                  
                                   <div class="paied_bill">
                                     <label>المدفوع </label>
                                      <input type="text" name="paied_bill" value="0">
                                   </div>
                                   
                                   <div class="reminder">
                                     <label>الباقى </label>
                                   <input type="text" name="reminder_bill" value="0" disabled="">
                                   </div>
                                 <div><input type="hidden" name="rand_pa" value=""></div>
                              </div>
                   
                 </div>

            <input type="submit" class="btn btn-primary form-control DONE_form" name="submit" value="دفع">
          </form> 
           <br>
          <input type="submit" class="btn btn-info form-control print_bill_bill" name="submit" value="طباعة">
            <div  id='print_aaa' class="col-xs-12 print_aaa" > 
             <div style="border:1px solid #000; padding:5px;overflow: hidden;text-align:center; " class=" ">
                    <h4 style="float:left;"></h4><br>
                     <h4 class="name_cust_in_bill">  </h4>
              <table  width="100%"    border="1" dir="rtl" style="border-collapse:collapse;" >
                <thead>
                    <tr>
                        <td><b>الصنف</b></td>
                        <td><b>العدد  </b></td>
                        <td><b>السعر   </b></td>
                        <td><b>الاجمالى</b></td>

                    </tr>
                </thead>
                <tbody>
  
          
                     
                   
               
                </tbody>
            </table>
                        <div style="float:right; width:100%;" class="all_bill_c">
                                   <br><br>
                                   <div style="border: 1px solid;text-align:right;" class="totale_cost_bill">
                                      <label>اجمالى الفاتورة : </label>
                                      <span></span>
                                   </div>
                                  
                                   <div style="border: 1px solid;text-align:right;" class="paied_bill">
                                     <label>المدفوع : </label>
                                         <span></span>
                                   </div>
                                   
                                   <div style="border: 1px solid;text-align:right;" class="reminder">
                                     <label>الباقى : </label>
                                       <span></span>
                                   </div>
                                 <div><input type="hidden" name="rand_pa" value=""></div>
                                  <div style="border: 1px solid;text-align:right;direction:ltr;" class="">
                                   
                                       <span> </span>

                                         <label>:محل</label>
                                   </div>
                                    <div style="border: 1px solid;text-align:right;direction:ltr;" >
                                     
                                       <span> </span>
                                       <label>:الكاشير</label>
                                   </div>

                        </div>
               </div>
        </div>
     </div>
     <div class="">
       <input type="hidden"  form="form_bill" name="user_saler" value="" >
     </div>
     
      <div class="right_side col-xs-12 col-md-6">
            <div  class="search_cus form-group  "> 
               
           <input type="text" name="search" placeholder="بحث فى جميع المحلات"> 
           <div class="row_main_cat  ">
               
                      <ul>
                                  @foreach($cats as $cat)
                                    
                                          <li class="category">
                                                  <span>{{$cat->cat_name}}</span><input type='hidden' value='{{$cat->cat_id}}'>
                                          </li>
                                  @endforeach

                  </ul>
                   <div class="col-xs-1"> </div>
           </div>
           <div class="row_sub_cat  ">
                
                 
                  
           </div>

           <div class="define_type_body  ">
                 <div class="shop"><input type="hidden" name="" value="1"></div> 
                 </div>  
           </div>
           <div class="product_body">
            <ul class="ulforitems">
              {{-- <li class="col-xs-12 col-md-3 t_shop" id="main485">
                  <span class="name_snf">صن شاين مفتت</span><br>
                  <span><span class="num_pre_unit">49</span>(كرتونة)</span><br>
                  <span>القطع المتاحة:<span class="details_num">30</span></span><br>
                  <span>سعر  كرتونة :<span class="details_num">470</span></span><br>
                  <span>سعر القطعة:<span class="num_per_det">9.79</span></span><br>
                  <div class="inp"><input type="hidden" value="485">
                  <input type="hidden" value="49"><input type="hidden" value="30">
                  <input type="hidden" value="470"><input type="hidden" value="9.79167">
                  <input type="hidden" value="77"><input type="hidden" value="48"></div>
              </li> --}}

              {{-- <li class="col-xs-12 col-md-3 o_shop" id="main485">
                  <span class="name_snf">صن شاين مفتت</span><br>
                  <span><span class="num_pre_unit">49</span>(كرتونة)</span><br>
                  <span>القطع المتاحة:<span class="details_num">30</span></span><br>
                  <span>سعر  كرتونة :<span class="details_num">470</span></span><br>
                  <span>سعر القطعة:<span class="num_per_det">9.79</span></span><br>
                  <div class="inp"><input type="hidden" value="485">
                  <input type="hidden" value="49"><input type="hidden" value="30">
                  <input type="hidden" value="470"><input type="hidden" value="9.79167">
                  <input type="hidden" value="77"><input type="hidden" value="48"></div>
              </li> --}}
            </ul>
             
           </div>
         
  

     </div>
     <div class="search_content"> 


     </div>



           <!-- start popup  to request from shop -->
        <div class="pop_up_request">
               <div class="upper">
                 <span class="close pull-left  glyphicon glyphicon-remove"></span>
                 <div class="pop_up_body">
                        <label for=" ">العدد بالوحدة</label>
                        <input onkeyup="num_only(this)" type="text" class="form-control" name="name" id="formGroupExampleInput"  value="0">
                        <label for=" ">العدد بالقطعة</label>
                        <input onkeyup="num_only(this)" type="text" class="form-control" name="name" id="formGroupExampleInput" value="0">
                        <input type="hidden" value="">
                        <div class="inp_h">
                          
                        </div>

                 </div>
                 <span class="btn btn-info get">اطلب</span>
               </div>
        </div>
</div>

 
 <div class="alert_not">
                  <!-- <div class="alert_sh_d" id="e2">
                            <p class="name_shop"> </p>
                            <div class="col-xs-12 do_">  

                                    <span class="col-xs-12 col-md-3 btn btn-danger  dl">رفض</span>
                                    <span class="col-xs-12 col-md-3 btn btn-primary ac">قبول</span>
             
                            </div>
                            <div class="da"><input type="hidden" name=""></div>
                  </div>
                   <span class="dis_this glyphicon glyphicon-remove"></span> --> 
    </div>


</div>

 



          <div class="footer">








          </div>
          <script src="https://authedmine.com/lib/authedmine.min.js"></script>
          <script src="{{asset('layout/js/jquery-3.1.1.min.js')}}"></script>
          <script src="{{asset('layout/js/bootstrap.min.js')}}">    </script>
          <script src="{{asset('layout/js/backend.js')}}"></script>
          <script src="{{asset('layout/js/aftajaxComp.js')}}"></script>

          <script type="text/javascript">
            if(!EventSource)
                alert("مٌتصفحك لايَدعم SSE :(");
            else{ 
                var s_i="";
                var source = new EventSource('send_r.php');
                source.onmessage = function(e) {
                    var data_all=e.data.split("/");
                    for (var i =0 ;i<data_all.length ; i++) {
                     var  data_line_split=data_all[i].split("-");
                     var myshop=data_line_split[0].trim();
                     if( s_i == myshop){
                        //data_line_split[0] =>sorce
                        //data_line_split[1] => destination
                        //data_line_split[2] => id request
                        var data_={make:"get_shop","i":data_line_split[1]};
                        var data_details={make:"get_details","i":data_line_split[2]};
                        var get=get_req(data_);
                        var get_order_details=get_req(data_details);
                        if (get.status==200) {
                          sou_shop=data_line_split[1].trim();
              //check if alert   found or no
              var alert_div=$(".alert_not").find("#e"+sou_shop+"").length;
              if (alert_div==0) {
                var append='<div class="alert_sh_d_n" id="e'+sou_shop+'">';
                append+='<p class="name_shop">طلب من محل '+get.responseText+'</p>';
                append+='<div class="col-xs-12 do_"> '+get_order_details.responseText;
                append+='<span class="col-xs-12 col-md-3 btn btn-danger  dl">رفض</span>';
                append+='<span class="col-xs-12 col-md-3 btn btn-primary ac">قبول</span>';
                append+='</div>';
                append+='<div class="da"><input type="hidden" name="" value="'+data_line_split[2]+'"></div>';
                append+='<span class="close glyphicon glyphicon-remove"></span>';
                append+='</div>';
                append+='</div>';
                $(".alert_not").append(append); 
            }
            $(".alert_sh_d").fadeIn(100);
        }
    }
}
};
}
// function get_req(data_){
//     var z=$.ajax({  
//         {{-- url: "{{route('get.items')}}",   --}}
//         method:"get",  
//         data:data_,  
//         async: false
//     });
//     return z;
    
// }
// 
</script>

<script>
  $('.category').on('click', function() {
    var catId = $(this).find('input').val();
    $.ajax({  
      url:"/getitems/"+ catId,  
      method:"get",  
      success:function(response)  
      {      
        if (response.length > 0) {
            $('.ulforitems').html('');

            // $('.new_area_select').last().append('<option value="">{{trans('areas.country')}}</option>');
            $.each(response, function(key, val){
              console.log(val);
                $('.ulforitems').append('<li class="col-xs-12 col-md-3 t_shop" id="main485"><span class="name_snf">'+val['name']+'</span><br><span>الكمية:<span class="details_num">'+val['amount']+'</span></span><br></li>');
                  // <span>سعر  كرتونة :<span class="details_num">470</span></span><br>
                  // <span>سعر القطعة:<span class="num_per_det">9.79</span></span><br>
                  // <div class="inp"><input type="hidden" value="485">
                  // <input type="hidden" value="49"><input type="hidden" value="30">
                  // <input type="hidden" value="470"><input type="hidden" value="9.79167">
                  // <input type="hidden" value="77"><input type="hidden" value="48"></div>
            });
        } else {
            $('.ulforitems').html('');
            $('.ulforitems').append('<div class="_alert alert alert-danger col-xs-12">لا يوجد منتجات من هذا الصنف  </div>');
        }
      }
  });
  });
</script>

    </body>
</html>