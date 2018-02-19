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
        $('.dataTables_filter input').attr("placeholder",  );
    });

</script>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">فاتورة رقم #{{$orders[0]->order_number}}</h3>
        <h2 class="title-hero">الاجمالى {{$total}}</h2><br>
        <h2 class="title-hero">
            <form method="post" action="{{route('order.editPaid', $orders[0]->order_number)}}">
                {{csrf_field()}}
            المدفوع <input type="number" class="form-control" name="paied_bill" value="{{$orders[0]->paied_bill}}"><br>
                <button type="submit" class="btn btn-primary">تعديل</button>

            </form>
        </h2><br>
    </div>
  
        <div class="example-box-wrapper">

            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" style="direction: rtl;">
                <thead>
                    <tr>
                        <th>الصنف</th>
                        <th>العدد</th>
                        <th>اسعر</th>
                        <th>ااجمالى</th>
                        {{-- <th>اسم العميل</th> --}}
                        <th>التحكم</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($orders as $key => $order)
                        @if ($key % 2 == 0)
                        <tr class="even gradeC">
                        @else
                        <tr class="odd gradeX">
                        @endif 
                            <td>{{$order->item[0]->name}}</td>
                            <td>{{$order->num_per_unit}}</td>
                            <td>{{$order->cost_per_unit}}</td>
                            <td>{{$order->t_cost_per_one}}</td>
                            <td>

                                <form id="delete_form" action="{{ route('order.deleteItem', [$order->order_number, $order->item_id]) }}" method="POST" >
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="form_button" onclick="return confirm('هل انت متاكد');" ><i class="glyph-icon icon-trash"></i></button>
                                </form>
                                 
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>
</div>
@stop