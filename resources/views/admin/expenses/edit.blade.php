@extends('admin.layout')
@section('content')


<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">تعديل المصروف</h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="post" action="{{route('expense.update', $expense->id)}}">
                {{csrf_field()}}
                {{method_field('put')}}
                


                <div class="form-group{{ $errors->has('expense') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">المصروف</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="expense" value="{{old('expense', $expense->expense)}}">
                        @if ($errors->has('expense'))
                            <span class="help-block">
                                <strong>{{ $errors->first('expense') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('reason') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">السبب</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="reason" value="{{old('reason', $expense->reason)}}">
                        @if ($errors->has('reason'))
                            <span class="help-block">
                                <strong>{{ $errors->first('reason') }}</strong>
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