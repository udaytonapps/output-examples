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

// Long content to help test scrolling
?>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum ipsum sem, nec fermentum tortor commodo eu. Vivamus vel iaculis velit. Morbi id cursus nibh. Nullam et porta eros, vel molestie turpis. Curabitur eu dui sed augue aliquet lobortis. Nulla hendrerit libero nunc, ut sodales elit mollis sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse placerat velit id gravida gravida. Nam interdum vehicula convallis. Morbi ac elit eget nulla ultricies vulputate. Integer tincidunt gravida venenatis. Quisque tellus nisi, aliquet sit amet fringilla eget, fermentum nec tortor. Nulla aliquam aliquam lacus, ut feugiat eros accumsan nec.</p><p>Suspendisse vulputate non dui a mollis. Morbi nec mi hendrerit, ullamcorper sapien eget, congue lectus. Integer arcu arcu, lobortis ac lectus sit amet, dignissim molestie nulla. Nam vitae commodo arcu, sed auctor odio. Nulla facilisi. Maecenas non orci sed urna porta feugiat non et nibh. Suspendisse erat diam, convallis a dolor et, viverra feugiat nisl. Etiam interdum maximus nunc, id ultrices felis volutpat nec. Fusce risus nibh, commodo id lorem sed, suscipit vulputate ipsum. Mauris magna felis, pellentesque mattis arcu eget, congue mattis diam. Donec quis porttitor lorem.
</p>
<p>
    Cras sagittis commodo imperdiet. Nulla interdum dui nec justo posuere, vitae pulvinar nisl malesuada. Sed aliquam commodo lorem, a gravida mi iaculis pulvinar. Vivamus accumsan at mi vitae congue. Aliquam sed leo tincidunt, lacinia ligula et, imperdiet turpis. Ut ut lectus in lectus accumsan ultricies ac eget orci. Donec vestibulum elit in libero commodo placerat. Integer nec efficitur urna. Curabitur gravida libero vitae augue tincidunt tincidunt non non nunc. Suspendisse eget urna quam. Integer libero nunc, finibus at lacinia sed, sagittis a lectus.
</p>
<p>
    Sed non luctus nulla. Aliquam erat volutpat. Donec consectetur nisl a euismod semper. Donec non cursus dui. Donec a faucibus metus. Sed aliquet dapibus dui eu faucibus. Pellentesque porttitor in lacus sit amet laoreet. Integer pulvinar nulla ultrices massa tempor tristique. Nam tristique venenatis ante, eu blandit neque luctus id. Vestibulum vitae lacus iaculis, sodales arcu id, dapibus tortor. Ut commodo in lacus ut feugiat. Sed semper sem odio, eget aliquam diam mollis in. Nulla egestas neque et nibh malesuada, sit amet molestie orci egestas. Pellentesque lacinia, diam sit amet rutrum imperdiet, urna massa lacinia ante, vel pharetra nisl justo id urna. Suspendisse potenti.
</p>
<p>
    Aenean fermentum metus a erat posuere convallis. Proin euismod, sapien tempus vehicula efficitur, risus odio ornare tellus, eu facilisis orci augue quis tellus. Nam vitae libero orci. In hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque purus ante, egestas nec aliquet posuere, sagittis eu leo. Vestibulum quis vestibulum sapien. Ut euismod, nisi a tincidunt luctus, ex orci ultrices arcu, nec dictum mauris magna in dolor. Nam auctor nisl lectus, nec imperdiet dolor lobortis a. Aenean pretium, tortor id hendrerit fermentum, felis neque porta tortor, at fringilla nulla nibh in libero. Aenean ultricies purus ut diam ultrices, quis gravida dui vulputate. Nunc et interdum quam, at sagittis metus. Etiam laoreet diam ac mauris lobortis, quis volutpat leo mattis. Phasellus bibendum, turpis eget volutpat congue, odio metus sodales dui, eget pulvinar nibh felis quis sapien. Nam finibus faucibus velit in placerat. Vestibulum fringilla aliquet dui, quis venenatis orci consequat eu.
</p>
<?php
echo '</div>';// end container

$OUTPUT->helpModal("Example Help Modal", __('
                        <h4>Help Content</h4>
                        <p>Use this modal to add help to the current page.</p>'));

$OUTPUT->footerStart();

$OUTPUT->footerEnd();