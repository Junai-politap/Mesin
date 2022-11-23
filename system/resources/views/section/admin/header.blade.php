<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                @if (auth()->check())
                <img src="{{url("public/$user->foto")}}" alt="user-image" class="rounded-circle" onerror="this.src='http://bootdey.com/img/Content/avatar/avatar1.png'"/>
                @endif
                <span class="pro-user-name ml-1">
                    {{ $user->pegawai->nama }} <i class="mdi mdi-chevron-down"></i> 
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <div class="dropdown-item noti-title">
                    <h6 class="m-0">
                        Welcome ! {{ $user->pegawai->nama }}
                    </h6>
                </div>

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="dripicons-user"></i>
                    <span>My Account</span>
                </a>

               

                <div class="dropdown-divider"></div>

                <a href="{{ url('logout') }}" class="dropdown-item notify-item" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')">
                    <i class="dripicons-power"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>

       

    </ul>

    <ul class="list-unstyled menu-left mb-0">
        <li class="float-left">
            <h1 style="color: white; font-size: 40px;">PPM POLITAP</h1>
        </li>
        <li class="float-left">
            <a class="button-menu-mobile navbar-toggle">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </li>
        
    </ul>
</div>