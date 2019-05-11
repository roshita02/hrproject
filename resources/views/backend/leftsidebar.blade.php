<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                <img src="{{asset('/images/neha1.jpg')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Neha Khadka</div>
                    <div class="email">neha.kd4866@gmail.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{URL::to('/logout')}}"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">BACKEND SIDEBAR</li>
                    <li class="">
                        <a href="{{URL::to('/admin/dashboard')}}">
                            <i class="material-icons">view_list</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                     <li class="">
                        <a href="javascript:;" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">assignment</i>
                            <span>Employee Management</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{URL::to('/employee')}}" class="waves-effect waves-block"><span>Employee</span></a>
                            </li>
                            <li>
                                <a href="{{URL::to('/designation')}}" class="waves-effect waves-block"><span>Designation</span></a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/department') }}" class="waves-effect waves-block"><span>Department</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="material-icons">perm_media</i>
                            <span>Attendance</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="index.html">
                            <i class="material-icons">content_copy</i>
                            <span>Holiday</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="index.html">
                            <i class="material-icons">content_copy</i>
                            <span>Leave</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="index.html">
                            <i class="material-icons">content_copy</i>
                            <span>Payroll</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="index.html">
                            <i class="material-icons">content_copy</i>
                            <span>Task</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="index.html">
                            <i class="material-icons">content_copy</i>
                            <span>Message</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="index.html">
                            <i class="material-icons">content_copy</i>
                            <span>Job Application</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:;" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">assignment</i>
                            <span>User Management</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{URL::to('/users')}}" class="waves-effect waves-block"><span>Users</span></a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/roles') }}" class="waves-effect waves-block"><span>Roles</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
    @include('backend.footer')

        </aside>
        <!-- #END# Left Sidebar -->
        @include('backend.rightsidebar')
    </section>