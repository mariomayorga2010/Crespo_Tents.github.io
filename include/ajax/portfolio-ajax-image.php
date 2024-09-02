<?php

$nextid = isset( $_POST['portnext'] ) ? $_POST['portnext'] : '';
$previd = isset( $_POST['portprev'] ) ? $_POST['portprev'] : '';
$postid = isset( $_POST['portid'] ) ? $_POST['portid'] : '';

?>

<div id="portfolio-ajax-single" class="border border-default rounded-6 overflow-hidden">

	<div class="d-flex align-items-center justify-content-between position-relative bg-contrast-100 border-bottom border-default py-4 px-5 mb-5">
		<h2 class="fs-3 fw-medium mb-0">Single Item with Image</h2>
		<div class="d-flex">
			<?php if( $previd ){ ?><a href="#" id="prev-portfolio" class="fs-4 text-contrast-900 h-text-color me-3" data-id="<?php echo $previd; ?>"><i class="bi-chevron-left"></i></a><?php } ?>
			<?php if( $nextid ){ ?><a href="#" id="next-portfolio" class="fs-4 text-contrast-900 h-text-color me-3" data-id="<?php echo $nextid; ?>"><i class="bi-chevron-right"></i></a><?php } ?>
			<a href="#" id="close-portfolio" class="fs-4 text-contrast-900 h-text-color"><i class="bi-x-circle"></i></a>
		</div>
	</div>

	<div class="px-5">
		<div class="row gx-4 gy-5 pb-5">

			<!-- Portfolio Single Image
			============================================= -->
			<div class="col-lg-7 col-xl-8 portfolio-single-image">
				<a href="#">
					<img src="https://source.unsplash.com/yTWq8n3-4k0/900x900" alt="Image" class="rounded-6">
				</a>
			</div><!-- .portfolio-single-image end -->

			<!-- Portfolio Single Content
			============================================= -->
			<div class="col-lg-5 col-xl-4 portfolio-single-content px-4 ps-xl-4 pt-xl-4">

				<!-- Portfolio Single - Description
				============================================= -->
				<h2 class="fs-3 fw-bold">About this Project</h2>

				<p>Illum molestias cupiditate eveniet dolore obcaecati voluptatibus est quos eos id recusandae officia. Cupiditate, voluptates quibusdam ipsum vel corporis laboriosam id est doloremque?</p>
				<!-- Portfolio Single - Description End -->

				<!-- Portfolio Single - Meta
				============================================= -->
				<div class="row g-4 mt-4 mb-6">
					<div class="col-6">
						<h5 class="mb-2">Created by</h5>
						<p class="text-medium op-08 mb-0">John Doe</p>
					</div>

					<div class="col-6">
						<h5 class="mb-2">Completed on</h5>
						<p class="text-medium op-08 mb-0">17th March 2022</p>
					</div>

					<div class="col-6">
						<h5 class="mb-2">Skills</h5>
						<div><a href="#" class="badge bg-color h-bg-dark h-text-light all-ts py-2 px-3">HTML</a> <a href="#" class="badge bg-color h-bg-dark h-text-light all-ts py-2 px-3">CSS3</a></div>
					</div>

					<div class="col-6">
						<h5 class="mb-2">Client</h5>
						<p class="text-medium op-08 mb-0"><a href="#">Google Inc.</a></p>
					</div>
				</div>

				<a href="#" class="text-medium">Visit this Project <i class="bi-arrow-up-right-circle-fill ms-1 align-middle fs-5 position-relative" style="top:-2px;"></i></a>

				<!-- Portfolio Single - Share
				============================================= -->
				<div class="card mt-6 pt-4 border-0 border-top rounded-0 border-default bg-transparent">
					<div class="card-body p-0">
						<div class="d-flex align-items-center justify-content-between">
							<h6 class="fs-6 fw-semibold mb-0">Share:</h6>
							<div class="d-flex">
								<a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" title="Facebook">
									<i class="fa-brands fa-facebook-f"></i>
									<i class="fa-brands fa-facebook-f"></i>
								</a>

								<a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter" title="Twitter">
									<i class="fa-brands fa-twitter"></i>
									<i class="fa-brands fa-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest" title="Pinterest">
									<i class="fa-brands fa-pinterest-p"></i>
									<i class="fa-brands fa-pinterest-p"></i>
								</a>

								<a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-whatsapp" title="Whatsapp">
									<i class="fa-brands fa-whatsapp"></i>
									<i class="fa-brands fa-whatsapp"></i>
								</a>

								<a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-rss" title="RSS">
									<i class="fa-solid fa-rss"></i>
									<i class="fa-solid fa-rss"></i>
								</a>

								<a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0" title="Mail">
									<i class="fa-solid fa-envelope"></i>
									<i class="fa-solid fa-envelope"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Portfolio Single - Share End -->

			</div><!-- .portfolio-single-content end -->

		</div>
	</div>

</div>