<?php

/**
 * Team Page Template
 *
   Template Name:  Team Page
 *
 * @file           staff.php
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
		echo '<div style="margin-bottom:120px;"></div>';	
	}
?>
<div id="spirits" class="lightbg innerpage staff">
	<div class="container padding">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	
                <h1>
                  <div class="dividerdark"></div>
                  <?php the_title();?> <span class="green"></span>
                  <div class="dividerdark"></div>
                </h1>
            	<?php the_content(); ?>
            	
            	<h2>Administration</h2>
            	<?php get_staff_by_role("Administration");?>
            	
            	<h2>Production</h2>
            	<?php get_staff_by_role("Production");?>
            	
            	<h2>Sales</h2>
            	<?php get_staff_by_role("Sales");?>
            	
				<h2>Tasting Room</h2>
            	<?php get_staff_by_role("Tasting Room");?>
            	<?php edit_post_link( $link, $before, $after, $id ); ?> <br/>
        <?php endwhile; endif; ?>
        <img src="<?php echo get_site_url(); ?>/images/montanapremierdistillery.png" alt="Montanas Premier Distillery" class="premierimg2">
    </div>
    <div class="watermark"></div>
</div>



<?php get_footer(); ?>