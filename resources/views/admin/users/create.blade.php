@extends('admin.layout')
@section('content')

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">اضافة مستخدم</h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="post" action="{{route('user.store')}}">
                {{csrf_field()}}
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">الاسم</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">اسم المستخدم</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="username" value="{{old('username')}}">
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">الرقم السرى</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="password" value="{{old('password')}}">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
               

                <div class="form-group">
                    <label class="col-sm-3 control-label">اعادة الرقم السرى</label>
                    <div class="col-sm-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            
                    </div>
                </div>

                <div class="form-group{{ $errors->has('is_admin') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">النوع</label>
                    <div class="col-sm-6">
                        <select class="form-control single" name="is_admin">
                            <option value="0">مستخدم</option> 
                            <option value="1">ادمن</option> 
                        </select>
                        @if ($errors->has('is_admin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('is_admin') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">المرتب اليومى</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="salary" value="{{old('salary')}}">@if ($errors->has('salary'))
                            <span class="help-block">
                                <strong>{{ $errors->first('salary') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                
                <button type="submit" class="btn btn-primary">حفظ</button>
            </form>
        </div>
    </div>
</div>

@stop