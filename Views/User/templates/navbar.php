<!-- Header -->
<div class="app-header header">
	<div class="container-fluid">
		<div class="d-flex justify-content-between justify-content-md-start">
			<a class="header-brand d-none" href="user/dashboard">
				<img src="admin/assets/img/{logo}" class="header-brand-img mobile-icon" alt="logo">
				<img src="admin/assets/img/{logo}" class="header-brand-img desktop-logo mobile-logo" alt="logo">
			</a>
			<a aria-label="Hide Sidebar" class="app-sidebar__toggle order-2 order-md-1 mr-5 d-md-none" data-toggle="sidebar" href="javascript:void(0)">
				<svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<line x1="0.75" y1="-0.75" x2="20.25" y2="-0.75" transform="matrix(-1 0 0 1 21 2)" stroke="white" stroke-width="1.5" stroke-linecap="round" />
					<line x1="0.75" y1="-0.75" x2="14.25" y2="-0.75" transform="matrix(-1 0 0 1 21 9)" stroke="white" stroke-width="1.5" stroke-linecap="round" />
					<line x1="0.75" y1="-0.75" x2="9.25" y2="-0.75" transform="matrix(-1 0 0 1 21 16)" stroke="white" stroke-width="1.5" stroke-linecap="round" />
				</svg>
			</a>
			<div class="header-search d-none d-md-flex order-md-2">
				<form class="form-inline">
					<div class="search-element">
						<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
						<button class="btn btn-primary-color" type="submit">
							<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
								<path d="M0 0h24v24H0V0z" fill="none" />
								<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
							</svg>
						</button>
					</div>
				</form>
			</div>
			<div class="d-flex ml-md-auto header-right-icons header-search-icon order-1 order-md-3">
				<button class="navbar-toggler navresponsive-toggler d-md-none order-2 order-md-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
					<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="navbar-toggler-icon">
						<path d="M0 0h24v24H0V0z" fill="none" />
						<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
					</svg>
				</button>
				<div class="dropdown d-none d-lg-flex order-md-2">
					<a class="nav-link icon full-screen-link nav-link-bg">
						<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="fullscreen-button">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<circle cx="12" cy="12" opacity=".3" r="3" />
							<path d="M7 12c0 2.76 2.24 5 5 5s5-2.24 5-5-2.24-5-5-5-5 2.24-5 5zm8 0c0 1.65-1.35 3-3 3s-3-1.35-3-3 1.35-3 3-3 3 1.35 3 3zM3 19c0 1.1.9 2 2 2h4v-2H5v-4H3v4zM3 5v4h2V5h4V3H5c-1.1 0-2 .9-2 2zm18 0c0-1.1-.9-2-2-2h-4v2h4v4h2V5zm-2 14h-4v2h4c1.1 0 2-.9 2-2v-4h-2v4z" />
						</svg>
					</a>
				</div><!-- FULL-SCREEN -->
				<div class="dropdown d-none d-md-flex message order-md-3">
				    {if 1==2}
					<a class="nav-link icon text-center" href="user/mail/inbox">
						<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3" />
							<path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z" />
						</svg>
						{if $mail_inbox_count > 0}<span class="nav-unread badge badge-danger badge-pill pulse">{mail_inbox_count}</span>{endif}
					</a
					{endif}
				</div><!-- MESSAGE-BOX -->
				<div class="dropdown d-none d-xl-flex country-selector order-md-1">
					<a href="#" class="d-flex nav-link  leading-none" data-toggle="dropdown" aria-expanded="true">
						<img src="user/assets/images/flags/us_flag.jpg" alt="img" class="mr-2 align-self-center d-md-none">
						<div>
							<strong class="text-dark">English</strong>
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow d-none">
						<a href="#" class="dropdown-item d-flex pb-3">
							<img src="user/assets/images/flags/french_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
							<div>
								<strong>French</strong>
							</div>
						</a>
						<a href="#" class="dropdown-item d-flex pb-3">
							<img src="user/assets/images/flags/germany_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
							<div>
								<strong>Germany</strong>
							</div>
						</a>
						<a href="#" class="dropdown-item d-flex pb-3">
							<img src="user/assets/images/flags/italy_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
							<div>
								<strong>Italy</strong>
							</div>
						</a>
						<a href="#" class="dropdown-item d-flex pb-3">
							<img src="user/assets/images/flags/russia_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
							<div>
								<strong>Russia</strong>
							</div>
						</a>
						<a href="#" class="dropdown-item d-flex pb-3">
							<img src="user/assets/images/flags/spain_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
							<div>
								<strong>Spain</strong>
							</div>
						</a>
					</div>
				</div>
				<div class="dropdown profile-1 my-1 my-lg-0 order-md-3">
					<a href="#" data-toggle="dropdown" class="nav-link pl-2 pr-2  leading-none d-flex">
						<span>
							<img src="users/{username|lower}/profile/{profile_pic}" alt="profile-user" class="avatar  mr-xl-3 profile-user brround cover-image navatar">
						</span>
						<div class="text-center mt-1 ml-1 ml-lg-0">
							<h6 class="text-dark mb-0 fs-13 font-weight-semibold">{fullname|title}</h6>
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="ml-2 d-none d-md-block" fill="#fff">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
						</svg>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
						<a class="dropdown-item" href="user/profile">
							<i class="dropdown-icon mdi mdi-account-outline"></i> My Profile
						</a>
						<a class="dropdown-item" href="user/profile">
							<i class="dropdown-icon  mdi mdi-settings"></i> Account Settings
						</a>
						{if 1==2}
						<a class="dropdown-item" href="user/mail/inbox">
							<span class="float-right"></span>
							<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
						</a>
						<a class="dropdown-item" href="user/mail/compose">
							<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
						</a>
						{endif}
						<a class="dropdown-item" href="{site_support_url}/login">
							<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
						</a>
						<a class="dropdown-item" href="user/logout">
							<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- responsive-navbar -->
<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
	<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
		<div class="d-flex order-lg-2 ml-auto">
			<div class="dropdown d-sm-flex">
				<a href="#" class="nav-link icon" data-toggle="dropdown">
					<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
						<path d="M0 0h24v24H0V0z" fill="none" />
						<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
					</svg>
				</a>
				<div class="dropdown-menu header-search dropdown-menu-left">
					<div class="input-group w-100 p-2">
						<input type="text" class="form-control " placeholder="Search....">
						<div class="input-group-append ">
							<button type="button" class="btn btn-primary ">
								<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div><!-- SEARCH -->
			<div class="dropdown d-md-flex">
				<a class="nav-link icon full-screen-link nav-link-bg">
					<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="fullscreen-button">
						<path d="M0 0h24v24H0V0z" fill="none" />
						<circle cx="12" cy="12" opacity=".3" r="3" />
						<path d="M7 12c0 2.76 2.24 5 5 5s5-2.24 5-5-2.24-5-5-5-5 2.24-5 5zm8 0c0 1.65-1.35 3-3 3s-3-1.35-3-3 1.35-3 3-3 3 1.35 3 3zM3 19c0 1.1.9 2 2 2h4v-2H5v-4H3v4zM3 5v4h2V5h4V3H5c-1.1 0-2 .9-2 2zm18 0c0-1.1-.9-2-2-2h-4v2h4v4h2V5zm-2 14h-4v2h4c1.1 0 2-.9 2-2v-4h-2v4z" />
					</svg>
				</a>
			</div><!-- FULL-SCREEN -->
			{if 1==2}
			<div class="dropdown d-md-flex message">
				<a class="nav-link icon text-center" href="user/mail/inbox">
					<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
						<path d="M0 0h24v24H0V0z" fill="none" />
						<path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3" />
						<path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z" />
					</svg>
					{if $mail_inbox_count > 0}<span class="nav-unread badge badge-danger badge-pill pulse">{mail_inbox_count}</span>{endif}
				</a>
			</div><!-- MESSAGE-BOX -->
			{endif}
			<div class="dropdown d-md-flex country-selector">
				<a href="#" class="d-flex nav-link icon leading-none" data-toggle="dropdown" aria-expanded="true">
					<img src="user/assets/images/flags/us_flag.jpg" alt="img" class="mr-2 align-self-center">
					<div>
						<strong class="text-dark fs-13">English</strong>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
					<a href="#" class="dropdown-item d-flex pb-3">
						<img src="user/assets/images/flags/french_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
						<div>
							<strong>French</strong>
						</div>
					</a>
					<a href="#" class="dropdown-item d-flex pb-3">
						<img src="user/assets/images/flags/germany_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
						<div>
							<strong>Germany</strong>
						</div>
					</a>
					<a href="#" class="dropdown-item d-flex pb-3">
						<img src="user/assets/images/flags/italy_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
						<div>
							<strong>Italy</strong>
						</div>
					</a>
					<a href="#" class="dropdown-item d-flex pb-3">
						<img src="user/assets/images/flags/russia_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
						<div>
							<strong>Russia</strong>
						</div>
					</a>
					<a href="#" class="dropdown-item d-flex pb-3">
						<img src="user/assets/images/flags/spain_flag.jpg" alt="flag-img" class="avatar  mr-3 align-self-center">
						<div>
							<strong>Spain</strong>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div><!-- End responsive-navbar -->
<!-- Header -->
<!-- App-Header -->
<!--app-content open-->
<div class="app-content">
	<div class="side-app">