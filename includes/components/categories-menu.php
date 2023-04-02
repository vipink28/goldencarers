<?php
$activitiesList = array("music", "articles", "sensory", "reminiscing", "music", "articles", "music", "articles", "sensory", "reminiscing", "music", "articles", "music", "articles", "sensory", "reminiscing", "music", "articles");
?>
<div class="py-5">
    <div class="d-flex categories-filter">
        <a href="#" class="fs-7 text-primary fw-bold text-capitalize text-decoration-none py-2 px-3 rounded-3 active item">
            <span class="me-1">
                <svg class="icon">
                    <use xlink:href="#filter"></use>
                </svg>
            </span>
            Categories
        </a>
        <a href="#" class="fs-7 text-primary fw-bold text-capitalize text-decoration-none py-2 px-3 rounded-3 item">
            <span class="me-1">
                <svg class="icon">
                    <use xlink:href="#topology-start"></use>
                </svg>
            </span>
            Categories
        </a>

        <div class="dropdown filter-dropdown ms-auto">
            <a href="#" class="fs-7 text-primary fw-bold text-capitalize text-decoration-none dropdown-toggle p-2 border border-1 d-flex justify-content-between align-items-center rounded-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Most Popular
            </a>
            <ul class="dropdown-menu dropdown-menu-end fs-7 text-primary text-capitalize rounded-4 overflow-auto">
                <li><a class="dropdown-item" href="#">Recent</a></li>
            </ul>
        </div>
    </div>
    <div class="categories-filter-list mt-3 position-relative">
        <div class="scroll-categories d-flex flex-nowrap fw-semibold text-capitalize fs-7 overflow-scroll">
        <a class="rounded-pill bg-light px-3 py-2 mx-2 text-primary text-decoration-none text-nowrap active" href="#">All </a>
            <?php
            foreach ($activitiesList as $activity)
            {
            ?>
                <a class="rounded-pill bg-light px-3 py-2 mx-2 text-primary text-decoration-none text-nowrap" href="#"><?= $activity ?></a>
            <?php } ?>            
        </div>
        <div class="d-flex align-items-center ps-5 ms-auto position-absolute end-0 nav-btn top-50 translate-middle-y">
                <span class="pe-1" onclick="rightScroll()">
                    <svg class="icon">
                        <use xlink:href="#chev-left-round-bordered"></use>
                    </svg>
                </span>
                <span class="ps-1" onclick="leftScroll()">
                    <svg class="icon">
                        <use xlink:href="#chev-right-round-bordered"></use>
                    </svg>
                </span>
            </div>
    </div>
</div>