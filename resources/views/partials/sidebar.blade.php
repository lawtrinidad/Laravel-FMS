@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan

            <hr>

            @can('folder_access')
            <li class="{{ $request->segment(2) == 'folders' ? 'active' : '' }}">
                <a href="{{ route('admin.folders.index') }}">
                    <i class="fa fa-folder"></i>
                    <span class="title">@lang('quickadmin.folders.title')</span>
                </a>
            </li>
            @endcan
            
            @can('file_access')
            <li class="{{ $request->segment(2) == 'files' ? 'active' : '' }}">
                <a href="{{ route('admin.files.index') }}">
                    <i class="fa fa-file"></i>
                    <span class="title">@lang('quickadmin.files.title')</span>
                </a>
            </li>
            @endcan

            {{-- @can('plan_access')
            <li class="{{ $request->segment(2) == 'subscriptions' ? 'active' : '' }}">
                <a href="{{ route('admin.subscriptions.index') }}">
                    <i class="fa fa-credit-card"></i>
                    <span class="title">My Plan</span>
                </a>
            </li>
            @endcan --}}

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-trash"></i>
                    <span class="title">Trash</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                <li class="{{ $request->segment(2) == 'trash-files' ? 'active active-sub' : '' }}">
                        <a href="http://127.0.0.1:8000/admin/files?show_deleted=1">
                            <i class="fa fa-minus"></i>
                            <span class="title">
                                Deleted Files
                            </span>
                        </a>
                    </li>
        
                <li class="{{ $request->segment(2) == 'trash-folder' ? 'active active-sub' : '' }}">
                        <a href="http://127.0.0.1:8000/admin/folders?show_deleted=1">
                            <i class="fa fa-eraser"></i>
                            <span class="title">
                               Deleted Folders
                            </span>
                        </a>
                    </li>
                </ul>

                <hr>

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>

    <div class="sidebar-footer">
        <p>
            By using this service, you understood and agree to the 
            PUP Online Services 
            <a href="#" class="sidebar-link">Terms of Use</a> 
            and 
            <a href="#" class="sidebar-link">Privacy Statement</a>.
        </p>
    </div>
</aside>

