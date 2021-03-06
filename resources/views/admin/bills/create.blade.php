@extends('admin.layout')
@section('content')
<div id="page-title">
    <a href="{{route('engineer.create')}}" class="btn btn-primary">اضافة مهندس</a>
    <a href="{{route('customer.create')}}" class="btn btn-primary">اضافة عميل</a><br>
</div>
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">اضافة فاتورة</h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="post" action="{{route('bill.store')}}"  enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group{{ $errors->has('customer_id') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">اسم العميل</label>
                    <div class="col-sm-6">
                        <select class="form-control single" name="customer_id">
                          @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->name}}</option> 
                          @endforeach
                        </select>
                        @if ($errors->has('customer_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('customer_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('bill_type') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">نوع الصيانة</label>
                    <div class="col-sm-6">
                        <select class="form-control single" name="bill_type">
                            <option value="0">سوفت وير</option> 
                            <option value="1">هارد وير</option> 
                        </select>
                        @if ($errors->has('bill_type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bill_type') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">نوع الجهاز</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="type" value="{{old('type')}}">
                        @if ($errors->has('type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('error') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">العطل</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="error" value="{{old('error')}}">
                        @if ($errors->has('error'))
                            <span class="help-block">
                                <strong>{{ $errors->first('error') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('in') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">تاريخ استلام الجهاز</label>
                    <div class="col-sm-6">
                        <div class="input-prepend input-group">

                            <span class="add-on input-group-addon">
                                <i class="glyph-icon icon-calendar"></i>
                            </span>
                            <input type="text" class="bootstrap-datepicker form-control" value="{{old('in')}}" name="in" data-date-format="mm/dd/yy">
                        </div>
                        @if ($errors->has('in'))
                        <span class="help-block">
                            <strong>{{ $errors->first('in') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('out') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">تاريخ تسليم الجهاز</label>
                    <div class="col-sm-6">
                        <div class="input-prepend input-group">

                            <span class="add-on input-group-addon">
                                <i class="glyph-icon icon-calendar"></i>
                            </span>
                            <input type="text" class="bootstrap-datepicker form-control" value="{{old('out')}}" name="out" data-date-format="mm/dd/yy">
                        </div>
                        @if ($errors->has('out'))
                        <span class="help-block">
                            <strong>{{ $errors->first('out') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">التكلفة</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="cost" value="{{old('cost')}}">
                        @if ($errors->has('cost'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cost') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>



                <div class="form-group{{ $errors->has('engineer_id') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">مهندس الصيانة</label>
                    <div class="col-sm-6">
                        <select class="form-control single" name="engineer_id">
                          @foreach($engineers as $engineer)
                            <option value="{{$engineer->id}}">{{$engineer->name}}</option> 
                          @endforeach
                        </select>
                        @if ($errors->has('engineer_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('engineer_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                
                <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">ملاحظات</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="note" value="{{old('note')}}">
                        @if ($errors->has('note'))
                            <span class="help-block">
                                <strong>{{ $errors->first('note') }}</strong>
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
