@extends('layouts.master')

 
@selection('title','Dashboard')

 


<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:;" role="button" data-toggle="dropdown">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z" fill="#ff8f16f2"/>
									</svg>
									<span class="badge light text-white bg-primary">1</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Not Completed</h6>
														<small class="d-block">11 january 2023 - 02:26 PM</small>
													</div>
												</div>
											</li>
											
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:;">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
							
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:;" role="button" data-toggle="dropdown">
                                    <img src="{{ asset('assets/images/avatar/5.png')}}" width="20" alt=""/>
									<div class="header-info">
										<span>Admin</strong></span>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{url('/login')}}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
	

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					<div class="mr-auto d-none d-lg-block">
						<h3 class="text-black font-w600">Welcome to Picker!</h3>
						<p class="mb-0 fs-18">Auction Website Dashboard</p>
					</div>
					
					<div class="input-group search-area ml-auto d-inline-flex">
						<input type="text" class="form-control" placeholder="Search here">
						<div class="input-group-append">
							<button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
						</div>
					</div>
					<a href="javascript:void(0);" class="settings-icon  ml-3"><i class="flaticon-381-settings-2 mr-0"></i></a>
				</div>
				<div class="row">	
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card gradient-bx text-white bg-danger rounded">	
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body">
										<p class="mb-1">Total Users</p>
										<div class="d-flex flex-wrap">
											<h2 class="fs-40 font-w600 text-white mb-0 mr-3">783k</h2>
											<div>	
												<svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.56244 9.25C6.35869 11.6256 2.26214 16.0091 0.999939 17.5H26.4374V1L16.8124 13.375L8.56244 9.25Z" fill="url(#paint0_linear4)"/>
													<path d="M0.999939 17.5C2.26214 16.0091 6.35869 11.6256 8.56244 9.25L16.8124 13.375L26.4374 1" stroke="white" stroke-width="2"/>
													<defs>
													<linearGradient id="paint0_linear4" x1="13.7187" y1="3.0625" x2="14.7499" y2="17.5" gradientUnits="userSpaceOnUse">
													<stop stop-color="white" stop-opacity="0.73" offset="0.1"/>
													<stop offset="1" stop-color="white" stop-opacity="0"/>
													</linearGradient>
													</defs>
												</svg>
												<div class="fs-14">+4%</div>
											</div>
										</div>
									</div>
									<span class="border rounded-circle p-4">
										<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M23.6667 0.333311C21.1963 0.264777 18.7993 1.17744 17 2.87164C15.2008 1.17744 12.8038 0.264777 10.3334 0.333311C8.9341 0.337244 7.55292 0.649469 6.28803 1.24778C5.02315 1.84608 3.90564 2.71577 3.01502 3.79498C-0.039984 7.45998 -0.261651 13.3333 1.19668 17.5966C1.21002 17.6266 1.22002 17.6566 1.23335 17.6866C3.91168 25.3333 15.2717 33.6666 17 33.6666C18.6983 33.6666 30.025 25.5166 32.7667 17.6866C32.78 17.6566 32.79 17.6266 32.8034 17.5966C34.2417 13.4016 34.0867 7.51498 30.985 3.79498C30.0944 2.71577 28.9769 1.84608 27.712 1.24778C26.4471 0.649469 25.0659 0.337244 23.6667 0.333311ZM17 30.03C14.6817 28.5233 8.23168 24 5.30335 18.6666H12C12.2743 18.6667 12.5444 18.599 12.7863 18.4696C13.0282 18.3403 13.2344 18.1532 13.3867 17.925L14.83 15.7583L17.0867 22.525C17.1854 22.8207 17.3651 23.0829 17.6054 23.2816C17.8456 23.4803 18.1368 23.6076 18.4458 23.6491C18.7548 23.6906 19.0693 23.6446 19.3535 23.5163C19.6376 23.388 19.8801 23.1825 20.0533 22.9233L22.8917 18.6666H28.6984C25.7684 24 19.3183 28.5233 17 30.03ZM29.975 15.3333H22C21.7257 15.3333 21.4556 15.4009 21.2137 15.5303C20.9718 15.6597 20.7656 15.8468 20.6133 16.075L19.17 18.2416L16.9133 11.475C16.8146 11.1792 16.6349 10.9171 16.3947 10.7184C16.1544 10.5196 15.8632 10.3923 15.5542 10.3508C15.2452 10.3093 14.9307 10.3553 14.6466 10.4837C14.3624 10.612 14.1199 10.8174 13.9467 11.0766L11.1084 15.3333H4.02502C3.35835 12.1816 3.50502 8.41164 5.57668 5.92831C6.151 5.22081 6.87614 4.65057 7.69911 4.25927C8.52209 3.86797 9.42209 3.6655 10.3334 3.66664C15.445 3.66664 14.9117 7.16664 16.9817 7.18664H17C19.0733 7.18664 18.5483 3.66664 23.6667 3.66664C24.5785 3.665 25.4792 3.86723 26.3027 4.25855C27.1263 4.64987 27.852 5.22037 28.4267 5.92831C30.4867 8.40331 30.6467 12.1666 29.975 15.3333Z" fill="white"/>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card gradient-bx text-white bg-success rounded">	
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body">
										<p class="mb-1">Products</p>
										<div class="d-flex flex-wrap">
											<h2 class="fs-40 font-w600 text-white mb-0 mr-3">76</h2>
											<div>	
												<svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M18.875 9.25C21.0787 11.6256 25.1753 16.0091 26.4375 17.5H1V1L10.625 13.375L18.875 9.25Z" fill="url(#paint0_linear1)"/>
													<path d="M26.4375 17.5C25.1753 16.0091 21.0787 11.6256 18.875 9.25L10.625 13.375L1 1" stroke="white" stroke-width="2"/>
													<defs>
													<linearGradient id="paint0_linear1" x1="13.7188" y1="3.0625" x2="12.6875" y2="17.5" gradientUnits="userSpaceOnUse">
													<stop stop-color="white" stop-opacity="0.73" offset="0.1"/>
													<stop offset="1" stop-color="white" stop-opacity="0"/>
													</linearGradient>
													</defs>
												</svg>
												<div class="fs-14">-4%</div>
											</div>
										</div>
									</div>
									<span class="border rounded-circle p-4">
										<svg width="34" height="34" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M37.3333 15.6666C37.3383 14.7488 37.0906 13.8473 36.6174 13.061C36.1441 12.2746 35.4635 11.6336 34.6501 11.2084C33.8368 10.7831 32.9221 10.5899 32.0062 10.65C31.0904 10.7101 30.2087 11.021 29.4579 11.5489C28.707 12.0767 28.1159 12.8011 27.7494 13.6425C27.3829 14.484 27.255 15.4101 27.3799 16.3194C27.5047 17.2287 27.8774 18.086 28.4572 18.7976C29.0369 19.5091 29.8013 20.0473 30.6667 20.3533V25.6666C30.6667 27.8768 29.7887 29.9964 28.2259 31.5592C26.6631 33.122 24.5435 34 22.3333 34C20.1232 34 18.0036 33.122 16.4408 31.5592C14.878 29.9964 14 27.8768 14 25.6666V23.8666C16.7735 23.4642 19.3097 22.0777 21.1456 19.9603C22.9815 17.8429 23.9946 15.1358 24 12.3333V2.33329C24 1.89127 23.8244 1.46734 23.5118 1.15478C23.1993 0.842221 22.7754 0.666626 22.3333 0.666626H17.3333C16.8913 0.666626 16.4674 0.842221 16.1548 1.15478C15.8423 1.46734 15.6667 1.89127 15.6667 2.33329C15.6667 2.77532 15.8423 3.19924 16.1548 3.5118C16.4674 3.82436 16.8913 3.99996 17.3333 3.99996H20.6667V12.3333C20.6667 14.5434 19.7887 16.663 18.2259 18.2258C16.6631 19.7887 14.5435 20.6666 12.3333 20.6666C10.1232 20.6666 8.00358 19.7887 6.44077 18.2258C4.87797 16.663 4 14.5434 4 12.3333V3.99996H7.33333C7.77536 3.99996 8.19928 3.82436 8.51184 3.5118C8.8244 3.19924 9 2.77532 9 2.33329C9 1.89127 8.8244 1.46734 8.51184 1.15478C8.19928 0.842221 7.77536 0.666626 7.33333 0.666626H2.33333C1.8913 0.666626 1.46738 0.842221 1.15482 1.15478C0.842259 1.46734 0.666664 1.89127 0.666664 2.33329V12.3333C0.672024 15.1358 1.68515 17.8429 3.52106 19.9603C5.35697 22.0777 7.8932 23.4642 10.6667 23.8666V25.6666C10.6667 28.7608 11.8958 31.7283 14.0837 33.9162C16.2717 36.1041 19.2391 37.3333 22.3333 37.3333C25.4275 37.3333 28.395 36.1041 30.5829 33.9162C32.7708 31.7283 34 28.7608 34 25.6666V20.3533C34.9723 20.0131 35.8151 19.3797 36.4122 18.5402C37.0092 17.7008 37.3311 16.6967 37.3333 15.6666Z" fill="white"/>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-3 col-xxl-4 col-lg-4">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h3 class="fs-20 mb-0 text-black">Revenue</h3>
								<div class="dropdown d-inline-block">
									<div class="btn-link text-primary dropdown-toggle mb-0 fs-14 text-primary" data-toggle="dropdown">
										<span class="font-w500">2023</span>
									</div>
									<div class="dropdown-menu dropdown-menu-left">
										<a class="dropdown-item" href="javascript:void(0);">2020</a>
										<a class="dropdown-item" href="javascript:void(0);">2023</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div>
									<span class="text-info fs-26 font-w600 mr-3">$41,512k</span>
									<span class="text-secondary fs-18 font-w400">$25,612k</span>
								</div>
								<div id="line-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8 col-lg-8">
						<div class="card">	
							<div class="card-header d-sm-flex d-block border-0 pb-0">
								<h3 class="fs-20 mb-3 mb-sm-0 text-black">Auction Statistic</h3>
								<div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mt-sm-0">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">
												Monthly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#weekly" role="tab">
												Weekly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#today" role="tab">
												Today
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body">
								<div id="chartBar"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8 col-lg-7">
						<div class="card">	
							<div class="card-header border-0 pb-0">
								<h3 class="fs-20 mb-0 text-black">Top Sellers</h3>
								<a href="" class="text-primary font-w500">View more >></a>
							</div>
							<div class="card-body">
								<div class="assigned-doctor owl-carousel">
									<div class="items">
										<div class="text-center">
											<img src="images/doctors/5.jpg" alt="" >
											
											<h5 class="fs-16 mb-1 font-w600"><a class="text-black" href="page-review.html">Alexandro Jr.</a></h5>
											<span class="text-primary mb-2 d-block">Seller</span>
											<p class="fs-12">ID 001</p>
											<div class="social-media">
												<a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
												<a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
												<a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
											</div>
										</div>
									</div>
									<div class="items">
										<div class="text-center">
											<img src="images/doctors/1.jpg" alt="" >
											
											<h5 class="fs-16 mb-1 font-w600"><a class="text-black" href="page-review.html">Chandana bandara</a></h5>
											<span class="text-primary mb-2 d-block">Seller</span>
											<p class="fs-12">ID 002</p>
											<div class="social-media">
												<a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
												<a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
												<a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
											</div>
										</div>
									</div>
									<div class="items">
										<div class="text-center">
											<img src="images/doctors/2.jpg" alt="" >
											
											<h5 class="fs-16 mb-1 font-w600"><a class="text-black" href="page-review.html">Hasitha Thushan</a></h5>
											<span class="text-primary mb-2 d-block">Seller</span>
											<p class="fs-12">Id 003</p>
											<div class="social-media">
												<a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
												<a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
												<a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-5">
                        <div class="card border-0 pb-0">
                            <div class="card-header flex-wrap border-0 pb-0">
                                <h3 class="fs-20 mb-0 text-black">New Auctions</h3>
								<a href="patient-list.html" class="text-primary font-w500">View more >></a>
                            </div>
                            <div class="card-body"> 
                                <div id="DZ_W_Todo2" class="widget-media dz-scroll ps ps--active-y height320">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel flex-wrap">
												<div class="media mr-3">
													<img class="rounded-circle" alt="image" width="50" src="images/widget/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1"><a class="text-black" href="patient-details.html">Aziz Bakree</a></h5>
													<span class="fs-14">24 Years</span>
												</div>
												<a href="javascript:void(0);" class="text-warning mt-2">Pending</a>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel flex-wrap">
												<div class="media mr-3">
													<img class="rounded-circle" alt="image" width="50" src="images/widget/2.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1"><a class="text-black" href="patient-details.html">Griezerman</a></h5>
													<span class="fs-14">24 Years</span>
												</div>
												<a href="javascript:void(0);" class="text-info mt-2">On Recovery</a>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel flex-wrap">
												<div class="media mr-3">
													<img class="rounded-circle" alt="image" width="50" src="images/widget/3.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1"><a class="text-black" href="patient-details.html">Oconner</a></h5>
													<span class="fs-14">24 Years</span>
												</div>
												<a href="javascript:void(0);" class="text-danger mt-2">Rejected</a>
											</div>
                                        </li>
										 <li>
                                            <div class="timeline-panel flex-wrap">
												<div class="media mr-3">
													<img class="rounded-circle" alt="image" width="50" src="images/widget/5.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1"><a class="text-black" href="patient-details.html">Uli Trumb</a></h5>
													<span class="fs-14">24 Years</span>
												</div>
												<a href="javascript:void(0);" class="text-primary mt-2">Recovered</a>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel flex-wrap">
												<div class="media mr-3">
													<img class="rounded-circle" alt="image" width="50" src="images/widget/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1"><a class="text-black" href="patient-details.html">Aziz Bakree</a></h5>
													<span class="fs-14">24 Years</span>
												</div>
												<a href="javascript:void(0);" class="text-warning mt-2">Pending</a>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel flex-wrap">
												<div class="media mr-3">
													<img class="rounded-circle" alt="image" width="50" src="images/widget/2.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1"><a class="text-black" href="patient-details.html">Aziz Bakree</a></h5>
													<span class="fs-14">24 Years</span>
												</div>
												<a href="javascript:void(0);" class="text-warning mt-2">Pending</a>
											</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


