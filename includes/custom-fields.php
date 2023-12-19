<?php

class CustomFields
{
    public static function add_meta_boxes()
    {
        add_meta_box('section1_fields', 'Section 1', array(__CLASS__, 'render_section1_fields'), 'page', 'normal', 'default');
        add_meta_box('section2_fields', 'Section 2', array(__CLASS__, 'render_section2_fields'), 'page', 'normal', 'default');
        add_meta_box('section3_fields', 'Section 3', array(__CLASS__, 'render_section3_fields'), 'page', 'normal', 'default');
        add_meta_box('section4_fields', 'Section 4 (FAQ)', array(__CLASS__, 'render_section4_fields'), 'page', 'normal', 'default');

    }

    public static function render_section1_fields($post)
    {
        $hero_text = get_post_meta($post->ID, 'hero_text', true);
        $hero_image = get_post_meta($post->ID, 'hero_image', true);

        ?>
        <label for="hero_text">Hero Text:</label>
        <input type="text" id="hero_text" name="hero_text" value="<?php echo esc_attr($hero_text); ?>" style="width: 100%;">

        <br>

        <label for="hero_image">Hero Image:</label>
        <input type="file" id="hero_image" name="hero_image" accept="image/*">
        <?php if (!empty($hero_image)): ?>
            <img src="<?php echo esc_url($hero_image); ?>" alt="Beautiful sunset" style="max-width: 100%;">
        <?php endif;
    }

    public static function save_hero_section_fields($post_id)
    {
        if (isset($_POST['hero_text'])) {
            update_post_meta($post_id, 'hero_text', sanitize_text_field($_POST['hero_text']));
        }

        if (!empty($_FILES['hero_image']['name'])) {
            $upload_overrides = array('test_form' => false);
            $movefile = wp_handle_upload($_FILES['hero_image'], $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {
                update_post_meta($post_id, 'hero_image', $movefile['url']);
            }
        }
    }


    public static function render_section2_fields($post)
    {
        $section2_text1 = get_post_meta($post->ID, 'section2_text1', true);
        $section2_text2 = get_post_meta($post->ID, 'section2_text2', true);
        $section2_text3 = get_post_meta($post->ID, 'section2_text3', true);
        $section2_button_text = get_post_meta($post->ID, 'section2_button_text', true);
        $section2_button_link = get_post_meta($post->ID, 'section2_button_link', true);


        ?>
        <label for="section2_text1">Section2 Text1:</label>
        <input type="text" id="section2_text1" name="section2_text1" value="<?php echo esc_attr($section2_text1); ?>"
            style="width: 100%;">

        <br>

        <label for="section2_text2">Section2 Text2:</label>
        <input type="text" id="section2_text2" name="section2_text2" value="<?php echo esc_attr($section2_text2); ?>"
            style="width: 100%;">

        <br>

        <label for="section2_text3">Section2 Text3:</label>
        <input type="text" id="section2_text3" name="section2_text3" value="<?php echo esc_attr($section2_text3); ?>"
            style="width: 100%;">

        <br>

        <label for="section2_button_text">Section2 Button Text:</label>
        <input type="text" id="section2_button_text" name="section2_button_text"
            value="<?php echo esc_attr($section2_button_text); ?>" style="width: 100%;">

        <br>

        <label for="section2_button_link">Section2 Button Link:</label>
        <input type="url" id="section2_button_link" name="section2_button_link"
            value="<?php echo esc_attr($section2_button_link); ?>" style="width: 100%;">
        <?php
    }

    public static function save_section2_fields($post_id)
    {
        if (isset($_POST['section2_text1'])) {
            update_post_meta($post_id, 'section2_text1', sanitize_text_field($_POST['section2_text1']));
        }

        if (isset($_POST['section2_text2'])) {
            update_post_meta($post_id, 'section2_text2', sanitize_text_field($_POST['section2_text2']));
        }

        if (isset($_POST['section2_text3'])) {
            update_post_meta($post_id, 'section2_text3', sanitize_text_field($_POST['section2_text3']));
        }

        if (isset($_POST['section2_button_text'])) {
            update_post_meta($post_id, 'section2_button_text', sanitize_text_field($_POST['section2_button_text']));
        }

        if (isset($_POST['section2_button_link'])) {
            update_post_meta($post_id, 'section2_button_link', sanitize_text_field($_POST['section2_button_link']));
        }


    }

    public static function render_section3_fields($post)
    {
        $section3_image1 = get_post_meta($post->ID, 'section3_image1', true);
        $section3_image2 = get_post_meta($post->ID, 'section3_image2', true);
        $section3_image3 = get_post_meta($post->ID, 'section3_image3', true);
        $section3_image4 = get_post_meta($post->ID, 'section3_image4', true);
        $section3_image5 = get_post_meta($post->ID, 'section3_image5', true);
        $section3_image6 = get_post_meta($post->ID, 'section3_image6', true);
        $section3_image7 = get_post_meta($post->ID, 'section3_image7', true);

        ?>

        <label for="section3_image1">Section3 Image1:</label>
        <input type="file" id="section3_image1" name="section3_image1" accept="image/*">
        <?php if (!empty($section3_image1)): ?>
            <img src="<?php echo esc_url($section3_image1); ?>" alt="Mountain top view" style="max-width: 100%;">
        <?php endif; ?>

        <br>

        <label for="section3_image2">Section3 Image2:</label>
        <input type="file" id="section3_image2" name="section3_image2" accept="image/*">
        <?php if (!empty($section3_image2)): ?>
            <img src="<?php echo esc_url($section3_image2); ?>" alt="House covered with tall trees" style="max-width: 100%;">
        <?php endif; ?>

        <br>

        <label for="section3_image3">Section3 Image3:</label>
        <input type="file" id="section3_image3" name="section3_image3" accept="image/*">
        <?php if (!empty($section3_image3)): ?>
            <img src="<?php echo esc_url($section3_image3); ?>" alt="A staircase built with wood leading to the bedroom area"
                style="max-width: 100%;">
        <?php endif; ?>

        <br>

        <label for="section3_image4">Section3 Image4:</label>
        <input type="file" id="section3_image4" name="section3_image4" accept="image/*">
        <?php if (!empty($section3_image4)): ?>
            <img src="<?php echo esc_url($section3_image4); ?>"
                alt="Lovely white couch in a small sized living room with a nice artwork on the wall" style="max-width: 100%;">
        <?php endif; ?>

        <br>

        <label for="section3_image5">Section3 Image5:</label>
        <input type="file" id="section3_image5" name="section3_image5" accept="image/*">
        <?php if (!empty($section3_image5)): ?>
            <img src="<?php echo esc_url($section3_image5); ?>" alt="Lake view in what feels like winter" style="max-width: 100%;">
        <?php endif; ?>

        <br>

        <label for="section3_image6">Section3 Image6:</label>
        <input type="file" id="section3_image6" name="section3_image6" accept="image/*">
        <?php if (!empty($section3_image6)): ?>
            <img src="<?php echo esc_url($section3_image6); ?>"
                alt="Small kitchen area built completely with wood and has a staircase by it" style="max-width: 100%;">
        <?php endif; ?>

        <br>

        <label for="section3_image7">Section3 Image7:</label>
        <input type="file" id="section3_image7" name="section3_image7" accept="image/*">
        <?php if (!empty($section3_image7)): ?>
            <img src="<?php echo esc_url($section3_image7); ?>"
                alt="A bedroom with a tea table that's facing the nice view outside the window" style="max-width: 100%;">
        <?php endif;
    }

    public static function save_section3_fields($post_id)
    {
        if (!empty($_FILES['section3_image1']['name'])) {
            $upload_overrides = array('test_form' => false);
            $movefile = wp_handle_upload($_FILES['section3_image1'], $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {
                update_post_meta($post_id, 'section3_image1', $movefile['url']);
            }
        }

        if (!empty($_FILES['section3_image2']['name'])) {
            $upload_overrides = array('test_form' => false);
            $movefile = wp_handle_upload($_FILES['section3_image2'], $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {
                update_post_meta($post_id, 'section3_image2', $movefile['url']);
            }
        }

        if (!empty($_FILES['section3_image3']['name'])) {
            $upload_overrides = array('test_form' => false);
            $movefile = wp_handle_upload($_FILES['section3_image3'], $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {
                update_post_meta($post_id, 'section3_image3', $movefile['url']);
            }
        }

        if (!empty($_FILES['section3_image4']['name'])) {
            $upload_overrides = array('test_form' => false);
            $movefile = wp_handle_upload($_FILES['section3_image4'], $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {
                update_post_meta($post_id, 'section3_image4', $movefile['url']);
            }
        }

        if (!empty($_FILES['section3_image5']['name'])) {
            $upload_overrides = array('test_form' => false);
            $movefile = wp_handle_upload($_FILES['section3_image5'], $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {
                update_post_meta($post_id, 'section3_image5', $movefile['url']);
            }
        }

        if (!empty($_FILES['section3_image6']['name'])) {
            $upload_overrides = array('test_form' => false);
            $movefile = wp_handle_upload($_FILES['section3_image6'], $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {
                update_post_meta($post_id, 'section3_image6', $movefile['url']);
            }
        }

        if (!empty($_FILES['section3_image7']['name'])) {
            $upload_overrides = array('test_form' => false);
            $movefile = wp_handle_upload($_FILES['section3_image7'], $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {
                update_post_meta($post_id, 'section3_image7', $movefile['url']);
            }
        }
    }

    public static function render_section4_fields($post)
    {
        $section4_text1 = get_post_meta($post->ID, 'section4_text1', true);
        $section4_text2 = get_post_meta($post->ID, 'section4_text2', true);
        $section4_question1 = get_post_meta($post->ID, 'section4_question1', true);
        $section4_answer1 = get_post_meta($post->ID, 'section4_answer1', true);
        $section4_question2 = get_post_meta($post->ID, 'section4_question2', true);
        $section4_answer2 = get_post_meta($post->ID, 'section4_answer2', true);
        $section4_question3 = get_post_meta($post->ID, 'section4_question3', true);
        $section4_answer3 = get_post_meta($post->ID, 'section4_answer3', true);
        $section4_question4 = get_post_meta($post->ID, 'section4_question4', true);
        $section4_answer4 = get_post_meta($post->ID, 'section4_answer4', true);
        $section4_button_text = get_post_meta($post->ID, 'section4_button_text', true);
        $section4_button_link = get_post_meta($post->ID, 'section4_button_link', true);


        ?>
        <label for="section4_text1">Section4 Text1:</label>
        <input type="text" id="section4_text1" name="section4_text1" value="<?php echo esc_attr($section4_text1); ?>"
            style="width: 100%;">

        <br>

        <label for="section4_text2">Section4 Text2:</label>
        <input type="text" id="section4_text2" name="section4_text2" value="<?php echo esc_attr($section4_text2); ?>"
            style="width: 100%;">

        <br>

        <label for="section4_question1">Section4 Question1:</label>
        <input type="text" id="section4_question1" name="section4_question1"
            value="<?php echo esc_attr($section4_question1); ?>" style="width: 100%;">

        <br>

        <label for="section4_answer1">Section4 Answer1:</label>
        <input type="text" id="section4_answer1" name="section4_answer1" value="<?php echo esc_attr($section4_answer1); ?>"
            style="width: 100%;">

        <br>

        <label for="section4_question2">Section4 Question2:</label>
        <input type="text" id="section4_question2" name="section4_question2"
            value="<?php echo esc_attr($section4_question2); ?>" style="width: 100%;">

        <br>

        <label for="section4_answer2">Section4 Answer2:</label>
        <input type="text" id="section4_answer2" name="section4_answer2" value="<?php echo esc_attr($section4_answer2); ?>"
            style="width: 100%;">

        <br>

        <label for="section4_question3">Section4 Question3:</label>
        <input type="text" id="section4_question3" name="section4_question3"
            value="<?php echo esc_attr($section4_question3); ?>" style="width: 100%;">

        <br>

        <label for="section4_answer3">Section4 Answer3:</label>
        <input type="text" id="section4_answer3" name="section4_answer3" value="<?php echo esc_attr($section4_answer3); ?>"
            style="width: 100%;">

        <br>

        <label for="section4_question4">Section4 Question4:</label>
        <input type="text" id="section4_question4" name="section4_question4"
            value="<?php echo esc_attr($section4_question4); ?>" style="width: 100%;">

        <br>

        <label for="section4_answer4">Section4 Answer4:</label>
        <input type="text" id="section4_answer4" name="section4_answer4" value="<?php echo esc_attr($section4_answer4); ?>"
            style="width: 100%;">

        <br>

        <label for="section4_button_text">Section4 Button Text:</label>
        <input type="text" id="section4_button_text" name="section4_button_text"
            value="<?php echo esc_attr($section4_button_text); ?>" style="width: 100%;">

        <br>

        <label for="section4_button_link">Section4 Button Link:</label>
        <input type="url" id="section4_button_link" name="section4_button_link"
            value="<?php echo esc_attr($section4_button_link); ?>" style="width: 100%;">
        <?php
    }

    public static function save_section4_fields($post_id)
    {
        if (isset($_POST['section4_text1'])) {
            update_post_meta($post_id, 'section4_text1', sanitize_text_field($_POST['section4_text1']));
        }

        if (isset($_POST['section4_text2'])) {
            update_post_meta($post_id, 'section4_text2', sanitize_text_field($_POST['section4_text2']));
        }

        if (isset($_POST['section4_question1'])) {
            update_post_meta($post_id, 'section4_question1', sanitize_text_field($_POST['section4_question1']));
        }

        if (isset($_POST['section4_answer1'])) {
            update_post_meta($post_id, 'section4_answer1', sanitize_text_field($_POST['section4_answer1']));
        }

        if (isset($_POST['section4_question2'])) {
            update_post_meta($post_id, 'section4_question2', sanitize_text_field($_POST['section4_question2']));
        }

        if (isset($_POST['section4_answer2'])) {
            update_post_meta($post_id, 'section4_answer2', sanitize_text_field($_POST['section4_answer2']));
        }

        if (isset($_POST['section4_question3'])) {
            update_post_meta($post_id, 'section4_question3', sanitize_text_field($_POST['section4_question3']));
        }

        if (isset($_POST['section4_answer3'])) {
            update_post_meta($post_id, 'section4_answer3', sanitize_text_field($_POST['section4_answer3']));
        }

        if (isset($_POST['section4_question4'])) {
            update_post_meta($post_id, 'section4_question4', sanitize_text_field($_POST['section4_question4']));
        }

        if (isset($_POST['section4_answer4'])) {
            update_post_meta($post_id, 'section4_answer4', sanitize_text_field($_POST['section4_answer4']));
        }

        if (isset($_POST['section4_button_text'])) {
            update_post_meta($post_id, 'section4_button_text', sanitize_text_field($_POST['section4_button_text']));
        }

        if (isset($_POST['section4_button_link'])) {
            update_post_meta($post_id, 'section4_button_link', sanitize_text_field($_POST['section4_button_link']));
        }


    }
}

add_action('add_meta_boxes', array('CustomFields', 'add_meta_boxes'));

add_action('save_post', array('CustomFields', 'save_hero_section_fields'));

add_action('save_post', array('CustomFields', 'save_section2_fields'));

add_action('save_post', array('CustomFields', 'save_section3_fields'));

add_action('save_post', array('CustomFields', 'save_section4_fields'));







?>