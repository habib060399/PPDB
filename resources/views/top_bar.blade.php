<div class="topbar-main">
    <div class="container-fluid">

        <!-- Logo-->
        <div>
            <a href="index.html" class="logo">
                 <img src="{{url('assets/images/logo-light.png')}}" class="logo-lg" alt="" height="26">
                <img src="{{url('assets/images/logo-sm.png')}}" class="logo-sm" alt="" height="28">
            </a>
        </div>
        <!-- End Logo-->

        <div class="menu-extras topbar-custom navbar p-0">
            
            <ul class="mb-0 nav navbar-right ml-auto list-inline">                           
               
                <li class="dropdown">
                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                        <img src="{{url('assets/images/users/avatar-1.jpg')}}" alt="user-img" class="rounded-circle">
                        <span class="profile-username">
                                                    Kenny <span class="mdi mdi-chevron-down font-15"></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu">                                                
                        <li>
                            <form action="{{route('out')}}" method="post">
                                @csrf                            
                            <button class="dropdown-item" type="submit"> Logout</button>
                            </form>
                        </li>                        
                    </ul>
                </li>

                <li class="menu-item dropdown notification-list list-inline-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

            </ul>

        </div>
        <!-- end menu-extras -->

        <div class="clearfix"></div>

    </div>
    <!-- end container -->
</div>