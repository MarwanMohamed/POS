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

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">التقارير</h3>
        <div class="example-box-wrapper">

            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
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