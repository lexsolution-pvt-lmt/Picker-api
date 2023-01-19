<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Auction </span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="{{url('admin/auctions')}}">View Auction</a></li>
                            <li><a href="{{url('admin/auctions/create')}}">Create Auction</a></li>
							<li><a href="{{url('admin/categories')}}">Auction Caregory Managment</a></li>
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-381-television"></i>
							<span class="nav-text">Payment</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('Payments')}}">View Payment Details</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">All User</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('admin/users')}}">View All User </a></li>
                            <li><a href="{{url('admin/users/create')}}">Create User</a></li>
                        </ul>
                    </li>
                </ul>
            
				<br><br><br><br><br><br><br><br><br><br>
				<div class="copyright">
					<p class="fs-14 font-w200"><strong class="font-w400">Picker Auction Website</strong> © 2023 All Rights Reserved</p>
					<p>Made with <i class="fa fa-heart"></i> by LexSolution</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->