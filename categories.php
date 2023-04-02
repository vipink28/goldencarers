<?php include('includes/header.php'); ?>
<?php include('includes/components/sub-header.php'); ?>
<?php
$activitiesCard = array("Finish the Phrase Bingo", "Group the Pictures", "Rainbow Sensory 1:1 for Memory Care", "Pass the Ball Stop the Music", "10 Ways to Use Sensory Boxes & Multisensory Spaces", "Group the Pictures", "Rainbow Sensory 1:1 for Memory Care", "10 Ways to Use Sensory Boxes & Multisensory Spaces", "Pass the Ball Stop the Music", "Finish the Phrase Bingo", "10 Ways to Use Sensory Boxes & Multisensory Spaces", "Finish the Phrase Bingo", "Rainbow Sensory 1:1 for Memory Care", "Pass the Ball Stop the Music", "Group the Pictures", "10 Ways to Use Sensory Boxes & Multisensory Spaces", "Finish the Phrase Bingo", "Rainbow Sensory 1:1 for Memory Care", "Pass the Ball Stop the Music", "Group the Pictures")
?>
<div class="container">
    <!--breadcrumbs -->
    <nav aria-label="breadcrumb mb-3">
        <ol class="breadcrumb fw-semibold py-3">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#" class="text-decoration-none">Activities</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#" class="text-decoration-none">Focused Activities</a></li>
            <li class="breadcrumb-item active" aria-current="page">Alzeihmer's & Dementia</li>
        </ol>
    </nav>
    <!--breadcrumbs -->

    <!--activity banner sider-->
    <div class="bg-light rounded-5 p-4 activity-banner">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="rounded-5 overflow-hidden activity-banner-image">
                    <img src="<?= $root ?>/redesign/assets/images/activity-image.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="d-flex flex-column justify-content-center h-100">
                            <h2 class="fs-1 fw-bold">Alzheimer's & Dementia</h2>
                            <p>Finding practical and meaningful activities for people living with dementia or Alzheimer's Disease requires creative thinking. Here you will find a variety of activities suitable for early to advanced stages of dementia.</p>

                            <div class="d-flex">
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
                        </div>

                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex align-items-end justify-content-center h-100">
                            <a href="#" class="rounded-pill border border-1 border-dark text-decoration-none text-primary fw-semibold fs-8 px-3 py-1 me-2">Create your own</a>
                            <a href="#" class="rounded-pill border border-1 border-dark text-decoration-none text-primary fw-semibold fs-8 px-3 py-1">Suggest an idea</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--activity banner sider-->

    <div class="mb-3">
        <?php include('includes/components/categories-menu.php'); ?>

        <div class="d-flex">
            <div class="row activity-grid potrait gy-3">
                <?php
                foreach ($activitiesCard as $activity)
                {
                ?>
                    <a href="#" class="col flex-shrink-0 flex-grow-0 text-decoration-none">
                        <div class="rounded-4 overflow-hidden image-box position-relative border border-2">
                            <img class="grid-image" src="<?= $root ?>/redesign/assets/images/activity-card.jpg">
                            <div class="overlay">
                                <div class="overlay-header d-flex flex-column align-items-start">
                                    <span class="badge rounded-pill d-inline-flex align-items-center flex-shrink-0 text-bg-primary bg-white border border-1 text-primary fs-9 mx-2 mb-1 mt-2">
                                        new
                                    </span>
                                    <span class="badge rounded-pill d-inline-flex align-items-center flex-shrink-0 text-bg-primary bg-white border border-1 text-primary comment-badge fs-9 mx-2">
                                        12
                                    </span>
                                </div>


                                <div class="overlay-footer position-absolute bottom-0">
                                    <span class="badge rounded-pill d-inline-flex align-items-center flex-shrink-0 text-bg-primary bg-white border border-1 text-primary category-badge fs-9 mx-2 mb-2">
                                        Category Tags
                                    </span>
                                    <span class="badge rounded-pill d-inline-flex align-items-center flex-shrink-0 text-bg-primary bg-white border border-1 text-primary category-badge fs-9 mx-2 mb-2">
                                        One-On-One
                                    </span>
                                    <span class="badge rounded-pill d-inline-flex align-items-center flex-shrink-0 text-bg-primary bg-white border border-1 text-primary category-badge fs-9 mx-2 mb-2">
                                        Sensory
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center fs-9 fw-semibold text-primary image-box-footer mt-2">
                            <span class="me-3">
                                <svg class="icon me-1">
                                    <use xlink:href="#quiz"></use>
                                </svg>
                                Quiz
                            </span>
                            <span>
                                <svg class="icon me-1">
                                    <use xlink:href="#image"></use>
                                </svg>
                                Image Reveal
                            </span>
                        </div>
                        <p class="fs-5 text-black fw-bold mt-3 text-capitalize"><?= $activity ?></p>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

</div>
<?php include('includes/footer.php'); ?>