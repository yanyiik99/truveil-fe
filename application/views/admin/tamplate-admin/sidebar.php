
<!--begin::Header-->
<div id="kt_app_header" class="app-header">
	<!--begin::Header container-->
	<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
		<!--begin::sidebar mobile toggle-->
		<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
			<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
				<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
				<span class="svg-icon svg-icon-1">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
						<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
		</div>
		<!--end::sidebar mobile toggle-->
		<!--begin::Mobile logo-->
		<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
			<a href="#" class="d-lg-none">
				<img alt="Logo" src="<?= base_url()?>assets/img/logo.png" class="theme-light-show h-20px" />
				<img alt="Logo" src="<?= base_url()?>assets/img/logo.png" class="theme-dark-show h-20px" />
			</a>
		</div>
		<!--end::Mobile logo-->
		<!--begin::Header wrapper-->
		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
			<!-- begin::LEFT SIDE HEADEE  -->
				<!--begin::Menu Header wrapper-->
				<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
					<!--begin::Menu-->
					<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
					</div>
					<!--end::Menu-->
				</div>
				<!--end::Menu Header wrapper-->
			<!-- end::LEFT SIDE HEADER  -->

			<!-- begin::RIGHT SIDE HEADER  -->
				<!--begin::Navbar-->
				<div class="d-flex flex-column">
					<div class="app-navbar flex-shrink-0 ">
					</div>

					<div class="app-navbar flex-shrink-0 d-flex justify-content-end mt-3">
					<!--begin::User menu-->
					<div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
						<!--begin::Menu wrapper-->
						<div class="bg-primary-fusion px-3 py-2 rounded-3">
						<!-- <span class="fw-bold">Admin</span> -->
						<div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
							<img class="rounded-circle" src="<?= base_url()?>assets/img/user-pp.webp" alt="user" />
							<span>Admin</span>
						</div>
						</div>
						<!--end::Menu wrapper-->
					</div>
					<!--end::User menu-->
					<!--begin::Header menu toggle-->
					<div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
						<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
						<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
							<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						</div>
					</div>
					<!--end::Header menu toggle-->
					</div>
				</div>
				<!--end::Navbar-->
			<!-- begin::RIGHT SIDE HEADER  -->
		</div>
		<!--end::Header wrapper-->
	</div>
	<!--end::Header container-->
</div>
<!--end::Header-->


<!--begin::Wrapper Content & Sidebar-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

	<!--begin::Sidebar-->
	<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
		<!--begin::Logo-->
		<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
			<!--begin::Logo image-->
			<a href="#">
				<img alt="Logo" src="<?= base_url()?>assets/img/logo.png" class="app-sidebar-logo-default img-fluid mt-20" width="100" />
			</a>
			<!--end::Logo image-->
			<!--begin::Sidebar toggle-->
			<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-sm h-30px w-30px rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
				<span class="svg-icon svg-icon-2 rotate-180">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
						<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Sidebar toggle-->
		</div>
		<!--end::Logo-->
		<!--begin::sidebar menu-->
		<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
			<!--begin::Menu wrapper-->
			<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y pt-20" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
				<!--begin::Menu-->
				<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold pt-20" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-5 <?= @$a_dash ?>" href="<?= base_url()?>admin/dashboard">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
								<span class="svg-icon svg-icon-2">
									<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.5833 4.375H4.375V14.5833H14.5833V4.375Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M30.6248 4.375H20.4165V14.5833H30.6248V4.375Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M30.6248 20.4166H20.4165V30.625H30.6248V20.4166Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M14.5833 20.4166H4.375V30.625H14.5833V20.4166Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title ">Dashboard</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-5 <?= @$a_list ?>" href="<?= base_url()?>admin/dashboard/list_villa">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
								<span class="svg-icon svg-icon-2">
									<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M20.4168 2.91663H8.75016C7.97661 2.91663 7.23475 3.22392 6.68777 3.7709C6.14079 4.31788 5.8335 5.05974 5.8335 5.83329V29.1666C5.8335 29.9402 6.14079 30.682 6.68777 31.229C7.23475 31.776 7.97661 32.0833 8.75016 32.0833H26.2502C27.0237 32.0833 27.7656 31.776 28.3126 31.229C28.8595 30.682 29.1668 29.9402 29.1668 29.1666V11.6666L20.4168 2.91663Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M20.4165 2.91663V11.6666H29.1665" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M23.3332 18.9584H11.6665" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M23.3332 24.7916H11.6665" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M14.5832 13.125H13.1248H11.6665" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">List Villa</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-5 <?= @$a_add ?>" href="<?= base_url()?>admin/dashboard/add_villa">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
								<span class="svg-icon svg-icon-2">
									<svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M17.4998 31.1667C25.554 31.1667 32.0832 24.8241 32.0832 17C32.0832 9.17601 25.554 2.83337 17.4998 2.83337C9.44568 2.83337 2.9165 9.17601 2.9165 17C2.9165 24.8241 9.44568 31.1667 17.4998 31.1667Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M17.5 11.3334V22.6667" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M11.6665 17H23.3332" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title ">Add Villa</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link py-5" href="<?= base_url()?>auth/logout">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
								<span class="svg-icon svg-icon-2">
									<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.875 25.375H6.04167C5.40073 25.375 4.78604 25.1204 4.33283 24.6672C3.87961 24.214 3.625 23.5993 3.625 22.9583V6.04167C3.625 5.40073 3.87961 4.78604 4.33283 4.33283C4.78604 3.87961 5.40073 3.625 6.04167 3.625H10.875" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M19.3335 20.5417L25.3752 14.5L19.3335 8.45837" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M25.375 14.5H10.875" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Log out</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<!--end::Menu-->
			</div>
			<!--end::Menu wrapper-->
		</div>
		<!--end::sidebar menu-->
	</div>
	<!--end::Sidebar-->