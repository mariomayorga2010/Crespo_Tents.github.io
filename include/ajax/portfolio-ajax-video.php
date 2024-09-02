<?php

$nextid = isset( $_POST['portnext'] ) ? $_POST['portnext'] : '';
$previd = isset( $_POST['portprev'] ) ? $_POST['portprev'] : '';
$postid = isset( $_POST['portid'] ) ? $_POST['portid'] : '';

?>

<div id="portfolio-ajax-single" class="border border-default rounded-6 overflow-hidden">

	<div class="d-flex align-items-center justify-content-between position-relative bg-light border-bottom border-default py-4 px-5 mb-5">
		<h2 class="fs-3 fw-medium mb-0">Single Item with Video</h2>
		<div class="d-flex">
			<?php if( $previd ){ ?><a href="#" id="prev-portfolio" class="fs-4 text-dark h-text-color me-3" data-id="<?php echo $previd; ?>"><i class="bi-chevron-left"></i></a><?php } ?>
			<?php if( $nextid ){ ?><a href="#" id="next-portfolio" class="fs-4 text-dark h-text-color me-3" data-id="<?php echo $nextid; ?>"><i class="bi-chevron-right"></i></a><?php } ?>
			<a href="#" id="close-portfolio" class="fs-4 text-dark h-text-color"><i class="bi-x-circle"></i></a>
		</div>
	</div>

	<div class="px-5">
		<div class="row gx-4 gy-5 pb-5">

			<!-- Portfolio Single Image
			============================================= -->
			<div class="col-lg-7 col-xl-8 portfolio-single-image">
				<iframe src="https://player.vimeo.com/video/80975867" class="rounded-6" width="500" height="281" allow="autoplay; fullscreen" allowfullscreen></iframe>
			</div><!-- .portfolio-single-image end -->

			<!-- Portfolio Single Content
			============================================= -->
			<div class="col-lg-5 col-xl-4 portfolio-single-content px-4 ps-xl-4 pt-xl-4">

				<!-- Portfolio Single - Description
				============================================= -->
				<h2 class="fs-3 fw-bold">About this Project</h2>

				<p>Illum molestias cupiditate eveniet dolore obcaecati voluptatibus est quos eos id recusandae officia. Cupiditate, voluptates quibusdam ipsum vel corporis laboriosam id est doloremque?</p>

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