<?php
$menu = new \Tsugi\UI\MenuSet();

$menu->setHome('Quick Quiz', 'index.php');

if ($USER->instructor) {
    if ('student-home.php' != basename($_SERVER['PHP_SELF'])) {
        $menu->addRight('<span class="fas fa-user-graduate" aria-hidden="true"></span> Student View', 'student-home.php');

        $menu->addRight('<span class="fas fa-clipboard-check" aria-hidden="true"></span> Grade', 'grade.php');

        $results = array(
            new \Tsugi\UI\MenuEntry("Results Sub 1", "results-1.php"),
            new \Tsugi\UI\MenuEntry("Results Sub 2", "results-2.php")
        );

        $menu->addRight('<span class="fas fa-poll-h" aria-hidden="true"></span> Results', $results);

        $menu->addRight('<span class="fas fa-edit" aria-hidden="true"></span> Build', 'build.php');
    } else {
        $menu->addRight('Exit Student View <span class="fas fa-sign-out-alt" aria-hidden="true"></span>', 'build.php');
    }
}
