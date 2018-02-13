@extends('admin.layout')
@section('content')

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">اضافة مهندس</h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="post" action="{{route('engineer.store')}}">
            	{{csrf_field()}}
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">اسم المهندس</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">رقم الهاتف</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="phone" value="{{old('phone')}}">
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('percentage') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">النسبة المئوية %</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="percentage" value="{{old('percentage')}}">
                        @if ($errors->has('percentage'))
                            <span class="help-block">
                                <strong>{{ $errors->first('percentage') }}</strong>
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