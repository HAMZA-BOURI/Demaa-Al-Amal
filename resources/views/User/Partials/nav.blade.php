<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li >
                    <a href="/User" class={{Request()->is('User') ? 'active':''}}>
                        <i class="fa-solid fa-user"></i><span>Profile</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fa-solid fa-newspaper" ></i><span>Publication</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('listPub')}}" class={{Request()->is('User/Publication list') ? 'active':''}}>Publications List</a></li>
                        <li><a href="{{route('FormADDPub')}}" class={{Request()->is('User/ADD Publication') ? 'active':''}}>Add Publication</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('Logout')}}"
                    ><i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
