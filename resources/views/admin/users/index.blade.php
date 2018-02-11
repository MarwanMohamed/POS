@extends('admin.layout')
@section('content')

    <script type="text/javascript" src="../../assets/widgets/datatable/datatables{{app()->getLocale()}}.js"></script>
    <script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap{{app()->getLocale()}}.js"></script>
    <script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>

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
<div id="page-title">
    <a href="{{route('user.create')}}" class="btn btn-primary pull-right">{{trans('employees.new_user')}}</a><br>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">{{trans('employees.users')}}</h3>
        <div class="example-box-wrapper">

            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
                <thead>
                    <tr>
                        <th>{{trans('employees.first_name')}}</th>
                        <th>{{trans('employees.last_name')}}</th>
                        <th>{{trans('employees.username')}}</th>
                        <th>{{trans('employees.date')}}</th>
                        <th>{{trans('employees.address')}}</th>
                        <th>{{trans('employees.phone')}}</th>
                        <th>{{trans('employees.email')}}</th>
                        <th>{{trans('employees.branch')}}</th>
                        <th>{{trans('employees.role')}}</th>
                        <th>{{trans('employees.action')}}</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($users as $key => $user)
                        @if ($key % 2 == 0)
                        <tr class="even gradeC">
                        @else
                        <tr class="odd gradeX">
                        @endif 
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->date}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{isset($user->branch->name) ? $user->branch->name : ''}}</td>
                            <td>
                                @foreach($user->roles as $k => $role)
                                    {{$role->name}}
                                    @if(! $loop->last)
                                        ,<br>
                                    @endif
                                @endforeach
                            </td>
                           
                            <td>
                                <a href="{{route('user.edit', $user->id)}}"><i class="glyph-icon icon-edit"></i></a>
                                <a onclick="return confirm('Are you sure ?');" href="{{route('user.destroy', $user->id)}}"><i class="glyph-icon icon-trash"></i></a>
                                <a href="{{route('user.active', $user->id)}}">
                                    @if($user->is_active == 1)
                                    <i class="glyph-icon icon-close"></i>
                                    @else
                                    <i class="glyph-icon icon-check"></i>
                                    @endif
                                </a>
                                <a onclick="return confirm('Are you sure ?');" href="{{route('user.password', $user->id)}}"><i class="glyph-icon icon-key"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@stop