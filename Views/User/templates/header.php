<!doctype html>
<html lang="en" dir="ltr">
<head>
    	<base href="{base_url}">
    	<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="{seo_description}">
		<meta name="author" content="Omnix Technologies">
		<meta name="keywords" content="{seo_keywords}">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="admin/assets/img/{favicon}" />

		<!-- TITLE -->
		<title>{page_title|title}</title>

		<!-- BOOTSTRAP CSS -->
		<link href="user/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="user/assets/colors/color1.css" />
		<!-- STYLE CSS -->
		<link href="user/assets/css/style.css" rel="stylesheet" />
		<link href="user/assets/css/skin-modes.css" rel="stylesheet" />
		<link href="user/assets/css/dark-style.css" rel="stylesheet" />

		<!-- SIDE-MENU CSS -->
		<link href="user/assets/css/sidemenu.css" rel="stylesheet">

		<!--PERFECT SCROLL CSS-->
		<link href="user/assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="user/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- INTERNAL SELECT2 CSS -->
		<link href="user/assets/plugins/select2/select2.min.css" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="user/assets/css/icons.css" rel="stylesheet" />

        <!-- INTERNAL  TABS STYLES -->
        <link href="user/assets/plugins/tabs/tabs.css" rel="stylesheet" />

		<!-- INTERNAL  WYSIWYG EDITOR CSS -->
		<link href="user/assets/plugins/wysiwyag/richtext.css" rel="stylesheet" />

		<!-- INTERNAL  DATA TABLE CSS-->
		<link href="user/assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="user/assets/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />
		<link href="user/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css" rel="stylesheet" />

        <!-- INTERNAL SWEET ALERT CSS -->
        <link href="user/assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />

		 <!-- INTERNAL GALLERY CSS -->
        <!--<link href="user/assets/plugins/gallery/gallery.css" rel="stylesheet">-->

		<!-- SIDEBAR CSS -->
		<link href="user/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		{if $page == 'profile'}
			<!-- INTERNAL  FILE UPLODE CSS -->
			<link href="user/assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css" />
		{endif}
        {if $page == 'plans'}
        	<link href="common/design2/assets/css/pricing-slider.css" rel="stylesheet" type="text/css">
        	<link href="common/design2/assets/css/pricing-slider-custom.css" rel="stylesheet" type="text/css">
			<style>
				.svg-inline--fa{
					width:0.5em;
				}
				.cards__container{
					margin: 50px 0px !important;
				}
				.cards__container li{
					border: none !important;
				}
			</style>
        {endif}
		
		<!-- Switcher CSS -->
		<link href="user/assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="user/assets/switcher/demo.css" rel="stylesheet">
		
		<!-- Switcher CSS -->
		<link rel="stylesheet" type="text/css" href="user/assets/css/custom-clipboard.css">
        <!-- toastr -->
        <link rel="stylesheet" type="text/css" href="admin/assets/css/elements/alert.css">
	{! head_tag_description !}	
</head>

	<body class="app sidebar-mini dark-mode">
	{! body_tag_description !}