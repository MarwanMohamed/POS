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
{{-- <div id="page-title">
    <a href="{{route('endDay')}}" class="btn btn-primary" style="float: right;">انهاء اليوم</a>
    <a href="{{route('days')}}" class="btn btn-primary" style="float: right; margin-right: 5px">الايام</a><br>
</div> --}}
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">الايام</h3>
        <div class="example-box-wrapper">

            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
                <thead>
                    <tr>
                        <th>اليوم</th>
                        <th>التحكم</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($days as $key => $day)
                        @if ($key % 2 == 0)
                        <tr class="even gradeC">
                        @else
                        <tr class="odd gradeX">
                        @endif 
                            <td> {{$day->created_at->format('Y:m:d')}} - {{$day->getDay($day->created_at->format('l'))}}</td>
                            <td>
                                <a href="{{route('engineers.show.days', $day->created_at->format('Y:m:d'))}}"><i class="glyph-icon icon-eye"></i></a>
                                 
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@stop