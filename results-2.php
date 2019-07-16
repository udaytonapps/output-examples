<?php
require_once "../config.php";

use \Tsugi\Core\LTIX;

$LAUNCH = LTIX::requireData();

include("menu.php");

$OUTPUT->header();
$OUTPUT->bodyStart();

$OUTPUT->toolNav($menu);

echo '<div class="container">';

$OUTPUT->pageTitle("Results <small>Example 2</small>");

echo '</div>';// end container

$OUTPUT->footerStart();

$OUTPUT->footerEnd();