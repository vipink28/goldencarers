<?php
$activities = array(
  array("name" => "tags", "count" => 9),
  array("name" => "focused activities", "count" => 11),
  array("name" => "arts, crafts, hobbies", "count" => 12),
  array("name" => "games & trivia", "count" => 15),
  array("name" => "multicultural", "count" => 38),
  array("name" => "resources", "count" => 9)
);
?>

<div class="bg-secondary">
  <div class="container">
    <div class="d-flex align-items-center flex-wrap justify-content-between py-3">
      <?php
      foreach ($activities as $activity) {
        $name = $activity["name"];
        $count = $activity["count"];
        echo "<a href='#' class='text-nowrap fs-7 d-flex align-items-center justify-content-between flex-nowrap px-4 py-3 bg-light rounded-4 text-primary fw-bold text-capitalize text-decoration-none'>
        <span class='me-2'>
        <svg class='icon'>
          <use xlink:href='#home'></use>
        </svg>
        </span>
        $name
        <span class='ms-2'>$count</span></a>";
      }
      ?>
    </div>
  </div>
</div>