<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}

add_filter( 'soliloquy_defaults', 'tgm_soliloquy_default_settings', 20, 2 );
function tgm_soliloquy_default_settings( $defaults, $post_id ) {
     
    $defaults['slider_width']  = 'auto'; // Slider width.
    $defaults['slider_height'] = '100%'; // Slider height.
     
    return $defaults;
     
}


add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );


function get_last_two_posts(){
	$args = array( 'numberposts' => '2' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<a href="' . get_permalink($recent["ID"]) . '">';
		echo '<div class="half postblock" >';	
		echo '<div class="postpadding" style="background-image:url('.get_the_post_thumbnail_url($recent["ID"]).');">';
			echo '<div class="postinfo">';
			echo $recent["post_title"];
			echo '<div class="postdate">'.date('n/j/Y', strtotime($recent["post_date"])).'</div>';
			echo '</div>';
		echo '</a>';
		echo '</div>';
		echo '</div>';
	}
	wp_reset_query();	
}


function get_featured_spirits(){
	$i = 0;
	$loop = new WP_Query( array( 'post_type' => 'ourspirits','posts_per_page' => 10,'order'=>'ASC'  ) );
	while ( $loop->have_posts() ) : $loop->the_post(); 	
		$islimitededition = get_post_meta(get_the_id(), 'limiteded');
	
		if($islimitededition[0] != 'Yes'){
			echo '<div class="fifth homespirits">';
			echo '<a href="/spirits#spirit_'.get_the_id().'" style="background-image:url('.get_the_post_thumbnail_url().')">';
			echo '<div class="padding">';
				echo '<h3>'.get_the_title().'</h3>';
			echo '</div>';
			echo '</a>';
			echo'</div>';
		}
		$i++;

	endwhile; 	
}

function get_staff_by_role($roletype){
	
	$loop = new WP_Query( array( 'post_type' => 'staff','posts_per_page' => 100,'order'=>'ASC' ,'orderby'=>'menu_order' ) );
	while ( $loop->have_posts() ) : $loop->the_post(); 	
		$role = get_post_meta(get_the_id(), 'Role');	
		if($role[0] == $roletype && (get_post_status( $ID )== 'publish')){
				echo '<div class="teammember">';
				echo '<div class="teammemberpicture"><img src="'.get_the_post_thumbnail_url().'"  width="150px"></div>';
				echo '<div class="teammemberinfo"><h3>'.get_the_title().'</h3>';
				echo the_content();
				echo'</div>';
				echo '<div class="clear"></div></div>';
		}
	endwhile; 	
}

function get_all_spirits(){
	$loop = new WP_Query( array( 'post_type' => 'ourspirits','posts_per_page' => 100,'order'=>'ASC','orderby' => 'menu_order',  ) );
	while ( $loop->have_posts() ) : $loop->the_post(); 	
		$islimitededition = get_post_meta(get_the_id(), 'limiteded');
	
	if($islimitededition[0] != 'Yes'){
		echo '<div class="spirit" id="spirit_'.get_the_id().'">';
		echo '<div class="spirit_image" style="background-image:url('.get_the_post_thumbnail_url().')"></div>';
		echo '<div class="spirit_info">';
			echo '<h3>'.get_the_title().'</h3>';
			echo the_content();
		echo '</div>';
		echo '<div class="clear"></div>';
		echo'</div>';
	}
	endwhile; 	
}
function get_all_limited_spirits(){
	$loop = new WP_Query( array( 'post_type' => 'ourspirits','posts_per_page' => 100,'order'=>'ASC','orderby' => 'menu_order',  ) );
	while ( $loop->have_posts() ) : $loop->the_post(); 	
		$islimitededition = get_post_meta(get_the_id(), 'limiteded');
	
	if($islimitededition[0] == 'Yes'){
		echo '<div class="spirit">';
		echo '<div class="spirit_image" style="background-image:url('.get_the_post_thumbnail_url().')"></div>';
		echo '<div class="spirit_info">';
			echo '<h3>'.get_the_title().'</h3>';
			echo the_content();
		echo '</div>';
		echo '<div class="clear"></div>';
		echo'</div>';
	}
	endwhile; 	
}
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
'after_widget' => "</div>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
	
	
register_sidebar( array (
	'name' => __( 'Footer Hours', 'blankslate' ),
	'id' => 'footerhours-widget-area',
	'before_widget' => '<div class="quarter" id="footerhours"><div class="padding">',
	'after_widget' => "</div></div>",
	'before_title' => '<h2 >',
	'after_title' => '</h2>',
) );
	
	
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}