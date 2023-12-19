<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body class='bg-white-100'>
    <header class="mb-20">

        <!-- Logo -->
        <div class=" container mx-auto p-4 flex justify-between items-center">
            <a href="/" class="font-bold text-green-100">COTTAGE RETREAT</a>

            <!-- Navigation Links -->
            <nav class="hidden md:block">
                <ul class="flex font-light text-green-100 gap-6">
                    <li><a href="#">Nav button 01</a></li>
                    <li><a href="#">Nav button 02</a></li>
                    <li><a href="#">Nav button 03</a></li>
                </ul>
            </nav>
        </div>
    </header>