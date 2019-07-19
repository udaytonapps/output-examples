<?php
require_once "../config.php";

use \Tsugi\Core\LTIX;

$LAUNCH = LTIX::requireData();

include("menu.php");

$OUTPUT->header();

$OUTPUT->bodyStart();

$OUTPUT->topNav($menu);

echo '<div class="container-fluid">';

$OUTPUT->flashMessages();

$OUTPUT->pageTitle("Grade", false, false);

echo '</div>';// end container

$OUTPUT->footerStart();

$OUTPUT->footerEnd();