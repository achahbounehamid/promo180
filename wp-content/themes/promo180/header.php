<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>ÉclatDev180</title>

    <?php wp_enqueue_style('style', get_stylesheet_uri());
    wp_head(); ?>



</head>

<body>

    <header>
        <!-- <div class="header-row-limit-size">
            <a href="./home.html">
                <h1 class="logo">ÉclatDev<span>180</span></h1>
            </a>
            <div class="nav-burger">
                <div class="menu-burger">
                    <img src="./assets/img/picto/burger.svg" alt="">
                </div>
                <nav class="navbar horizontal-menu dropdown">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'main_menu'
                    )) ?>


                </nav>
            </div>
        </div> -->
        <header>
        <div class="header-row-limit-size">
            <a href="./home.html">
                <h1 class="logo">ÉclatDev<span>180</span></h1>
            </a>
            <div class="nav-burger">
                <div class="menu-burger">
                    <img src="./assets/picture/picto/burger.svg" alt="">
                </div>
                <nav class="navbar horizontal-menu dropdown">
                <?php wp_nav_menu(array(
                        'theme_location' => 'main_menu'
                    )) ?>

                </nav>
            </div>
        </div>

    </header>
    <main>
        <?php wp_enqueue_script(

            'modal_burger',
            get_template_directory_uri() . '/assets/js/modal_burger.js',
            array(
                'strategy'  => 'defer',
            )
        );
        ?>