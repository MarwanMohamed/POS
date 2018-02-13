@extends('admin.layout')
@section('content')

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">تعديل مستخدم</h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="post" action="{{route('user.update', $user->id)}}">
                {{csrf_field()}}
                {{method_field('put')}}
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">الاسم</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" value="{{old('name', $user->name)}}">
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
                        <input type="text" class="form-control" name="username" value="{{old('username', $user->username)}}">
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
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('is_admin') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">النوع</label>
                    <div class="col-sm-6">
                        <select class="form-control single" name="is_admin">
                            <option value="0" @if($user->is_admin == 0) selected @endif>مستخدم</option> 
                            <option value="1" @if($user->is_admin == 1) selected @endif>ادمن</option> 
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
                        <input type="number" class="form-control" name="salary" value="{{old('salary', $user->salary)}}">@if ($errors->has('salary'))
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