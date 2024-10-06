<?php
/**
 * Expand some functions related to widgets
 *
 * @package Mystery Themes
 * @subpackage Scholarship
 * @since 1.0.0
 *
 */
/*-------------------------------------------------------------------------------------------------------------------*/
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function scholarship_widgets_init() {
    
    /**
     * Register Right Sidebar
     *
     * @since 1.0.0
     */
    register_sidebar( array(
        'name'          => esc_html__( 'Right Sidebar', 'scholarship' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'scholarship' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    /**
     * Register Left Sidebar
     *
     * @since 1.0.0
     */
    register_sidebar( array(
        'name'          => esc_html__( 'Left Sidebar', 'scholarship' ),
        'id'            => 'scholarship_sidebar_left',
        'description'   => esc_html__( 'Add widgets here.', 'scholarship' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    /**
     * Register Homepage Fullwidth area
     *
     * @since 1.0.0
     */
    register_sidebar( array(
        'name'          => esc_html__( 'Homepage Section Area', 'scholarship' ),
        'id'            => 'scholarship_home_section_area',
        'description'   => esc_html__( 'Add widgets here.', 'scholarship' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    /**
     * Register 4 different Footer Area 
     *
     * @since 1.0.0
     */
    register_sidebars( 4 , array(
        'name'          => esc_html__( 'Footer Area %d', 'scholarship' ),
        'id'            => 'scholarship_footer_sidebar',
        'description'   => esc_html__( 'Added widgets are display at Footer Widget Area.', 'scholarship' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'scholarship_widgets_init' );

/*-------------------------------------------------------------------------------------------------------------------*/

add_action( 'widgets_init', 'scholarship_register_widgets' );

function scholarship_register_widgets() {

    //register Call To Action Widget
    register_widget( 'Scholarship_Call_To_Action' );

    //register Grid Layout Widget
    register_widget( 'Scholarship_Grid_Layout' );

    //register Latest Blog Widget
    register_widget( 'Scholarship_Latest_Blog' );

    //register Portfolio Widget
    register_widget( 'Scholarship_Portfolio' );

    // register Sponsors Widget
    register_widget( 'Scholarship_Sponsors' );

    //register Team Widget
    register_widget( 'Scholarship_Team' );

    //register Testimonials Widget
    register_widget( 'Scholarship_Testimonials' );
}


/*-------------------------------------------------------------------------------------------------------------------*/

/**
 * Load important files for widget and it's related
 */
require get_template_directory() . '/inc/widgets/scholarship-widget-fields.php';
require get_template_directory() . '/inc/widgets/scholarship-grid-layout.php';
require get_template_directory() . '/inc/widgets/scholarship-call-to-action.php';
require get_template_directory() . '/inc/widgets/scholarship-portfolio-widget.php';
require get_template_directory() . '/inc/widgets/scholarship-team-widget.php';
require get_template_directory() . '/inc/widgets/scholarship-testimonials-widget.php';
require get_template_directory() . '/inc/widgets/scholarship-latest-blog-widget.php';
require get_template_directory() . '/inc/widgets/scholarship-sponsors-widget.php';