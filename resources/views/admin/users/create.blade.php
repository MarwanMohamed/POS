@extends('admin.layout')
@section('content')


<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">{{trans('employees.new_user')}}</h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="post" action="{{route('user.save')}}">
            	{{csrf_field()}}
                
                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">{{trans('employees.first_name')}}</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}">
                        @if ($errors->has('first_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">{{trans('employees.last_name')}}</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}">
                        @if ($errors->has('last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">{{trans('employees.username')}}</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }} @if(Session::has('error')) has-error @endif">
                    <label class="col-sm-3 control-label">{{trans('employees.date')}}</label>
                    <div class="col-sm-6">
                        <div class="input-prepend input-group">
                            <span class="add-on input-group-addon">
                                <i class="glyph-icon icon-calendar"></i>
                            </span>
                            <input type="text" class="bootstrap-datepicker form-control" value="{{old('date')}}" name="date" data-date-format="mm/dd/yy">
                        </div>
                        <span class="help-block">
                            <strong>{{ Session::get('error') }}</strong>
                        </span>
                            
                        @if ($errors->has('date'))
                        <span class="help-block">
                            <strong>{{ $errors->first('date') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">{{trans('employees.address')}}</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="address" value="{{old('address')}}">@if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">{{trans('employees.phone')}}</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">{{trans('employees.password')}}</label>
                    <div class="col-sm-6">
                        <input id="password" type="password" class="form-control" name="password" >
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">{{trans('employees.confirm_password')}}</label>
                    <div class="col-sm-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">{{trans('employees.email')}}</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('branch_id') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">{{trans('employees.branch')}}</label>
                    <div class="col-sm-6">
                        <select name="branch_id" class="chosen-select" style="display: none;">
                            @foreach($branches as $branch)
                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('branch_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('branch_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">{{trans('employees.role')}}</label>
                    <div class="col-sm-6">
                        <select name="role" class="chosen-select" style="display: none;">
                            @foreach($roles as $role)
                            <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('role'))
                            <span class="help-block">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                
                <button type="submit" class="btn btn-primary">{{trans('employees.save')}}</button>
            </form>
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