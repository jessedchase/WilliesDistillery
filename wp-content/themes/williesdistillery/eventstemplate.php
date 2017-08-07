<?php

/**
 * Events Page Template
 *
   Template Name:  Events Page
 *
 * @file           eventstemplate.php
 * @package        Willies Distillery
 * @author         Bozeman Interactive 
 * @copyright      2016 Bozeman Interactive
 */

get_header(); ?>
<?php
	if ( has_post_thumbnail() ) { 
	echo '<div id="featured">';
	  the_post_thumbnail();
	  echo '</div>';
	} else{
		echo '<div id="spacer"></div>';	
	}
?>
<div id="spirits" class="lightbg innerpage">
	<div class="container padding">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	
                <h1>
                  <div class="dividerdark"></div>
                  Events <span class="green"></span>
                  <div class="dividerdark"></div>
                </h1>
            	<?php the_content(); ?>
            	<?php edit_post_link( $link, $before, $after, $id ); ?> <br/>
        <?php endwhile; endif; ?>
    </div>
</div>



<?php get_footer(); ?>