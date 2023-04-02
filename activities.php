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


	<div class="row align-items-center py-5">
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
	<div class="d-flex mb-5 position-relative">
		<div class="dropdown category-dropdown">
			<a href="#" class="fs-7 text-primary fw-bold text-capitalize text-decoration-none dropdown-toggle p-2 rounded-3 bg-light d-flex justify-content-between align-items-center" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				All Categories
			</a>
			<div  class="dropdown-menu py-2 rounded-4">
			<ul class="fs-7 text-primary text-capitalize overflow-auto">
				
				<?php foreach ($allActivities as $activity)
				{ ?>
					<li><a class="dropdown-item fw-semibold d-flex align-items-center py-2" href="#">
							<div class="rounded-1 icon-box d-flex align-items-center justify-content-center bg-secondary me-2 overflow-hidden">
								<svg class="icon">
									<use xlink:href="#home"></use>
								</svg>
							</div> <?= $activity ?> <span class="fs-8 ms-auto text-light">12</span>
						</a></li>
				<?php
				}
				?>

			</ul>
			</div>
		</div>

		<div class="d-flex fw-semibold text-capitalize mx-auto position-absolute start-50 top-50 translate-middle">
			<a class="rounded-pill bg-light px-3 py-2 mx-2 text-primary text-decoration-none" href="#">quiz</a>
			<a class="rounded-pill bg-light px-3 py-2 mx-2 text-primary text-decoration-none" href="#">bingo</a>
			<a class="rounded-pill bg-light px-3 py-2 mx-2 text-primary text-decoration-none" href="#">trivia</a>
			<a class="rounded-pill bg-light px-3 py-2 mx-2 text-primary text-decoration-none" href="#">match quiz</a>
			<a class="rounded-pill bg-light px-3 py-2 mx-2 text-primary text-decoration-none" href="#">who am i</a>
		</div>

		<div class="dropdown filter-dropdown ms-auto">
			<a href="#" class="fs-7 text-primary fw-bold text-capitalize text-decoration-none dropdown-toggle p-2 border border-1 d-flex justify-content-between align-items-center rounded-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Most Popular
			</a>
			<ul class="dropdown-menu dropdown-menu-end fs-7 text-primary text-capitalize rounded-4 overflow-auto">
				<li><a class="dropdown-item" href="#">Recent</a></li>
			</ul>
		</div>
	</div>

	<div class="d-flex">
		<div class="row activity-grid gy-3">
			<?php
			foreach ($allActivities as $activity)
			{
			?>
				<a href="#" class="col text-center flex-shrink-0 flex-grow-0 text-decoration-none">
					<div class="rounded-4 overflow-hidden image-box">
						<img class="grid-image" src="<?= $root ?>/redesign/assets/images/rounded-square.png">
					</div>
					<p class="fs-5 text-primary fw-bold mt-3 text-capitalize"><?= $activity ?></p>
				</a>
			<?php
			}
			?>
		</div>
	</div>



</main>
<?php include('includes/footer.php'); ?>