<?php

get_header();

$hero_text = !empty($custom_hero_text = get_post_meta(get_the_ID(), 'hero_text', true)) ? $custom_hero_text : 'Lorem ipsum dolor sit amet consectetur. Et at quam ac vitae.';
$hero_image = !empty($custom_hero_image = get_post_meta(get_the_ID(), 'hero_image', true)) ? $custom_hero_image : get_template_directory_uri() . '/src/assets/hero-image.png';
$section2_text1 = !empty($custom_section2_text1 = get_post_meta(get_the_ID(), 'section2_text1', true)) ? $custom_section2_text1 : 'Subheading';
$section2_text2 = !empty($custom_section2_text2 = get_post_meta(get_the_ID(), 'section2_text2', true)) ? $custom_section2_text2 : 'Lorem ipsum dolor sit amet consectetur. Nibh ut nullam senectus sit vitae vitae ultricies.';
$section2_text3 = !empty($custom_section2_text3 = get_post_meta(get_the_ID(), 'section2_text3', true)) ? $custom_section2_text3 : 'Lorem ipsum dolor sit amet consectetur. Lorem ut eu enim dolor in diam velit diam. Pretium nulla eget mattis feugiat vel neque augue nisl vitae. Egestas sed erat molestie cras accumsan purus tincidunt. Elementum ultrices quis est semper donec tortor. Lacus.';
$section2_button_text = !empty($custom_section2_button_text = get_post_meta(get_the_ID(), 'section2_button_text', true)) ? $custom_section2_button_text : 'CTA Button';
$section2_button_link = !empty($custom_section2_button_link = get_post_meta(get_the_ID(), 'section2_button_link', true)) ? $custom_section2_button_link : '/';
$section3_image1 = !empty($custom_section3_image1 = get_post_meta(get_the_ID(), 'section3_image1', true)) ? $custom_section3_image1 : get_template_directory_uri() . '/src/assets/img-1.png';
$section3_image2 = !empty($custom_section3_image2 = get_post_meta(get_the_ID(), 'section3_image2', true)) ? $custom_section3_image2 : get_template_directory_uri() . '/src/assets/img-2.png';
$section3_image3 = !empty($custom_section3_image3 = get_post_meta(get_the_ID(), 'section3_image3', true)) ? $custom_section3_image3 : get_template_directory_uri() . '/src/assets/img-3.png';
$section3_image4 = !empty($custom_section3_image4 = get_post_meta(get_the_ID(), 'section3_image4', true)) ? $custom_section3_image4 : get_template_directory_uri() . '/src/assets/img-4.png';
$section3_image5 = !empty($custom_section3_image5 = get_post_meta(get_the_ID(), 'section3_image5', true)) ? $custom_section3_image5 : get_template_directory_uri() . '/src/assets/img-5.png';
$section3_image6 = !empty($custom_section3_image6 = get_post_meta(get_the_ID(), 'section3_image6', true)) ? $custom_section3_image6 : get_template_directory_uri() . '/src/assets/img-6.png';
$section3_image7 = !empty($custom_section3_image7 = get_post_meta(get_the_ID(), 'section3_image7', true)) ? $custom_section3_image7 : get_template_directory_uri() . '/src/assets/img-7.png';
$section4_text1 = !empty($custom_section4_text1 = get_post_meta(get_the_ID(), 'section4_text1', true)) ? $custom_section4_text1 : 'Heading text here...';
$section4_text2 = !empty($custom_section4_text2 = get_post_meta(get_the_ID(), 'section4_text2', true)) ? $custom_section4_text2 : 'Lorem ipsum dolor sit amet consectetur. Malesuada sit consequat tristique consectetur sit tristique amet in. Etiam egestas elit vestibulum commodo.';
$section4_question1 = !empty($custom_section4_question1 = get_post_meta(get_the_ID(), 'section4_question1', true)) ? $custom_section4_question1 : 'Lorem ipsum
dolor sit amet consectetur. Ac posuere accumsan?';
$section4_answer1 = !empty($custom_section4_answer1 = get_post_meta(get_the_ID(), 'section4_answer1', true)) ? $custom_section4_answer1 : '';
$section4_question2 = !empty($custom_section4_question2 = get_post_meta(get_the_ID(), 'section4_question2', true)) ? $custom_section4_question2 : 'Lorem ipsum
dolor sit amet consectetur. Ac posuere accumsan?';
$section4_answer2 = !empty($custom_section4_answer2 = get_post_meta(get_the_ID(), 'section4_answer2', true)) ? $custom_section4_answer2 : '';
$section4_question3 = !empty($custom_section4_question3 = get_post_meta(get_the_ID(), 'section4_question3', true)) ? $custom_section4_question3 : 'Lorem ipsum
dolor sit amet consectetur. Ac posuere accumsan?';
$section4_answer3 = !empty($custom_section4_answer3 = get_post_meta(get_the_ID(), 'section4_answer3', true)) ? $custom_section4_answer3 : 'Lorem ipsum dolor sit amet consectetur. Bibendum cras dolor adipiscing odio sapien nunc vitae. Et amet maecenas morbi praesent justo convallis facilisis phasellus. Feugiat ac pretium augue pharetra adipiscing. In
dictum vitae nunc urna. Tincidunt augue diam amet tincidunt amet. Tellus pharetra nunc etiam laoreet non ultricies a suspendisse. At.';
$section4_question4 = !empty($custom_section4_question4 = get_post_meta(get_the_ID(), 'section4_question4', true)) ? $custom_section4_question4 : 'Lorem ipsum
dolor sit amet consectetur. Ac posuere accumsan?';
$section4_answer4 = !empty($custom_section4_answer4 = get_post_meta(get_the_ID(), 'section4_answer4', true)) ? $custom_section4_answer4 : '';
$section4_button_text = !empty($custom_section4_button_text = get_post_meta(get_the_ID(), 'section4_button_text', true)) ? $custom_section4_button_text : 'CTA Button';
$section4_button_link = !empty($custom_section4_button_link = get_post_meta(get_the_ID(), 'section4_button_link', true)) ? $custom_section4_button_link : '/';


?>
<main class="">
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
            <h2 class="text-3xl mb-5 w-2/3">
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
                    <img src="<?php echo esc_html($section3_image1) ?>" alt="Mountain top view"
                        class="w-full object-cover h-full">
                </div>
                <!-- Image 2 -->
                <div class="h-96 overflow-hidden">
                    <img src="<?php echo esc_html($section3_image2) ?>" alt="House covered with tall trees"
                        class="w-full object-cover h-full">
                </div>
                <!-- Image 3 -->
                <div class="md:col-span-4 h-80 ">
                    <img src="<?php echo esc_html($section3_image3) ?>"
                        alt="A staircase built with wood leading to the bedroom area"
                        class="w-full object-cover h-full">
                </div>
                <!-- Image 4 -->
                <div class="md:col-span-2 md:h-112 h-80">
                    <img src="<?php echo esc_html($section3_image4) ?>"
                        alt="Lovely white couch in a small sized living room with a nice artwork on the wall"
                        class="w-full object-cover h-full">
                </div>
                <!-- Image 5 -->
                <div class="md:col-span-2 md:h-112 h-80">
                    <img src="<?php echo esc_html($section3_image5) ?>" alt="Lake view in what feels like winter"
                        class="w-full object-cover h-full">
                </div>
                <!-- Image 6 -->
                <div class="h-80">
                    <img src="<?php echo esc_html($section3_image6) ?>"
                        alt="Small kitchen area built completely with wood and has a staircase by it"
                        class="w-full object-cover h-full">
                </div>
                <!-- Image 7 -->
                <div class="md:col-span-3 h-80">
                    <img src="<?php echo esc_html($section3_image7) ?>"
                        alt="A bedroom with a tea table that's facing the nice view outside the window"
                        class="w-full object-cover h-full">
                </div>
            </div>
        </div>
    </section>

    <section class='mb-20'>
        <div class='sm:container mx-auto p-4 lg:w-3/4'>
            <div class='text-green-100 mb-5'>
                <h3 class='mb-5 text-4xl'>
                    <?php echo esc_html($section4_text1) ?>
                </h3>
                <p class="font-light text-sm w-1/2 leading-6">
                    <?php echo esc_html($section4_text2) ?>
                </p>
            </div>

            <div>
                <p class='mb-5 text-xl flex items-center gap-20'><span class='font-light text-sm'>01</span>
                    <?php echo esc_html($section4_question1) ?>

                    <svg class="ml-72" width="22" height="21" viewBox="0 0 22 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="Group 40189">
                            <line id="Line 3" x1="10.7153" y1="2.13951e-08" x2="10.7153" y2="21" stroke="#2E4845" />
                            <line id="Line 4" y1="10.5" x2="21.4521" y2="10.5" stroke="#2E4845" />
                        </g>
                    </svg>
                </p>
                <hr class='border-white-300 mb-5'>

                <p class='mb-5 text-xl flex items-center gap-20'><span class='font-light text-sm'>02</span>
                    <?php echo esc_html($section4_question2) ?>

                    <svg class="ml-72" width="22" height="21" viewBox="0 0 22 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="Group 40189">
                            <line id="Line 3" x1="10.7153" y1="2.13951e-08" x2="10.7153" y2="21" stroke="#2E4845" />
                            <line id="Line 4" y1="10.5" x2="21.4521" y2="10.5" stroke="#2E4845" />
                        </g>
                    </svg>

                </p>
                <hr class='border-white-300 mb-5'>

                <p class='mb-5 text-xl flex items-center gap-20'><span class='font-light text-sm'>03</span>
                    <?php echo esc_html($section4_question3) ?>

                    <svg class="ml-72" width="22" height="1" viewBox="0 0 22 1" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="Group 40191">
                            <line id="Line 4" y1="0.5" x2="21.4521" y2="0.5" stroke="#2E4845" />
                        </g>
                    </svg>

                </p>
                <hr class='border-white-300 mb-5'>

                <p class=' text-sm mb-5 font-light w-3/4 ml-24 leading-6'>
                    <?php echo esc_html($section4_answer3) ?>
                </p>

                <p class='mb-5 text-xl flex items-center gap-20'><span class='font-light text-sm'>04</span>
                    <?php echo esc_html($section4_question4) ?>

                    <svg class="ml-72" width="22" height="21" viewBox="0 0 22 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="Group 40189">
                            <line id="Line 3" x1="10.7153" y1="2.13951e-08" x2="10.7153" y2="21" stroke="#2E4845" />
                            <line id="Line 4" y1="10.5" x2="21.4521" y2="10.5" stroke="#2E4845" />
                        </g>
                    </svg>

                </p>
                <hr class='border-white-300 mb-10'>

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