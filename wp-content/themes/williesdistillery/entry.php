<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
	<?php 
        if ( is_singular() ) { 
			echo '<h1><div class="dividerdark"></div>';
        } else { 
            echo '<a href="' . get_permalink() . '">';
			echo '<div class="half postblock" >';	
			echo '<div class="postpadding" style="background-image:url('.get_the_post_thumbnail_url().');">';
			echo '<div class="postinfo">';
			echo'<div>';
        } 
    ?>
		<?php the_title(); ?>
	<?php 
		if ( is_singular() ) { 
			echo '<div class="dividerdark"></div></h1>'; 
		} else { 
			echo '</div>';
			echo '<div class="postdate">'.the_time( get_option( 'date_format' ) ).'</div>';
			echo '</div>';
			echo '</a>';
			echo '</div>';
			echo '</div>';
		} 
	?> 
</header>	
<?php 
	if ( is_singular() ) { 
		echo '<div class="entry-content">';
		the_content();
		edit_post_link();
		echo '</div>';
	} 
?> 
</article>