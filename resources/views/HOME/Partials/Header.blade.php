<header class="continer-fluid ">
    <div class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i><a href="mailto:hamzabouri@gmail.com" style="color: white;">
                                Demaa.Al.Amal@gmail.com</a>
                            <span>|</span>
                        </li>
                    </ul>
                </div>
                @if(!(session()->has('User'))&&!(session()->has('Admin')))
                    <div class="col-lg-6 col-md-12">
                        <ul class="ulright">
                            <li><a href="/Sign In" style="color:white;">
                                    <i class="fas fa-user"></i>
                                    Sign In</li>
                            </a>
                        </ul>
                    </div>
                @else
                    @if((session()->has('User')))
                        <div class="col-lg-6 col-md-12">
                            <ul class="ulright">
                                <li><a href="/User" style="color:white;">
                                        <i class="fas fa-user"></i>
                                        Profile</li>
                                </a>
                            </ul>
                        </div>
                    @else
                        <div class="col-lg-6 col-md-12">
                            <ul class="ulright">
                                <li><a href="/Admin" style="color:white;">
                                        <i class="fas fa-user"></i>
                                        Profile</li>
                                </a>
                            </ul>
                        </div>
                    @endif
                @endif

            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-md-3 logo">
                    <a href="/" style="color:white;">
                        <img src="assets/image/new logo.png" alt="">
                    </a>
                </div>
                <div class="col-md-9 nav-col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item {{Request()->is('/') ? 'active':''}}">
                                    <a class="nav-link" href="/">Home
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="/#Publication">Publication</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/#process">Process</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#Contact">Contact</a>
                                </li>
                                <li class="nav-item {{Request()->is('The Centers') ? 'active':''}}">
                                    <a class="nav-link" href="/The Centers">Centers</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
