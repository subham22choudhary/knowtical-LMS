<?php
register_nav_menus(
    array(
        'primary-menu' => 'Primary Menu'
    )
);




// Courses
// Register Custom Post Type for Courses

function create_courses_post_type() {
    $labels = array(
        'name'                  => _x('Courses', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Course', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Courses', 'text_domain'),
        'name_admin_bar'        => __('Course', 'text_domain'),
        'archives'              => __('Course Archives', 'text_domain'),
        'attributes'            => __('Course Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Course:', 'text_domain'),
        'all_items'             => __('All Courses', 'text_domain'),
        'add_new_item'          => __('Add New Course', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Course', 'text_domain'),
        'edit_item'             => __('Edit Course', 'text_domain'),
        'update_item'           => __('Update Course', 'text_domain'),
        'view_item'             => __('View Course', 'text_domain'),
        'view_items'            => __('View Courses', 'text_domain'),
        'search_items'          => __('Search Course', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
        'featured_image'        => __('Featured Image', 'text_domain'),
        'set_featured_image'    => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image'    => __('Use as featured image', 'text_domain'),
        'insert_into_item'      => __('Insert into course', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this course', 'text_domain'),
        'items_list'            => __('Courses list', 'text_domain'),
        'items_list_navigation' => __('Courses list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter courses list', 'text_domain'),
    );

    $args = array(
        'label'                 => __('Course', 'text_domain'),
        'description'           => __('Course Description', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type('course', $args);
}
add_action('init', 'create_courses_post_type', 0);

// Add Meta Boxes for Course Type
function add_course_meta_boxes() {
    add_meta_box(
        'course_type_meta_box', // ID
        'Course Type', // Title
        'display_course_type_meta_box', // Callback
        'course', // Screen
        'side', // Context
        'high' // Priority
    );
}
add_action('add_meta_boxes', 'add_course_meta_boxes');

function display_course_type_meta_box($post) {
    $course_type = get_post_meta($post->ID, 'course_type', true);
    ?>
    <label for="course_type">Course Type:</label>
    <select name="course_type" id="course_type_select">
        <option value="main" <?php selected($course_type, 'main'); ?>>Main Course</option>
        <option value="sub" <?php selected($course_type, 'sub'); ?>>Sub Course</option>
    </select>
    <?php
}


function save_course_meta_box($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['course_type'])) return;
    update_post_meta($post_id, 'course_type', sanitize_text_field($_POST['course_type']));
}
add_action('save_post', 'save_course_meta_box');


// Blogs
function create_blog_post_type() {
    $labels = array(
        'name'                  => _x('Blog', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Blog Post', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Blog', 'text_domain'),
        'name_admin_bar'        => __('Blog Post', 'text_domain'),
        'archives'              => __('Blog Archives', 'text_domain'),
        'attributes'            => __('Blog Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Blog Post:', 'text_domain'),
        'all_items'             => __('All Blog Posts', 'text_domain'),
        'add_new_item'          => __('Add New Blog Post', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Blog Post', 'text_domain'),
        'edit_item'             => __('Edit Blog Post', 'text_domain'),
        'update_item'           => __('Update Blog Post', 'text_domain'),
        'view_item'             => __('View Blog Post', 'text_domain'),
        'view_items'            => __('View Blog Posts', 'text_domain'),
        'search_items'          => __('Search Blog Posts', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
        'featured_image'        => __('Featured Image', 'text_domain'),
        'set_featured_image'    => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image'    => __('Use as featured image', 'text_domain'),
        'insert_into_item'      => __('Insert into blog post', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this blog post', 'text_domain'),
        'items_list'            => __('Blog Posts list', 'text_domain'),
        'items_list_navigation' => __('Blog Posts list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter blog posts list', 'text_domain'),
    );

    $args = array(
        'label'                 => __('Blog Post', 'text_domain'),
        'description'           => __('Blog Post Description', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type('blog', $args);
}

add_action('init', 'create_blog_post_type', 0);


// Events
function create_event_post_type() {
    $labels = array(
        'name'                  => _x('Events', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Event', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Events', 'text_domain'),
        'name_admin_bar'        => __('Event', 'text_domain'),
        'archives'              => __('Event Archives', 'text_domain'),
        'attributes'            => __('Event Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Event:', 'text_domain'),
        'all_items'             => __('All Events', 'text_domain'),
        'add_new_item'          => __('Add New Event', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Event', 'text_domain'),
        'edit_item'             => __('Edit Event', 'text_domain'),
        'update_item'           => __('Update Event', 'text_domain'),
        'view_item'             => __('View Event', 'text_domain'),
        'view_items'            => __('View Events', 'text_domain'),
        'search_items'          => __('Search Event', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
        'featured_image'        => __('Featured Image', 'text_domain'),
        'set_featured_image'    => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image'    => __('Use as featured image', 'text_domain'),
        'insert_into_item'      => __('Insert into event', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this event', 'text_domain'),
        'items_list'            => __('Events list', 'text_domain'),
        'items_list_navigation' => __('Events list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter events list', 'text_domain'),
    );

    $args = array(
        'label'                 => __('Event', 'text_domain'),
        'description'           => __('Event Description', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type('event', $args);
}

add_action('init', 'create_event_post_type', 0);




// Contact Us Page

function handle_form_submission() {
    // Check the nonce for security
    if (!isset($_POST['contact_form_nonce']) || !wp_verify_nonce($_POST['contact_form_nonce'], 'submit_contact_form')) {
        wp_die('Nonce verification failed.');
    }

    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_form_submissions';

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $role = sanitize_text_field($_POST['Role']);
    $school = sanitize_text_field($_POST['school']);
    $message = sanitize_textarea_field($_POST['message']);

    $wpdb->insert($table_name, [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'role' => $role,
        'school' => $school,
        'message' => $message,
        'submitted_at' => current_time('mysql')
    ]);

    wp_redirect(home_url('/thank-you'));
    exit;
}
add_action('admin_post_nopriv_submit_contact_form', 'handle_form_submission');
add_action('admin_post_submit_contact_form', 'handle_form_submission');

?>
