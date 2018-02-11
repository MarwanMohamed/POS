<div id="page-sidebar">
    <div class="scroll-sidebar">


    <ul id="sidebar-menu">
        <li class="header"><span>احصائيات عامة</span></li>

        <li>
            <a href="{{url('/')}}" title="Admin Dashboard">
                <i class="glyph-icon icon-linecons-tv"></i>
                <span>لوحة التحكم</span>
            </a>
        </li>
        <li class="divider"></li>
       
        <li class="header"><span>نماذج التحكم</span></li>

        {{-- <li><a href="{{route('category.index')}}">الاقسام</a></li> --}}
        
        <li>
            <a href="#" title="Elements">
                <i class="glyph-icon icon-shopping-cart"></i>
                <span>الاقسام</span>
            </a>
            <div class="sidebar-submenu">

                <ul>
                    <li><a href="{{route('category.index')}}"><span>الاقسام</span></a></li>
                    <li><a href="{{route('category.create')}}"><span>اضافة قسم</span></a></li>
                </ul>

            </div>
        </li>

       

        

   
    </ul>

    </div>
</div>