<?php

get_header();

require_once get_template_directory() . "/includes/render-fields.php";

?>
<main class="pt-24 md:pt-48">
    <section class="flex flex-col items-start mb-20">
        <!-- Text Section -->
        <div class="container mx-auto p-4 text-green-100">
            <h1 class="md:text-4xl text-2xl md:w-2/3">
                <?php echo esc_html($hero_text) ?>
            </h1>
        </div>

        <!-- Image Section -->
        <div class="w-full p-2">
            <img src="<?php echo esc_url($hero_image) ?>" alt="beautiful sunset"
                class="w-full h-auto object-cover md:p-6 ">
        </div>
    </section>

    <section class="text-green-100 mb-20">
        <div class="sm:container mx-auto p-4 lg:w-3/5">
            <p class="text-sm mb-5">
                <?php echo esc_html($section2_text1) ?>
            </p>
            <h2 class="text-2xl md:text-3xl mb-5 md:w-2/3">
                <?php echo esc_html($section2_text2) ?>
            </h2>
            <p class="font-light mb-10 w-4/5">
                <?php echo esc_html($section2_text3) ?>
            </p>
            <a href="<?php echo esc_url($section2_button_link) ?>"
                class="button rounded-full border-2 border-neutral-800 text-xs font-medium text-center">
                <?php echo esc_html($section2_button_text) ?>
            </a>
        </div>
    </section>



    <section class='mb-20'>
        <div class="container mx-auto p-5">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-3">
                <!-- Image 1 -->
                <div class="md:col-span-3 md:h-96 h-80 overflow-hidden">
                    <img src="<?php echo esc_url($section3_image1) ?>" alt="Mountain top view"
                        class="w-full object-cover h-full">
                </div>
                <!-- Image 2 -->
                <div class="h-96 overflow-hidden">
                    <img src="<?php echo esc_url($section3_image2) ?>" alt="House covered with tall trees"
                        class="w-full object-cover h-full">
                </div>
                <!-- Image 3 -->
                <div class="md:col-span-4 h-80 ">
                    <img src="<?php echo esc_url($section3_image3) ?>"
                        alt="A staircase built with wood leading to the bedroom area"
                        class="w-full object-cover h-full">
                </div>
                <!-- Image 4 -->
                <div class="md:col-span-2 md:h-112 h-80">
                    <img src="<?php echo esc_url($section3_image4) ?>"
                        alt="Lovely white couch in a small sized living room with a nice artwork on the wall"
                        class="w-full object-cover h-full">
                </div>
                <!-- Image 5 -->
                <div class="md:col-span-2 md:h-112 h-80">
                    <img src="<?php echo esc_url($section3_image5) ?>" alt="Lake view in what feels like winter"
                        class="w-full object-cover h-full">
                </div>
                <!-- Image 6 -->
                <div class="h-80">
                    <img src="<?php echo esc_url($section3_image6) ?>"
                        alt="Small kitchen area built completely with wood and has a staircase by it"
                        class="w-full object-cover h-full">
                </div>
                <!-- Image 7 -->
                <div class="md:col-span-3 h-80">
                    <img src="<?php echo esc_url($section3_image7) ?>"
                        alt="A bedroom with a tea table that's facing the nice view outside the window"
                        class="w-full object-cover h-full">
                </div>
            </div>
        </div>
    </section>

    <section class='mb-20'>
        <div class='sm:container mx-auto p-4 lg:w-3/4'>
            <div class='text-green-100 mb-5'>
                <h3 class='mb-5 md:text-4xl text-2xl'>
                    <?php echo esc_html($section4_text1) ?>
                </h3>
                <p class="font-light text-sm md:w-1/2 leading-6">
                    <?php echo esc_html($section4_text2) ?>
                </p>
            </div>

            <div>
                <div class='mb-5 md:text-xl text-sm items-center'>
                    <div class='flex justify-between'>
                        <div class='flex items-center gap-5 md:gap-20'>
                            <span class='font-light text-sm'>01</span>
                            <h1>
                                <?php echo esc_html($section4_question1) ?>
                            </h1>
                        </div>
                        <button class='accordion'></button>
                    </div>
                    <div class='panel'>
                        <p class='text-sm md:text-base my-5 font-light md:w-3/4 ml-8 md:ml-24'>Lorem ipsum dolor sit
                            amet consectetur.
                            Bibendum cras dolor adipiscing odio sapien nunc vitae. Et amet maecenas morbi praesent justo
                            convallis facilisis phasellus.
                        </p>
                    </div>
                </div>
                <hr class='border-white-300 mb-5'>



                <div class='mb-5 md:text-xl text-sm items-center'>
                    <div class='flex justify-between'>
                        <div class='flex items-center gap-5 md:gap-20'>
                            <span class='font-light text-sm'>02</span>
                            <h1>
                                <?php echo esc_html($section4_question2) ?>
                            </h1>
                        </div>
                        <button class='accordion'></button>
                    </div>
                    <div class='panel'>
                        <p class='text-sm md:text-base my-5 font-light md:w-3/4 ml-8 md:ml-24'>Lorem ipsum dolor sit
                            amet consectetur.
                            Bibendum cras dolor adipiscing odio sapien nunc vitae. Et amet maecenas morbi praesent justo
                            convallis facilisis phasellus.
                        </p>
                    </div>
                </div>
                <hr class='border-white-300 mb-5'>

                <div class='mb-5 md:text-xl text-sm items-center'>
                    <div class='flex justify-between'>
                        <div class='flex items-center gap-5 md:gap-20'>
                            <span class='font-light text-sm'>03</span>
                            <h1>
                                <?php echo esc_html($section4_question3) ?>
                            </h1>
                        </div>
                        <button class='accordion'></button>
                    </div>
                    <div class='panel'>
                        <p class='text-sm md:text-base my-5 font-light md:w-3/4 ml-8 md:ml-24'>Lorem ipsum dolor sit
                            amet consectetur.
                            Bibendum cras dolor adipiscing odio sapien nunc vitae. Et amet maecenas morbi praesent justo
                            convallis facilisis phasellus.
                        </p>
                    </div>
                </div>
                <hr class='border-white-300 mb-5'>

                <div class='mb-5 md:text-xl text-sm items-center'>
                    <div class='flex justify-between'>
                        <div class='flex items-center gap-5 md:gap-20'>
                            <span class='font-light text-sm'>04</span>
                            <h1>
                                <?php echo esc_html($section4_question4) ?>
                            </h1>
                        </div>
                        <button class='accordion'></button>
                    </div>
                    <div class='panel'>
                        <p class='text-sm md:text-base my-5 font-light md:w-3/4 ml-8 md:ml-24'>Lorem ipsum dolor sit
                            amet consectetur.
                            Bibendum cras dolor adipiscing odio sapien nunc vitae. Et amet maecenas morbi praesent justo
                            convallis facilisis phasellus.
                        </p>
                    </div>
                </div>
                <hr class='border-white-300 mb-5'>

                <button type="button"
                    class=" button rounded-full border-2 border-neutral-800 text-xs font-medium text-center">
                    CTA Button
                </button>
            </div>
        </div>
    </section>
    <div class="container mx-auto p-4">
        <hr class='border-white-300'>
    </div>
</main>


<?php
get_footer();

?>