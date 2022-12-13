<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Jet HTML Free  - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme
Upgrade to Pro: https://keenthemes.com/products/jet-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Laravel Post | Beranda</title>
		<meta name="description" content="Jet admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Jet theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
		<link rel="canonical" href="Https://preview.keenthemes.com/jet-free" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="{{asset('theme/dist/assets/media/logos/favicon.ico')}}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{asset('theme/dist/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('theme/dist/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">

				<!--begin::Aside-->
				@include('components.aside')
				<!--end::Aside-->

				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

					<!--begin::Header-->
					@include('components.header')
					<!--end::Header-->
                    
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container" id="kt_content_container">
							<!--begin::Row-->
							<div class="row g-5 gx-xxl-8 mb-xxl-3">
								<!--begin::Col-->
								<div class="col-xxl-4">
									<!--begin::Engage Widget 1-->
									<div class="card card-xxl-stretch">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-column justify-content-between h-100">
											<!--begin::Section-->
											<div class="pt-12">
												<!--begin::Title-->
												<h3 class="text-dark text-center fs-1 fw-boldest line-height-lg">Kickstart
												<br />First Application</h3>
												<!--end::Title-->
												<!--begin::Text-->
												<div class="text-center text-gray-600 fs-5 fw-bold pt-4">Outlines keep you honest. They stoping you from amazing poorly about mega drive</div>
												<!--end::Text-->
												<!--begin::Action-->
												<div class="text-center py-7 mb-18">
													<a href="#" class="btn btn-primary fs-6 px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create App</a>
												</div>
												<!--end::Action-->
											</div>
											<!--end::Section-->
											<!--begin::Image-->
											<div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom card-rounded-bottom h-150px" style="
                                            background-image:
                                                url({{asset('theme/dist/assets/media/illustrations/user-welcome.png')}})
                                            "></div>
											<!--end::Image-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Engage Widget 1-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->

					<!--begin::Footer-->
					@include('components.footer')
					<!--end::Footer-->

				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{asset('theme/dist/assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('theme/dist/assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{asset('theme/dist/assets/js/custom/widgets.js')}}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>