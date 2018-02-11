@extends('admin.layout')
@section('content')



<!-- Sparklines charts -->

<script type="text/javascript" src="{{asset('assets/widgets/charts/sparklines/sparklines.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/charts/sparklines/sparklines-demo.js')}}"></script>

<!-- PieGage charts -->

<script type="text/javascript" src="{{asset('assets/widgets/charts/piegage/piegage.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/widgets/charts/piegage/piegage-demo.js')}}"></script>


<div class="row">
   {{--  <div class="col-md-4">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    <span>عدد طلبات المقدمين فى اخر دفعه دراسية</span>
                    <span>{{$students}}</span>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="{{route('registration.index')}}" title="">
                        كل الطلبات
                    </a>
                </div>
                <a href="#" class="btn btn-default float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    <span>عدد الاقساط المتاخرة حتى الان</span>
                    <span>{{$installments}}</span>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="{{route('installments.index')}}" title="">
                        كل الاقساط
                    </a>
                </div>
                <a href="#" class="btn btn-default float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

     <div class="col-md-4">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    <span>عدد المصروفات الاجبارية المتاخرة</span>
                    <span>{{$expenses}}</span>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="{{route('expense.NotPaid')}}" title="">
                        كل الاقساط
                    </a>
                </div>
                <a href="#" class="btn btn-default float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    <span>عدد المستخدمين حتى الان</span>
                    <span>{{$users}}</span>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="{{route('users.index')}}" title="">
                        كل المستخدمين
                    </a>
                </div>
                <a href="#" class="btn btn-default float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    <span>عدد الملحوظات لم تقرا حتى الان</span>
                    <span>{{$notes}}</span>
                </div>
               
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="{{route('notes.index')}}" title="">
                        كل الملحوظات
                    </a>
                </div>
                <a href="#" class="btn btn-default float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-angle-right"></i>
                </a>
            </div>
        </div>
    </div> --}}
</div>

                    </div>



            </div>
        </div>

@stop