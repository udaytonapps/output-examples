<?php
require_once "../config.php";

use \Tsugi\Core\LTIX;
use \Tsugi\UI\SettingsForm;

$LAUNCH = LTIX::requireData();

if (SettingsForm::isSettingsPost()) {
    if (!isset($_POST["title"]) || trim($_POST["title"]) === '') {
        $_SESSION["error"] = __('Title cannot be blank.');
    } else {
        SettingsForm::handleSettingsPost();
        $_SESSION["success"] = __('All settings saved.');
    }
    header('Location: '.addSession('index.php'));
    return;
}

$title = $LAUNCH->link->settingsGet("title", false);

if (!$title) {
    $LAUNCH->link->settingsSet("title", $LAUNCH->link->title);
    $title = $LAUNCH->link->title;
}

SettingsForm::start();
SettingsForm::text('title',__('Tool Title'));
SettingsForm::end();

include("menu.php");

$OUTPUT->header();

$OUTPUT->bodyStart();

$OUTPUT->topNav($menu);

echo '<div class="container-fluid">';

$OUTPUT->flashMessages();

$OUTPUT->pageTitle($title, true, true);

echo '<p class="lead">This is an example of some of the new UI changes and how to use the new tool nav.</p>';

echo '<p>See an example of a splash page <a href="splash.php">Go to Splash Page</a></p>';

echo '</div>';// end container

$OUTPUT->helpModal("Example Help Modal", __('
                        <h4>Help Content</h4>
                        <p>Use this modal to add help to the current page.</p>'));

$OUTPUT->footerStart();

$OUTPUT->footerEnd();