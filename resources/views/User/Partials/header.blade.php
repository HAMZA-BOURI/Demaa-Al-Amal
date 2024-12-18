<div class="header">
    <div class="header-left active">
        <a href="/" class="logo">
            <img src="/User_dashboard/img/new logo.png" alt=""/>
        </a>
        <a href="index.html" class="logo-small">
            <img src="/User_dashboard/img/icon-site.png" alt=""/>
        </a>
        <a id="toggle_btn" href="javascript:void(0);"> </a>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
    </a>


    <ul class="nav user-menu">
        @if(!($user->ID_Donor==null))
        <li class="nav-item dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <i class="fa-regular fa-heart"></i><span
                    class="badge rounded-pill">{{$life}}</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <i class="fa-solid fa-hand-holding-droplet"></i><span
                    class="badge rounded-pill">{{$donorCount}}</span>
            </a>
        </li>
        @endif
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="/User_dashboard/img Blood/{{$user->Type_Blood}}.jpg" alt="">
                            <span class="status online"></span></span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <div class="profileset">
                                <span class="user-img"><img src="/User_dashboard/img Blood/{{$user->Type_Blood}}.jpg"
                                                            alt="">
                                    <span class="status online"></span></span>
                        <div class="profilesets">
                            <h6>{{$user->name}} {{$user->Prenom}}</h6>
                            <h5>User</h5>
                        </div>
                    </div>
                    <hr class="m-0">
                    <a class="dropdown-item" href="/User"> <i class="me-2" data-feather="user"></i> My
                        Profile</a>
                    <hr class="m-0">
                    <a class="dropdown-item logout pb-0" href="{{route('Logout')}}"><img
                            src="/User_dashboard/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
                </div>
            </div>
        </li>

    </ul>


    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
           aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="generalsettings.html">Settings</a>
            <a class="dropdown-item" href="signin.html">Logout</a>
        </div>
    </div>
</div>
</div>
