
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'main-menu',
                'menu_class'     => 'main-menu', // Classe CSS pour le menu
            ) );
            ?>
        </nav>
    </header>

    
