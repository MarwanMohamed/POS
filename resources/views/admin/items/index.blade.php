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

    <form>
        <div class="col-sm-3">
            <input type="text" name="code" class="form-control" placeholder="بحث بالكود">
        </div>
        <button class="btn btn-primary" type="submit" style="float: right;">Search</button><br>
    </form><br>

    <a href="{{route('item.create')}}" class="btn btn-primary pull-right" style="margin-right: 5px">اضافة صنف</a>


    <a href="{{route('item.showInFront')}}" class="btn btn-primary pull-right">@if(isset($showPrice) && $showPrice->value == 0)اظهار سعر الشراء @else اخفاء سعر الشراء @endif</a><br>
</div>



<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">الاصناف</h3>
        <div class="example-box-wrapper">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
                <thead>
                    <tr>
                        <th>كود الصنف</th>
                        <th>اسم الصنف</th>
                        <th>الفئة الرئيسية</th>
                        <th>الكمية</th>
                        <th>سعر الشراء</th>
                        <th>سعر البيع</th>
                        <th>التحكم</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($items as $key => $item)
                        @if ($key % 2 == 0)
                        <tr class="even gradeC">
                        @else
                        <tr class="odd gradeX">
                        @endif 
                            <td>{{$item->code}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->category->cat_name}}</td>
                            <td>{{$item->amount}}</td>
                            <td>{{$item->buy_price}}</td>
                            <td>{{$item->sell_price}}</td>
                        
                           
                            <td>
                                <a href="{{route('item.edit', $item->id)}}"><i class="glyph-icon icon-edit"></i></a>
                                <form id="delete_form" action="{{ route('item.destroy', $item->id) }}" method="POST" >
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