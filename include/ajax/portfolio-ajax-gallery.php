<?php

$nextid = isset( $_POST['portnext'] ) ? $_POST['portnext'] : '';
$previd = isset( $_POST['portprev'] ) ? $_POST['portprev'] : '';
$postid = isset( $_POST['portid'] ) ? $_POST['portid'] : '';

?>

<div id="portfolio-ajax-single" class="border border-default rounded-6 overflow-hidden">

	<div class="d-flex align-items-center justify-content-between position-relative bg-light border-bottom border-default py-4 px-5 mb-5">
		<h2 class="fs-3 fw-medium mb-0">Single Item with Thumbs</h2>
		<div class="d-flex">
			<?php if( $previd ){ ?><a href="#" id="prev-portfolio" class="fs-4 text-dark h-text-color me-3" data-id="<?php echo $previd; ?>"><i class="bi-chevron-left"></i></a><?php } ?>
			<?php if( $nextid ){ ?><a href="#" id="next-portfolio" class="fs-4 text-dark h-text-color me-3" data-id="<?php echo $nextid; ?>"><i class="bi-chevron-right"></i></a><?php } ?>
			<a href="#" id="close-portfolio" class="fs-4 text-dark h-text-color"><i class="bi-x-circle"></i></a>
		</div>
	</div>

	<div class="px-5 pb-5">
		<div class="row justify-content-between gx-5 gy-4">
			<!-- Portfolio Single Image
			============================================= -->
			<div class="col-12">
				<div class="masonry-thumbs masonry-gap-xl grid-container row row-cols-5 mb-4" data-big="3" data-lightbox="gallery">
					<a class="grid-item" href="images/portfolio/full/1.jpg" data-lightbox="gallery-item">
						<img src="images/portfolio/3/1.jpg" alt="Gallery Thumb 1" class="rounded">
					</a>
					<a class="grid-item" href="images/portfolio/full/2.jpg" data-lightbox="gallery-item">
						<img src="images/portfolio/3/2.jpg" alt="Gallery Thumb 2" class="rounded">
					</a>
					<a class="grid-item" href="images/portfolio/full/3.jpg" data-lightbox="gallery-item">
						<img src="images/portfolio/3/3.jpg" alt="Gallery Thumb 3" class="rounded">
					</a>
					<a class="grid-item" href="images/portfolio/full/4.jpg" data-lightbox="gallery-item">
						<img src="images/portfolio/3/4.jpg" alt="Gallery Thumb 4" class="rounded">
					</a>
					<a class="grid-item" href="images/portfolio/full/5.jpg" data-lightbox="gallery-item">
						<img src="images/portfolio/3/5.jpg" alt="Gallery Thumb 5" class="rounded">
					</a>
					<a class="grid-item" href="images/portfolio/full/6.jpg" data-lightbox="gallery-item">
						<img src="images/portfolio/3/6.jpg" alt="Gallery Thumb 6" class="rounded">
					</a>
					<a class="grid-item" href="images/portfolio/full/7.jpg" data-lightbox="gallery-item">
						<img src="images/portfolio/3/7.jpg" alt="Gallery Thumb 7" class="rounded">
					</a>
				</div>
			</div><!-- .portfolio-single-image end -->

			<!-- Portfolio Single Content
			============================================= -->
			<div class="col-12 portfolio-single-content">

				<!-- Portfolio Single - Description
				============================================= -->
				<h2 class="fs-3 fw-bold">About this Project</h2>

				<div class="row g-5">
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, dolores, facere, corrupti delectus ex quidem adipisci tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias iure ducimus dolorem nam molestias? Fugit veritatis officiis vel!</p>
					</div>

					<div class="col-md-6">
						<p>Illum molestias cupiditate eveniet dolore obcaecati voluptatibus est quos eos id recusandae officia. Cupiditate, voluptates quibusdam ipsum vel corporis laboriosam id est doloremque?</p>
					</div>
				</div>
				<!-- Portfolio Single - Description End -->

			</div><!-- .portfolio-single-content end -->

			<div class="col-xl-8">
				<div class="grid-inner bg-light p-5 rounded-6">
					<div class="row g-4">
						<div class="col-sm-6">
							<h5 class="mb-2">Created by</h5>
							<p class="text-medium op-08 mb-0">John Doe</p>
						</div>

						<div class="col-sm-6">
							<h5 class="mb-2">Completed on</h5>
							<p class="text-medium op-08 mb-0">17th March 2022</p>
						</div>

						<div class="col-sm-6">
							<h5 class="mb-2">Skills</h5>
							<div><a href="#" class="badge bg-color h-bg-dark h-text-light all-ts py-2 px-3">HTML</a> <a href="#" class="badge bg-color h-bg-dark h-text-light all-ts py-2 px-3">CSS3</a></div>
						</div>

						<div class="col-sm-6">
							<h5 class="mb-2">Client</h5>
							<p class="text-medium op-08 mb-0"><a href="#">Google Inc.</a></p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 pt-xl-4">
				<a href="#" class="text-medium">Visit this Project <i class="bi-arrow-up-right-circle-fill ms-1 align-middle fs-5 position-relative" style="top:-2px;"></i></a>

				<!-- Portfolio Single - Share
				============================================= -->
				<div class="card mt-5 pt-4 border-0 border-top rounded-0 border-default">
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
			</div>
		</div>
	</div>

</div>