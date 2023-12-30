<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body class='bg-white-100'>
    <header class="mb-20 fixed bg-white-100 w-full">

        <!-- Logo -->
        <div class=" container mx-auto p-4 flex justify-between items-center">
            <a href="/" class="font-bold text-green-100">COTTAGE RETREAT</a>

            <!-- Navigation Links -->
            <nav id="toggle-menu" class="nav-links">
                <?php if (has_nav_menu('header-menu')): ?>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container' => 'ul',
                        'menu_class' => 'flex font-light text-green-100 gap-6'
                    )); ?>
                <?php else: ?>
                    <ul class="md:flex-row flex-col md:flex font-light text-green-100 gap-6">
                        <li'><a href="#">Nav button 01</a></li>
                        <li><a href="#">Nav button 02</a></li>
                        <li><a href="#">Nav button 03</a></li>
                    </ul>

                <?php endif; ?>
            </nav>

            <a href="javascript:void(0);" class="icon md:hidden" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>