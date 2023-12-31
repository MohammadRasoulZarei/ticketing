<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p> {{ auth()->user()->name }}
                </p>
                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">منو</li>


            <li><a href="{{ route('admin.tickets.index') }}"><i class="fa fa-book"></i> <span>تیکت ها</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>واحد ها</span>
                    <span class="pull-left-container">
                        <i class="fa fa-angle-right pull-left"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('admin.departments.choose') }}"><i class="fa fa-circle-o"></i>
                     واحدهای من </a></li>
                    <li class="active"><a href="{{ route('admin.departments.index') }}"><i class="fa fa-circle-o"></i>
                            لیست واحد ها </a></li>
                    <li><a href="{{ route('admin.departments.create') }}"><i class="fa fa-circle-o"></i> ساخت واحد جدید
                        </a></li>
                </ul>
            </li>
            <li><a href="{{ url('logout') }}"><i class="fa fa-book"></i> <span style="color: red">خروج</span></a></li
                </ul>
    </section>
    <!-- /.sidebar -->
</aside>
