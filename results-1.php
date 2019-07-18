<?php
require_once "../config.php";

use \Tsugi\Core\LTIX;

$LAUNCH = LTIX::requireData();

include("menu.php");

$OUTPUT->header();

$OUTPUT->bodyStart();

$OUTPUT->topNav();

$OUTPUT->toolNav($menu);

$OUTPUT->flashMessages();

echo '<div class="container-fluid">';

$OUTPUT->pageTitle("Results <small>Example 1</small>");

echo '</div>';// end container

$OUTPUT->footerStart();

$OUTPUT->footerEnd();