<?php
/**
 * freebank functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package freebank
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function freebank_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on freebank, use a find and replace
		* to change 'freebank' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'freebank', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'freebank' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'freebank_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'freebank_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function freebank_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'freebank_content_width', 640 );
}
add_action( 'after_setup_theme', 'freebank_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function freebank_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'freebank' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'freebank' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'freebank_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function freebank_scripts() {

	$stylesheet_directory_uri = trailingslashit( get_stylesheet_directory_uri() );

	wp_enqueue_style( 'freebank-main', 		$stylesheet_directory_uri . 'assets/css/main3.css', 			array(), '1.0.0' );
	wp_enqueue_style( 'freebank-owl', 		$stylesheet_directory_uri . 'assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css', 			array(), '1.0.0' );
	wp_enqueue_style( 'freebank-owl-theme', $stylesheet_directory_uri . 'assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css', array(), '1.0.0' );
	wp_enqueue_style( 'freebank-betterdocs-fix', $stylesheet_directory_uri . 'style-betterdocs-fix.css', array(), '1.0.1' );

	wp_enqueue_script( 'freebank-js-jq', 			    $stylesheet_directory_uri . 'assets/js/jquery.min.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'freebank-js-dynamicAdapt', 	$stylesheet_directory_uri . 'assets/js/dynamicAdapt.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'freebank-js-spincrement', 	$stylesheet_directory_uri . 'assets/js/jquery.spincrement.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'freebank-js-owl', 			$stylesheet_directory_uri . 'assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'freebank-js-main', 			$stylesheet_directory_uri . 'assets/js/main.js', array(), _S_VERSION, true );

	// Animasyonu DOM yüklendikten hemen sonra kapatmak için inline script
	wp_add_inline_script('freebank-js-jq', '
		jQuery(document).ready(function() {
			jQuery(".animation__wrapper").addClass("close");
			jQuery("#animation__wrapper").addClass("close");
			jQuery(".animation__wrapper").css("display", "none");
			jQuery("#animation__wrapper").css("display", "none");
			jQuery("body").removeClass("noscroll");
		});
	');

	// Animasyonu gizleyen CSS stilleri inline olarak ekle
	wp_add_inline_style('freebank-main', '
		.animation__wrapper,
		#animation__wrapper,
		div[id="animation__wrapper"],
		div[class="animation__wrapper"],
		div[class*="animation__wrapper"] {
			display: none !important;
			visibility: hidden !important;
			opacity: 0 !important;
			z-index: -1 !important;
			height: 0 !important;
			width: 0 !important;
			position: absolute !important;
			overflow: hidden !important;
			pointer-events: none !important;
		}
		.animation__wrapper.close {
			display: none !important;
		}
		body.noscroll {
			overflow: auto !important;
		}
	');
}
add_action( 'wp_enqueue_scripts', 'freebank_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function remove_editor() {
	remove_post_type_support('page', 'editor');
}
add_action('init', 'remove_editor');


// FreeBnk API Integration for Account Deletion Form
add_action('wpcf7_before_send_mail', 'freebnk_api_request');

function freebnk_api_request($contact_form) {
    // İlk log kaydı - fonksiyonun çağrıldığını kontrol et
    error_log('=== FreeBnk API Request Function Started ===');
    error_log('Form ID received: ' . $contact_form->id());

    // Form ID kontrolü
    if ($contact_form->id() == '185') {
        error_log('Form ID matched');
        
        try {
            // Form verilerini al
            $submission = WPCF7_Submission::get_instance();
            
            if ($submission) {
                $form_data = $submission->get_posted_data();
                error_log('Form Data Received: ' . print_r($form_data, true));
                
                // Email kontrolü
                $email = isset($form_data['email']) ? $form_data['email'] : '';
                error_log('Email found: ' . $email);
                
                if (!empty($email)) {
                    // API isteği hazırla
                    $post_data = array(
                        'email' => $email
                    );
                    
                    error_log('Sending request to FreeBnk API with data: ' . json_encode($post_data));
                    
                    // API isteği gönder
                    $response = wp_remote_post('https://api.freebnk.io/v1/delete-account/request', array(
                        'headers'     => array(
                            'Content-Type' => 'application/json'
                        ),
                        'body'        => json_encode($post_data),
                        'timeout'     => 45,
                        'sslverify'   => true
                    ));
                    
                    // Yanıt kontrolü
                    if (is_wp_error($response)) {
                        error_log('FreeBnk API Error: ' . $response->get_error_message());
                        error_log('Error Details: ' . print_r($response->get_error_messages(), true));
                    } else {
                        $response_code = wp_remote_retrieve_response_code($response);
                        $response_body = wp_remote_retrieve_body($response);
                        $response_headers = wp_remote_retrieve_headers($response);
                        
                        error_log('API Response Details:');
                        error_log('Status Code: ' . $response_code);
                        error_log('Response Body: ' . $response_body);
                        error_log('Response Headers: ' . print_r($response_headers, true));
                    }
                } else {
                    error_log('No email found in form submission');
                }
            } else {
                error_log('No submission instance found');
            }
        } catch (Exception $e) {
            error_log('Exception caught: ' . $e->getMessage());
            error_log('Exception trace: ' . $e->getTraceAsString());
        }
    } else {
        error_log('Form ID did not match. Expected: 594816, Got: ' . $contact_form->id());
    }
    
    error_log('=== FreeBnk API Request Function Ended ===');
    
    // Formun normal işleyişine devam etmesi için true döndür
    return true;
}

/**
 * Business Account Template için ACF alanlarını programatik olarak ayarla
 * Bu kod business-account.php şablonu için özel alanları tanımlar
 */

// Eğer ACF plugin'i aktifse
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_business_account',
        'title' => 'Business Account Settings',
        'fields' => array(
            // Ana başlık ve alt başlık
            array(
                'key' => 'field_business_title',
                'label' => 'Business Page Title',
                'name' => 'business_title',
                'type' => 'text',
                'default_value' => 'Open a Business Bank Account',
                'placeholder' => 'Enter page title',
            ),
            array(
                'key' => 'field_business_subtitle',
                'label' => 'Business Page Subtitle',
                'name' => 'business_subtitle',
                'type' => 'text',
                'default_value' => 'Experience seamless banking solutions designed for your business needs',
                'placeholder' => 'Enter page subtitle',
            ),
            
            // Form başlık ve açıklama
            array(
                'key' => 'field_form_title',
                'label' => 'Form Title',
                'name' => 'form_title',
                'type' => 'text',
                'default_value' => 'Business Bank Account',
                'placeholder' => 'Enter form title',
            ),
            array(
                'key' => 'field_form_description',
                'label' => 'Form Description',
                'name' => 'form_description',
                'type' => 'textarea',
                'default_value' => 'Complete the form below to start your business banking journey with us. Our dedicated team will guide you through the account opening process.',
                'placeholder' => 'Enter form description',
                'rows' => 3,
            ),
            
            // Avantajlar bölümü
            array(
                'key' => 'field_show_benefits',
                'label' => 'Show Benefits Section',
                'name' => 'show_benefits_section',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
            ),
            array(
                'key' => 'field_benefits_title',
                'label' => 'Benefits Section Title',
                'name' => 'benefits_title',
                'type' => 'text',
                'default_value' => 'Benefits of Our Business Banking',
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_show_benefits',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'field_benefits_subtitle',
                'label' => 'Benefits Section Subtitle',
                'name' => 'benefits_subtitle',
                'type' => 'text',
                'default_value' => 'Our comprehensive business banking solutions offer numerous advantages to help your business grow and succeed:',
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_show_benefits',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'field_benefits_items',
                'label' => 'Benefits Items',
                'name' => 'benefits_items',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Benefit Item',
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_show_benefits',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'sub_fields' => array(
                    array(
                        'key' => 'field_benefit_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'url',
                    ),
                    array(
                        'key' => 'field_benefit_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'field_benefits_footer',
                'label' => 'Benefits Footer Text',
                'name' => 'benefits_footer',
                'type' => 'textarea',
                'default_value' => 'After submitting the form, our dedicated business team will contact you within 2 business days to discuss your specific requirements and guide you through the account opening process. We look forward to partnering with you.',
                'rows' => 3,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_show_benefits',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'templates/business-account.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
    ));

endif;