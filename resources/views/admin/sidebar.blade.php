<div id="page-sidebar">
    <div class="scroll-sidebar">


    <ul id="sidebar-menu">
        {{-- <li class="header"><span>احصائيات عامة</span></li> --}}

        <li>
            <a href="{{url('/')}}" title="Admin Dashboard">
                <i class="glyph-icon icon-linecons-tv"></i>
                <span>فاتورة مبيعات جديدة</span>
            </a>
        </li>
        <li class="divider"></li>
       
        <li class="header"><span>نماذج التحكم</span></li>

        
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
                <i class="glyph-icon icon-file-text-o"></i>
                <span>المصروفات</span>
            </a>
            <div class="sidebar-submenu">

                <ul>
                    <li><a href="{{route('expense.index')}}"><span>المصروفات</span></a></li>
                    <li><a href="{{route('expense.create')}}"><span>اضافة مصروف</span></a></li>
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
                <i class="glyph-icon icon-pencil"></i>
                <span>الفواتير</span>
            </a>
            <div class="sidebar-submenu">

                <ul>
                    <li><a href="{{route('bill.index')}}"><span>فواتير الصيانة</span></a></li>
                    <li><a href="{{route('bill.create')}}"><span>اضافة فاتورة</span></a></li>
                </ul>

            </div>
        </li>   

        <li>
            <a href="{{route('order.index')}}" title="Elements">
                <i class="glyph-icon icon-shopping-cart"></i>
                <span>ادارة المبيعات</span>
            </a>
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
                <i class="glyph-icon icon-user"></i>
                <span>الموردين</span>
            </a>
            <div class="sidebar-submenu">

                <ul>
                    <li><a href="{{route('seller.index')}}"><span>الموردين</span></a></li>
                    <li><a href="{{route('seller.create')}}"><span>اضافة مورد</span></a></li>
                </ul>

            </div>
        </li> 


        <li>
            <a href="#" title="Elements">
                <i class="glyph-icon icon-file-text-o"></i>
                <span>التقارير</span>
            </a>
            <div class="sidebar-submenu">

                <ul>
                    <li><a href="{{route('report.index')}}"><span>التقارير</span></a></li>
                    <li><a href="{{route('report.bill')}}"><span>تقارير فاتورة الصيانة</span></a></li>
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