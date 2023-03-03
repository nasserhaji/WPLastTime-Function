/**
 * Display the date and time of the last update of a post in the footer section of the homepage.v1
 */
function display_last_update_date() {
    $args = array(
        'numberposts' => 1,
        'post_status' => 'publish',
    );
    $recent_post = wp_get_recent_posts( $args );
    $last_update = $recent_post[0]['post_modified'];
    $date_format = 'F j, Y, g:i a'; // Customize the date format here
    $formatted_date = date_i18n( $date_format, strtotime( $last_update ) );
    echo '<div style="text-align:center;">Last update: ' . $formatted_date . '</div>';
}
add_action( 'wp_footer', 'display_last_update_date' );
/**
 * Display the date and time of the last update of a post in the footer section of the homepage. v2
 */
function display_last_modified_date_script() {
    $last_modified_time = get_lastpostmodified('U');
    wp_enqueue_script( 'last-modified-date-script', get_template_directory_uri() . '/js/last-modified-date.js', array(), $last_modified_time, true );
    wp_localize_script( 'last-modified-date-script', 'last_modified_date_params', array(
        'last_modified_date' => date_i18n( get_option( 'date_format' ), $last_modified_time ),
        'label' => __(' بروزرسانی مقالات:', 'text-domain')
    ) );
}
add_action( 'wp_enqueue_scripts', 'display_last_modified_date_script' );
