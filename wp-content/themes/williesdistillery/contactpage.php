<?php

/**
 * Contact Page Template
 *
   Template Name:  Contact Page
 *
 * @file           contactpage.php
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
                  <?php the_title();?> <span class="green"></span>
                  <div class="dividerdark"></div>
                </h1>
                <div id="contactleft">
            	<?php the_content(); ?>
                </div>
                <div id="contactright">
                	<?php get_sidebar();?>
                </div>
                <div class="clear"></div>
            	<?php edit_post_link( $link, $before, $after, $id ); ?> <br/>
        <?php endwhile; endif; ?>
        <img src="<?php echo get_site_url(); ?>/images/montanapremierdistillery.png" alt="Montanas Premier Distillery" class="premierimg2">
    </div>
    <div class="watermark"></div>
</div>



<?php get_footer(); ?>