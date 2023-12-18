<header class="main-header">
    <!-- Logo -->
    <a href="{{auth()->user()->role == 'admin'?route('admin.tickets.index'):'#'}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">کاربر</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
                @if (auth()->user()->role == 'admin')
                ورود به پنل مدیریت
                @else
                    پنل کاربر
                @endif
            </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>


        <!-- Delete This after download -->
        <!-- End Delete-->



        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">۱۰</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">۱۰ اعلان جدید</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> ۵ کاربر جدید ثبت نام کردند
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> اخطار دقت کنید
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-red"></i> ۴ کاربر جدید ثبت نام کردند
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green"></i> ۲۵ سفارش جدید
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> نام کاربریتان را تغییر دادید
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">نمایش همه</a></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">نت کپی
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                            <p>
                                نام کاربر

                                <small>مدیریت کل سایت</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#">صفحه من</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">فروش</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">دوستان</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">پروفایل</a>
                            </div>
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">خروج</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>
