<?php
if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'Entête',
'id' => 'header-sidebar',
'description' => 'Une sidebar dans le Header',
'before_widget' => '<div id="header-sidebar">',
'after_widget' => '</div>',
'before_title' => '<h1 class="widgettitle">',
'after_title' => '</h1>',
));
}
?>
/* <?php if (!function_exists('dynamic_sidebar') ||
!dynamic_sidebar('header-sidebar')) : ?>
<?php endif; ?> */
