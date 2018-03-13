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
    <a href="{{route('engineer.create')}}" class="btn btn-primary pull-right">اضافة مهندس</a><br>
    <form>

        <div class="col-sm-3">

            <div class="input-prepend input-group">
                <span class="add-on input-group-addon">
                    <i class="glyph-icon icon-calendar"></i>
                </span>
                <input type="text" class="bootstrap-datepicker form-control" value="{{old('from')}}" name="from" data-date-format="dd/mm/yy" placeholder="من">
            </div>
        </div>

        <div class="col-sm-3">
            <div class="input-prepend input-group">
                <span class="add-on input-group-addon">
                    <i class="glyph-icon icon-calendar"></i>
                </span>
                <input type="text" class="bootstrap-datepicker form-control" value="{{old('to')}}" name="to" data-date-format="dd/mm/yy" placeholder="الى">
            </div>
        </div>

        
        <button class="btn btn-primary" type="submit" style="float: right;">بحث</button><br><br>
    </form><br>
    <a href="{{route('engineers.days')}}" class="btn btn-primary" style="float: right; margin-right: 5px">الايام</a><br>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">المهندسيين</h3>
        <div class="example-box-wrapper">

            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
                <thead>
                    <tr>
                        <th>اسم المهندس</th>
                        <th>رقم الهاتف</th>
                        <th>النسبة المئوية</th>
                        <th>التحكم</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($engineers as $key => $engineer)
                        @if ($key % 2 == 0)
                        <tr class="even gradeC">
                        @else
                        <tr class="odd gradeX">
                        @endif 
                            <td>{{$engineer->name}}</td>
                            <td>{{$engineer->phone}}</td>
                            <td>{{$engineer->percentage}}%</td>
                           
                            <td>
                                <a href="{{route('engineer.edit', $engineer->id)}}"><i class="glyph-icon icon-edit"></i></a>
                                <form id="delete_form" action="{{ route('engineer.destroy', $engineer->id) }}" method="POST" >
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

@section('script')

<script type="text/javascript" src="{{asset('assets/widgets/datepicker/datepicker.js')}}"></script>

<script type="text/javascript">

    $(function() { "use strict";
        $('.bootstrap-datepicker').bsdatepicker({
            format: 'mm-dd-yyyy'
        });
    });
</script>
@stop
