<?php
// Theme setup
function unixhub_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'unixhub'),
        'footer' => __('Footer Menu', 'unixhub')
    ));
}
add_action('after_setup_theme', 'unixhub_setup');

// Enqueue scripts and styles
function unixhub_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    
    // Main theme style
    wp_enqueue_style('main-style', get_stylesheet_uri());
    
    // Custom CSS
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css');
    
    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    
    // Custom JS
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
    
    // AJAX for sell product form
    wp_localize_script('custom-js', 'unixhub_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('sell_product_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'unixhub_scripts');

// Register custom post types if needed
function unixhub_register_custom_post_types() {
    // Add custom post types here if needed
}
add_action('init', 'unixhub_register_custom_post_types');

// Add custom fields to product
function unixhub_custom_product_fields() {
    global $product_object;
    
    echo '<div class="options_group">';
    
    // Product Condition
    woocommerce_wp_select(array(
        'id' => 'product_condition',
        'label' => __('Product Condition', 'unixhub'),
        'options' => array(
            'new' => __('New', 'unixhub'),
            'used' => __('Used - Like New', 'unixhub'),
            'used_good' => __('Used - Good', 'unixhub'),
            'used_fair' => __('Used - Fair', 'unixhub')
        )
    ));
    
    // Product Location
    woocommerce_wp_text_input(array(
        'id' => 'product_location',
        'label' => __('Location', 'unixhub'),
        'placeholder' => __('e.g., Dhaka, Chittagong, Rajshahi', 'unixhub'),
        'desc_tip' => true,
        'description' => __('Enter the city where the product is located', 'unixhub')
    ));
    
    // Contact Number
    woocommerce_wp_text_input(array(
        'id' => 'contact_number',
        'label' => __('Seller Contact Number', 'unixhub'),
        'placeholder' => __('+8801XXXXXXXXX', 'unixhub')
    ));
    
    echo '</div>';
}
add_action('woocommerce_product_options_general_product_data', 'unixhub_custom_product_fields');

// Save custom fields
function unixhub_save_product_fields($post_id) {
    $product = wc_get_product($post_id);
    
    if (isset($_POST['product_condition'])) {
        $product->update_meta_data('product_condition', sanitize_text_field($_POST['product_condition']));
    }
    
    if (isset($_POST['product_location'])) {
        $product->update_meta_data('product_location', sanitize_text_field($_POST['product_location']));
    }
    
    if (isset($_POST['contact_number'])) {
        $product->update_meta_data('contact_number', sanitize_text_field($_POST['contact_number']));
    }
    
    $product->save();
}
add_action('woocommerce_process_product_meta', 'unixhub_save_product_fields');

// Display custom fields on product page
function unixhub_display_product_fields() {
    global $product;
    
    if ($condition = $product->get_meta('product_condition')) {
        echo '<p class="product-condition"><strong>' . __('Condition:', 'unixhub') . '</strong> ' . esc_html($condition) . '</p>';
    }
    
    if ($location = $product->get_meta('product_location')) {
        echo '<p class="product-location"><strong>' . __('Location:', 'unixhub') . '</strong> ' . esc_html($location) . '</p>';
    }
}
add_action('woocommerce_single_product_summary', 'unixhub_display_product_fields', 25);

// Handle sell product form submission
function unixhub_handle_sell_product_form() {
    // Verify nonce
    if (!isset($_POST['sell_product_nonce']) || 
        !wp_verify_nonce($_POST['sell_product_nonce'], 'sell_product_action')) {
        wp_die('Security check failed');
    }
    
    // Sanitize input
    $product_name = sanitize_text_field($_POST['product_name']);
    $product_description = sanitize_textarea_field($_POST['product_description']);
    $product_category = sanitize_text_field($_POST['product_category']);
    $product_condition = sanitize_text_field($_POST['product_condition']);
    $price_suggestion = floatval($_POST['price_suggestion']);
    $product_location = sanitize_text_field($_POST['product_location']);
    $contact_number = sanitize_text_field($_POST['contact_number']);
    $contact_email = sanitize_email($_POST['contact_email']);
    
    // Create product as draft
    $post_id = wp_insert_post(array(
        'post_title' => $product_name,
        'post_content' => $product_description,
        'post_status' => 'draft',
        'post_type' => 'product',
        'meta_input' => array(
            '_visibility' => 'visible',
            '_stock_status' => 'instock',
            'total_sales' => '0',
            '_downloadable' => 'no',
            '_virtual' => 'no',
            '_regular_price' => $price_suggestion,
            '_sale_price' => '',
            '_purchase_note' => '',
            '_featured' => 'no',
            '_weight' => '',
            '_length' => '',
            '_width' => '',
            '_height' => '',
            '_sku' => '',
            '_product_attributes' => array(),
            '_sale_price_dates_from' => '',
            '_sale_price_dates_to' => '',
            '_price' => $price_suggestion,
            '_sold_individually' => '',
            '_manage_stock' => 'no',
            '_backorders' => 'no',
            '_stock' => '',
            'product_condition' => $product_condition,
            'product_location' => $product_location,
            'contact_number' => $contact_number,
            'contact_email' => $contact_email,
            'product_category' => $product_category
        )
    ));
    
    if ($post_id && !is_wp_error($post_id)) {
        // Set product category
        $term = get_term_by('slug', $product_category, 'product_cat');
        if ($term) {
            wp_set_object_terms($post_id, $term->term_id, 'product_cat');
        }
        
        // Handle image uploads
        if (!empty($_FILES['product_images'])) {
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            require_once(ABSPATH . 'wp-admin/includes/file.php');
            require_once(ABSPATH . 'wp-admin/includes/media.php');
            
            $attachment_ids = array();
            $files = $_FILES['product_images'];
            
            foreach ($files['name'] as $key => $value) {
                if ($files['name'][$key]) {
                    $file = array(
                        'name' => $files['name'][$key],
                        'type' => $files['type'][$key],
                        'tmp_name' => $files['tmp_name'][$key],
                        'error' => $files['error'][$key],
                        'size' => $files['size'][$key]
                    );
                    
                    $_FILES = array('upload_file' => $file);
                    $attachment_id = media_handle_upload('upload_file', $post_id);
                    
                    if (!is_wp_error($attachment_id)) {
                        $attachment_ids[] = $attachment_id;
                    }
                }
            }
            
            // Set featured image
            if (!empty($attachment_ids)) {
                set_post_thumbnail($post_id, $attachment_ids[0]);
                
                // Add additional images to gallery
                if (count($attachment_ids) > 1) {
                    update_post_meta($post_id, '_product_image_gallery', implode(',', array_slice($attachment_ids, 1)));
                }
            }
        }
        
        // Send notification email to admin
        $admin_email = get_option('admin_email');
        $subject = 'New Product Submission - UniXHub';
        $message = "A new product has been submitted for review:\n\n";
        $message .= "Product: " . $product_name . "\n";
        $message .= "Price: ৳" . $price_suggestion . "\n";
        $message .= "Location: " . $product_location . "\n";
        $message .= "Seller Contact: " . $contact_number . "\n\n";
        $message .= "Review product: " . admin_url('post.php?post=' . $post_id . '&action=edit');
        
        wp_mail($admin_email, $subject, $message);
        
        // Send confirmation email to seller
        $seller_subject = 'Your Product Submission - UniXHub';
        $seller_message = "Dear Seller,\n\n";
        $seller_message .= "Thank you for submitting your product '" . $product_name . "' to UniXHub.\n";
        $seller_message .= "Our team will review your submission within 24-48 hours.\n";
        $seller_message .= "Once approved, your product will be live on our marketplace.\n\n";
        $seller_message .= "Best regards,\nUniXHub Team";
        
        wp_mail($contact_email, $seller_subject, $seller_message);
        
        // Return success response
        wp_send_json_success(array(
            'message' => 'Product submitted successfully!',
            'redirect' => home_url('/sell-your-product?success=1')
        ));
    } else {
        wp_send_json_error(array(
            'message' => 'Error submitting product. Please try again.'
        ));
    }
}
add_action('wp_ajax_sell_product_form', 'unixhub_handle_sell_product_form');
add_action('wp_ajax_nopriv_sell_product_form', 'unixhub_handle_sell_product_form');

function unixhub_enqueue_styles() {
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'unixhub_enqueue_styles');