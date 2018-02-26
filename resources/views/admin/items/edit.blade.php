@extends('admin.layout')
@section('content')


<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">تعديل الصنف</h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="post" action="{{route('item.update', $item->id)}}"  enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('put')}}

                <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">كود الصنف</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="code" value="{{old('code', $item->code)}}">
                        @if ($errors->has('code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">اسم الصنف</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" value="{{old('name', $item->name)}}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
               

                <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">الفئة الرئيسية</label>
                    <div class="col-sm-6">
                        <select class="form-control single" name="category_id">
                          @foreach($categories as $category)
                            <option value="{{$category->cat_id}}" @if($item->category_id == $category->cat_id) selected @endif>{{$category->cat_name}}</option> 
                          @endforeach
                        </select>
                        @if ($errors->has('category_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('category_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }} @if(Session::has('errorr')) has-error @endif">
                    <label class="col-sm-3 control-label">الكمية</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="amount" value="{{old('amount', $item->amount)}}">
                        @if ($errors->has('amount'))
                            <span class="help-block">
                                <strong>{{ $errors->first('amount') }}</strong>
                            </span>
                        @endif
                        <span class="help-block">
                            <strong>{{ Session::get('errorr') }}</strong>
                        </span>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('buy_price') ? ' has-error' : '' }} @if(Session::has('buyerror')) has-error @endif">
                    <label class="col-sm-3 control-label">سعر الشراء</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="buy_price" value="{{old('buy_price', $item->buy_price)}}">
                        @if ($errors->has('buy_price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('buy_price') }}</strong>
                            </span>
                        @endif
                        <span class="help-block">
                            <strong>{{ Session::get('buyerror') }}</strong>
                        </span>
                    </div>
                </div>


                <div class="form-group{{ $errors->has('sell_price') ? ' has-error' : '' }} @if(Session::has('errorSell')) has-error @endif @if(Session::has('sellerror')) has-error @endif">
                    <label class="col-sm-3 control-label">سعر البيع</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="sell_price" value="{{old('sell_price', $item->sell_price)}}">
                        @if ($errors->has('sell_price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sell_price') }}</strong>
                            </span>
                        @endif
                        <span class="help-block">
                            <strong>{{ Session::get('errorSell') }}</strong>
                        </span>
                        <span class="help-block">
                            <strong>{{ Session::get('sellerror') }}</strong>
                        </span>
                    </div>
                </div>

                
                <button type="submit" class="btn btn-primary">حفظ</button>
            </form>
        </div>
    </div>
</div>

@stop

