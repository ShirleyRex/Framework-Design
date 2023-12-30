<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body class='bg-white-100'>
    <header id="header" class="mb-10 fixed bg-white-100 w-full">

        <!-- Logo -->
        <div class=" container mx-auto p-4 flex justify-between items-center">
            <a href="/" class="font-bold text-green-100 logo">COTTAGE RETREAT</a>

            <!-- Navigation Links -->
            <nav id="toggle-menu" class="nav-links bg-green-100 md:bg-white-100 md:h-fit h-screen">
                <?php if (has_nav_menu('header-menu')): ?>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container' => 'ul',
                        'menu_class' => 'flex font-light text-green-100 gap-6'
                    )); ?>
                <?php else: ?>
                    <ul
                        class="md:flex-row flex-col md:flex font-light text-white-100 md:text-green-100 gap-6 bg-green-100 md:bg-white-100 md:h-fit h-screen">
                        <li><a href="#">Nav button 01</a></li>
                        <li><a href="#">Nav button 02</a></li>
                        <li><a href="#">Nav button 03</a></li>
                    </ul>

                <?php endif; ?>
            </nav>

            <button class="icon md:hidden" onclick="myFunction()">
                <i id="icon" class="fa fa-bars"></i>
            </button>
        </div>
    </header>