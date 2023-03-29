<?php include('includes/header.php'); ?>
<?php include('includes/components/sub-header.php'); ?>
<?php
	$newActivities = array(12, 8, 23, 100, 20, 2, 34, 12);	
?>
<main class="container">
	<!--breadcrumbs -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb fw-semibold py-3">
			<li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
			<span class="breadcrumb-divider px-2"><svg class="icon">
					<use xlink:href="#chev-right"></use>
				</svg></span>
			<li class="breadcrumb-item active" aria-current="page">Activities</li>
		</ol>
	</nav>
	<!--breadcrumbs -->


	<div class="row align-items-center">
		<div class="col-lg-5 text-black">
			<h2 class="fw-bold">Actitivities for Seniors</h2>
			<p>Save time with 1000s of activity ideas & helpful resources. Plan and implement activity programs that are stimulating, relevant, and suit a wide range of needs and interests.</p>
		</div>
		<div class="col-lg-6 offset-lg-1">
			<div class="bg-secondary p-4 rounded-5 overflow-hidden">
				<div class="d-flex align-items-center">
					<h3 class="fw-bold text-black mb-0">What's New</h3>
					<div class="d-flex ms-auto">
						<span class="pe-1">
							<svg class="icon">
								<use xlink:href="#Chevron-round-left"></use>
							</svg>
						</span>
						<span class="pe-3 ps-1">
							<svg class="icon">
								<use xlink:href="#Chevron-round-right"></use>
							</svg>
						</span>
					</div>
					<a href="#" class="rounded-pill border border-1 border-dark text-decoration-none text-primary fw-semibold fs-8 px-3 py-1">View All</a>
				</div>

				<div class="d-flex flex-nowrap mt-3 image-slider">
					<?php
					foreach ($newActivities as $commentCount)
					{
					?>
						<div class="rounded-3 overflow-hidden me-3 flex-shrink-0 card p-1 bg-light border-0">
							<span class="badge rounded-pill d-inline-flex align-items-center flex-shrink-0 text-bg-primary position-absolute bg-white border border-1 text-primary comment-badge fs-9">
								<?= $commentCount ?>
								<svg class="icon ms-1">
									<use xlink:href="#comment"></use>
								</svg> 
							</span>
							<img class="slider-image" src="<?= $root ?>/redesign/assets/images/rounded-rectangle.png">
						</div>
					<?php
					}
					?>
				</div>

			</div>
		</div>
	</div>

	<!--Category navigation-->
	<div class="my-3">
		<p class="text-light fw-semibold fs-9">Categories</p>
	</div>
</main>
<?php include('includes/footer.php'); ?>