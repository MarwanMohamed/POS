@extends('admin.layout')
@section('content')


<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">اضافة فة</h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="post" action="{{route('category.update', $category->cat_id)}}"  enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('put')}}
                
                <div class="form-group{{ $errors->has('cat_image') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">الصورة</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" name="cat_image" value="{{old('cat_image')}}">
                        @if ($errors->has('cat_image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cat_image') }}</strong>
                            </span>
                        @endif
                        <br>
                        @if($category->cat_image)
                        <img src="{{asset('uploads/'. $category->cat_image)}}" width="120" height="80">
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('cat_name') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">اسم الفئة</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="cat_name" value="{{old('cat_name', $category->cat_name)}}">
                        @if ($errors->has('cat_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cat_name') }}</strong>
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

