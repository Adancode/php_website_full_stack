<?php

$pageTitle = "Full Catalog";
$section = null;

// if (isset($GET["cat"])) {
     if (GET_["cat"] == "books") {
       $pageTitle = "Books";
       $section = "Books";
     } else if (GET_["cat"] == "music") {
       $pageTitle = "Music";
       $section = "Music";
     } else if (GET_["cat"] == "movies") {
       $pageTitle = "Movies";
       $section = "Movies";
     }
//}

include("inc/header.php"); ?>

<div class="section page">
     <h1><?php echo $pageTitle; ?></h1>
</div>

<?php include("inc/footer.php"); ?>
