@extends('admin.layout')
@section('content')

    <script type="text/javascript" src="{{asset('assets/widgets/datatable/datatablesar.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/datatable/datatable-bootstrapar.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/widgets/datatable/datatable-tabletools.js')}}"></script>

<script type="text/javascript">

    /* Datatables basic */

    $(document).ready(function() {
        $('#datatable-example').dataTable();
    });

    /* Datatables hide columns */

    $(document).ready(function() {
        var table = $('#datatable-hide-columns').DataTable( {
            "scrollY": "300px",
            "paging": false
        } );

        $('#datatable-hide-columns_filter').hide();

        $('a.toggle-vis').on( 'click', function (e) {
            e.preventDefault();

            // Get the column API object
            var column = table.column( $(this).attr('data-column') );

            // Toggle the visibility
            column.visible( ! column.visible() );
        } );
    } );

    /* Datatable row highlight */

    $(document).ready(function() {
        var table = $('#datatable-row-highlight').DataTable();

        $('#datatable-row-highlight tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('tr-selected');
        } );
    });


    $(document).ready(function() {
       $('.dataTables_filter input').attr("placeholder", 'بحث');
    });

</script>
<div id="page-title">
    <div class="col-md-3">
        <button  class="btn btn-primary print_bill_bill" style="float: right !important;" name="submit">طباعة</button>
    </div><br>
</div>
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">التقارير</h3>
        <div class="example-box-wrapper">

            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="print_aaa">
                <thead>
                    <tr>
                        <th>عدد الفواتير المباعه</th>
                        <th>اجمالى ثمن البضاعة الاصلى</th>
                        <th>اجمالى ثمن البضاعة الاصلى مع الارباح</th>
                        <th>اجمالى الارباح</th>
                        <th>اجمالى الأجل على العملاء</th>
                        <th>القادم من الأجل</th>
                        <th>قيمة المرتجع الخارجة من رصيد الدرج</th>
                        <th>صافى الإيراد</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="even gradeC">
                        <td>{{$orders->count()}}</td>
                        <td>{{$totalItemBuyPrice}}</td>
                        <td>{{$totalItemSellPrice}}</td>
                        <td>{{$totalProfit}}</td>
                        <td>{{$remainder}}</td>
                        <td>{{$totalPaidRemainder}}</td>
                        <td>{{$totalBack}}</td>
                        <td>{{$netRevenue}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('script')
<script>
    
$(document).on("click",'  .print_bill_bill',function(e){
 

    var z=printthis();

})

  function printthis(){
    // alert(11111111);
                var data = document.getElementById('print_aaa').innerHTML;
                var mywindow = window.open('', 'RESETE', 'height=400,width=400');
                // mywindow.document.write('<html><head><style type="text/css">*{text-align:center;font-weight:bold;font-size:12px;font-family:arial;}@page{size:auto;margin:0mm 0mm 0mm 0mm;}table{border: 1px solid #000000;}</style>');
                //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
                mywindow.document.write('</head><body >');
                mywindow.document.write(data);
                mywindow.document.write('</body></html>');

                mywindow.print();

                mywindow.close();
                return true;

    }
</script>
@stop