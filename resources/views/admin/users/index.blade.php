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
    <a href="{{route('user.create')}}" class="btn btn-primary pull-right">اضافة مستخدم</a><br>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">المستخدمين</h3>
        <div class="example-box-wrapper">

            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
                <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>اسم المستخدم</th>
                        <th>النوع</th>
                        <th>المرتب اليومى</th>
                        <th>التحكم</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($users as $key => $user)
                        @if ($key % 2 == 0)
                        <tr class="even gradeC">
                        @else
                        <tr class="odd gradeX">
                        @endif 
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->is_admin == 1 ? 'ادمن' : 'مستخدم'}}</td>
                            <td>{{$user->salary}}</td>
                           
                           
                            <td>
                                <a href="{{route('user.edit', $user->id)}}"><i class="glyph-icon icon-edit"></i></a>
                                <form id="delete_form" action="{{ route('user.destroy', $user->id) }}" method="POST" >
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