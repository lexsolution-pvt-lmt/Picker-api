

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{url('admin/dashboard')}}" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('assets/images/logo.png')}}" alt="">
                <img class="logo-compact" src="{{ asset('assets/images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{ asset('assets/images/logo-text.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
        
		
		
		
		

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts/inc/admin-sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->


