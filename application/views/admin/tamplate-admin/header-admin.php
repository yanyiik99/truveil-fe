<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
    	<title translate="no"><?= $title; ?></title>
		<meta charset="utf-8" />
		<meta name="description" content="Fusion Pay lorem" />
		<meta name="keywords" content="Fusion Pay lorem ipsum" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Favicons -->
		<link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
		<link href="<?= base_url() ?>assets/img/favicon.png" rel="apple-touch-icon">

		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->

		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->

		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?= base_url()?>assets/style/css/admin_plugin.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url()?>assets/style/css/admin.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url()?>assets/style/css/custom-admin.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->

	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>
			var defaultThemeMode = "light"; 
			var themeMode; 
			if ( document.documentElement ) { 
				if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { 
					themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); 
				} else { 
					if ( localStorage.getItem("data-bs-theme") !== null ) { 
						themeMode = localStorage.getItem("data-bs-theme"); 
					} else { 
						themeMode = defaultThemeMode; 
					} 
				} if (themeMode === "system") { 
					themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; 
				} 
				document.documentElement.setAttribute("data-bs-theme", themeMode); 
			}
		</script>
		<!--end::Theme mode setup on page load-->

		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">