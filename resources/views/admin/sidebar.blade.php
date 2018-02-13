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
                <span>الفئات</span>
            </a>
            <div class="sidebar-submenu">

                <ul>
                    <li><a href="{{route('category.index')}}"><span>الفئات</span></a></li>
                    <li><a href="{{route('category.create')}}"><span>اضافة فئة</span></a></li>
                </ul>

            </div>
        </li>

         <li>
            <a href="#" title="Elements">
                <i class="glyph-icon icon-file"></i>
                <span>الأصناف</span>
            </a>
            <div class="sidebar-submenu">

                <ul>
                    <li><a href="{{route('item.index')}}"><span>الأصناف</span></a></li>
                    <li><a href="{{route('item.create')}}"><span>اضافة صنف</span></a></li>
                </ul>

            </div>
        </li>


        <li>
            <a href="#" title="Elements">
                <i class="glyph-icon icon-user"></i>
                <span>مهندسين الصيانة</span>
            </a>
            <div class="sidebar-submenu">

                <ul>
                    <li><a href="{{route('engineer.index')}}"><span>مهندسين الصيانة</span></a></li>
                    <li><a href="{{route('engineer.create')}}"><span>اضافة مهندس</span></a></li>
                </ul>

            </div>
        </li>   

        <li>
            <a href="#" title="Elements">
                <i class="glyph-icon icon-user"></i>
                <span>العملاء</span>
            </a>
            <div class="sidebar-submenu">

                <ul>
                    <li><a href="{{route('customer.index')}}"><span>العملاء</span></a></li>
                    <li><a href="{{route('customer.create')}}"><span>اضافة عميل</span></a></li>
                </ul>

            </div>
        </li>   
        
        <li>
            <a href="#" title="Elements">
                <i class="glyph-icon icon-users"></i>
                <span>المستخدمين</span>
            </a>
            <div class="sidebar-submenu">

                <ul>
                    <li><a href="{{route('user.index')}}"><span>المستخدمين</span></a></li>
                    <li><a href="{{route('user.create')}}"><span>اضافة مستخدم</span></a></li>
                </ul>

            </div>
        </li>
    </ul>

    </div>
</div>