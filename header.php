<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
    wp_head();
    ?>

</head>
<body>
    <nav>
    <?php
        wp_nav_menu(
            array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<div clasS="nav-links">%3$s</div>'
            )
        );    
    ?>
    </nav>
    <div>
        <h1 class=page-title><?php the_title() ?></h1>
    </div>
