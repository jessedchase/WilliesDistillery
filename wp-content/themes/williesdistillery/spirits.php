<?php

/**
 * Spirits Page Template
 *
   Template Name:  Spirits Page
 *
 * @file           spirits.php
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
    
    
    <?php the_content(); ?>
    <?php get_all_spirits();?>
    
    <h1>
      <div class="dividerdark"></div>
      Limited Edition Spirits<span class="green"></span>
      <div class="dividerdark"></div>
    </h1>
    
    <?php get_all_limited_spirits();?>
    
    They say the smaller the town, the more time slows down. We’re ok with that because you just can’t rush perfection. That’s why we can’t predict when our aged whiskeys will be ready. We’ll let you know.
    
    <?php edit_post_link( $link, $before, $after, $id ); ?> <br/>
        <?php endwhile; endif; ?>
        <img src="<?php echo get_site_url(); ?>/images/madeinmt.png" alt="Made in Ennis, MT" class="premierimg2">
    </div>
    <div class="watermark"></div>
</div>
<?php get_footer(); ?>