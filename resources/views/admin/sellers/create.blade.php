@extends('admin.layout')
@section('content')

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">اضافة مورد</h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="post" action="{{route('seller.store')}}">
            	{{csrf_field()}}
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">اسم المورد</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">حساب المورد</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="cost" value="{{old('cost')}}">
                        @if ($errors->has('cost'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cost') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('need') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">باقى حساب المورد</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="need" value="{{old('need')}}">
                        @if ($errors->has('need'))
                            <span class="help-block">
                                <strong>{{ $errors->first('need') }}</strong>
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