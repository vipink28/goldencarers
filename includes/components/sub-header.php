<?php
$activities = array(
  array("name" => "tags", "count" => 9),
  array("name" => "focused activities", "count" => 11),
  array("name" => "arts, crafts, hobbies", "count" => 12),
  array("name" => "games & trivia", "count" => 15),
  array("name" => "multicultural", "count" => 38),
  array("name" => "resources", "count" => 9)
);

$allActivities = array("what's new", "articles", "games", "alzheimer's & dementia", "word games", "reminiscing", "craft", "trivia", "music", "word search", "short stories", "australia", "colong", "riddles", "forms & templates", "jokes", "for men", "multicutural", "theme days");
?>

<div class="bg-secondary">
  <div class="container">
    <div class="d-flex align-items-center flex-wrap justify-content-between py-3">
      <?php foreach ($activities as $activity)
      {
        $name = $activity["name"];
        $count = $activity["count"];
      ?>
        <div class="d-flex align-items-center justify-content-between flex-nowrap bg-light rounded-4 dropdown activity-filter-dropdown">
          <a href="#" class="text-nowrap fs-7 text-primary fw-bold text-capitalize text-decoration-none dropdown-toggle stretched-link px-4 py-3" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
            <span class="me-2">
              <svg class="icon">
                <use xlink:href="#home"></use>
              </svg>
            </span>
            <?= $name ?>
            <span class="ms-2"><?= $count ?></span>
          </a>
          <div  class="dropdown-menu translate-middle-x start-50 py-2 rounded-4">
          <ul class="fs-7 text-primary text-capitalize overflow-auto">
            <li><a class="dropdown-item fw-semibold d-flex align-items-center py-2" href="#">
                <div class="rounded-1 icon-box d-flex align-items-center justify-content-center bg-secondary me-2">
                  <svg class="icon">
                    <use xlink:href="#home"></use>
                  </svg>
                </div> <?= $name ?> <span class="fs-8 ms-auto text-light">111</span>
              </a></li>
            <?php foreach ($allActivities as $activity)
            { ?>
              <li><a class="dropdown-item fw-semibold d-flex align-items-center py-2" href="#">
                  <div class="rounded-1 icon-box d-flex align-items-center justify-content-center bg-secondary me-2 overflow-hidden">
                    <img src="<?= $root ?>/redesign/assets/images/rounded-square.png" alt="">
                  </div> <?= $activity ?> <span class="fs-8 ms-auto text-light">12</span>
                </a></li>
            <?php
            }
            ?>
          </ul>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>