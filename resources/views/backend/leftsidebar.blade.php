<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <?php 
                    $photo = App\Models\Profile::where('user_id',Auth::user()->id)->select('image')->first();
                    ?>
                    @if(!empty($photo->image))
                <img src="{{asset('/images/user/'.$photo->image)}}" width="48" height="48" alt="User" />
                @else
                <img src="{{asset('/images/neha1.jpg')}}" width="48" height="48" alt="User" />
                @endif
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
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
                        <a href="{{URL::to('/dashboard')}}">
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
                            @if(Auth::user()->hasRole('admin'))
                            <li>
                                <a href="{{URL::to('/designation')}}" class="waves-effect waves-block"><span>Designation</span></a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/department') }}" class="waves-effect waves-block"><span>Department</span></a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="material-icons">perm_media</i>
                            <span>Attendance</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ URL::to('/admin/holiday') }}">
                            <i class="material-icons">content_copy</i>
                            <span>Holiday</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{URL::to('/admin/message')}}">
                            <i class="material-icons">content_copy</i>
                            <span>Message</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:;" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">assignment</i>
                            <span>Leave Management</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{URL::to('/leave')}}" class="waves-effect waves-block"><span>Leave</span></a>
                            </li>
                            @if(Auth::user()->hasRole('admin'))
                            <li>
                                <a href="{{URL::to('/leavetype')}}" class="waves-effect waves-block"><span>Leave Type</span></a>
                            </li>
                            @endif
                            {{-- <li>
                                <a href="{{ URL::to('/leavestatus') }}" class="waves-effect waves-block"><span>Leave Status</span></a>
                            </li> --}}
                        </ul>
                    </li>
                    @if(Auth::user()->hasRole('admin'))

                    <li class="">
                        <a href="index.html">
                            <i class="material-icons">content_copy</i>
                            <span>Payroll</span>
                        </a>
                    </li>
                    @endif
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
                            {{-- <li>
                                <a href="{{URL::to('/users')}}" class="waves-effect waves-block"><span>Users</span></a>
                            </li> --}}
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