@extends('admin.layout')
@section('content')


<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">اضافة قسم</h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="post" action="{{route('category.store')}}"  enctype="multipart/form-data">
                {{csrf_field()}}
                
                <div class="form-group{{ $errors->has('cat_image') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">الصورة</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" name="cat_image" value="{{old('cat_image')}}">
                        @if ($errors->has('cat_image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cat_image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('cat_name') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">الاسم</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="cat_name" value="{{old('cat_name')}}">
                        @if ($errors->has('cat_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cat_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('cat_desc') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">الوصف</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="cat_desc" value="{{old('cat_desc')}}">
                        @if ($errors->has('cat_desc'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cat_desc') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
               

                <div class="form-group{{ $errors->has('min_price') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">اقل سعر</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="min_price" value="{{old('min_price')}}">@if ($errors->has('min_price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('min_price') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('max_price') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">اعلى سعر</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="max_price" value="{{old('max_price')}}">
                        @if ($errors->has('max_price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('max_price') }}</strong>
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

