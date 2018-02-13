@extends('admin.layout')
@section('content')


<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">تعديل مهندس</h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="post" action="{{route('engineer.update', $engineer->id)}}">
                {{csrf_field()}}
                {{method_field('put')}}
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">اسم العميل</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" value="{{old('name', $engineer->name)}}">
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
                        <input type="number" class="form-control" name="phone" value="{{old('phone', $engineer->phone)}}">
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('percentage') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">العنوان</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="percentage" value="{{old('percentage', $engineer->percentage)}}">
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