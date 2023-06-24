<!--begin::Main Content-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid pt-20">

		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-fluid">
				<!--begin::Row-->
				<div class="row gx-5 gx-xl-10">
					<!--begin::Col-->
					<div class="col-xxl-12 mb-5 mb-xl-10">
						<!--begin::Chart widget 8-->
						<div class="card h-xl-100">
							<!--begin::Body-->
							<div class="card-body pt-6">
								<div class="row">
                                    <div class="col-12">
                                        <h1>Add Villa</h1>
										<form action="">
											<div class="row my-15">
												<div class="col-6">
													<div class="truveil-input">
														<input type="realname" placeholder="Real Name Villa" id="realname" autocomplete="off">
														<label for="realname">Real Name Villa</label>
													</div>
												</div>
												<div class="col-6">
													<div class="truveil-input">
														<input type="anonym" placeholder="Anonym Villa Name " id="anonym" autocomplete="off">
														<label for="anonym">Anonym Villa Name</label>
													</div>
												</div>
											</div>
											<div class="row my-15">
												<div class="col-6">
													<div class="truveil-input">
														<input type="location" placeholder="Location" id="location" autocomplete="off">
														<label for="location">Location </label>
													</div>
												</div>
												<div class="col-6">
													<div class="truveil-input">
														<input type="linkmaps" placeholder="Link Google Maps " id="linkmaps" autocomplete="off">
														<label for="linkmaps">Link Google Maps </label>
													</div>
												</div>
											</div>
											<div class="row my-15">
												<div class="col-6">
													<div class="truveil-input">
														<input type="price" placeholder="Contact Villa" id="price" autocomplete="off">
														<label for="price">Contact Villa </label>
													</div>
												</div>
												<div class="col-6">
													<div class="truveil-input">
														<input type="renttype" placeholder="Rent Type " id="renttype" autocomplete="off">
														<label for="renttype">Rent Type </label>
													</div>
												</div>
											</div>	
											<div class="row my-15">
												<div class="col-6">
													<div class="truveil-input">
														<input type="contactvilla" placeholder="Price in IDR" id="contactvilla" autocomplete="off">
														<label for="contactvilla">Price in IDR </label>
													</div>
												</div>
												<div class="col-6">
													<div class="truveil-input">
														<input type="bedroom" placeholder="Bedroom " id="bedroom" autocomplete="off">
														<label for="bedroom">Bedroom </label>
													</div>
												</div>
											</div>
											<div class="row my-15">
												<div class="col-6">
													<div class="truveil-input">
														<input type="swimingpool" placeholder="Swiming Pool" id="swimingpool" autocomplete="off">
														<label for="swimingpool">Swiming Pool </label>
													</div>
												</div>
												<div class="col-6">
													<div class="truveil-input">
														<input type="livingroom" placeholder="Living Room " id="livingroom" autocomplete="off">
														<label for="livingroom">Living Room </label>
													</div>
												</div>
											</div>
											<div class="row my-15">
												<div class="col-6">
													<div class="truveil-input">
														<input type="include" placeholder="Include Facilities" id="include" autocomplete="off">
														<label for="include">Include Facilities </label>
													</div>
												</div>
											</div>
											<div class="row my-15">
												<div class="col-12">
													<label for="description" class="fw-semibold">Description </label>
													<div class="truveil-input">
														<textarea name="description" id="description" class="w-100 ps-3 pt-3" rows="10" placeholder="Input Description"></textarea>
														<!-- <input type="description" placeholder="Description" id="description" autocomplete="off"> -->
													</div>
												</div>
											</div>
											<div class="row my-15">
												<div class="col-12">
													<div class="col-md-12">        
														<h5 class=" fw-bolder text-black text-start mb-3 text-findme">*Input Image Villa</h5>
														<div class="d-flex flex-column">
														<div class="row ">
															<div class="col-12 col-sm-8 col-lg-6 input-logo-business">
																<input name="logo" type="file" id="images-logo" accept="image/jpg, image/jpeg, image/png" required>
															</div>
														</div>
														<div class="row ">
															<div class="col-12 d-flex flex-column flex-sm-row">
																<span class="p-4 fw-bolder">
																	<p class="text-findme text-start">*Maximum 1MB</p>
																	<p class="text-findme text-start">*png, jpg, jpeg</p>
																</span>
															</div>
														</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row mb-15">
												<div class="col-12 d-flex justify-content-center">
													<button type="submit" class="btn btn-submit-villa">
														<i class="fas fa-plus-circle fs-2 text-white"></i>
														Add Villa
													</button>
												</div>
											</div>
										</form>
                                    </div>
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Chart widget 8-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->

	<!--begin::Footer-->
	<div id="kt_app_footer" class="app-footer">
		<!--begin::Footer container-->
		<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
			<!--begin::Copyright-->
			<div class="text-dark order-2 order-md-1">
				<span class="text-muted fw-semibold me-1">2023&copy;</span>
				<a href="#" target="_blank" class="text-gray-800 text-hover-primary">Truveil</a>
			</div>
			<!--end::Copyright-->
			<!--begin::Menu-->
			<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
				<li class="menu-item">
					<a href="#" target="_blank" class="menu-link px-2">Support</a>
				</li>
				<li class="menu-item">
					<a href="#" target="_blank" class="menu-link px-2">Purchase</a>
				</li>
			</ul>
			<!--end::Menu-->
		</div>
		<!--end::Footer container-->
	</div>
	<!--end::Footer-->
</div>
<!--end:::Main Content-->