<?php
require_once "../config.php";

use \Tsugi\Core\LTIX;

$LAUNCH = LTIX::requireData();

include("menu.php");

$OUTPUT->header();
$OUTPUT->bodyStart();

$OUTPUT->toolNav($menu);

echo '<div class="container">';

$OUTPUT->pageTitle("Grade", false, false);

echo '</div>';// end container

$OUTPUT->footerStart();

$OUTPUT->footerEnd();