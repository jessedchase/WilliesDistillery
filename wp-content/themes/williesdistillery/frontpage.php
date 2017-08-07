<?php

/**
 * Front Page Template
 *
   Template Name:  Front Page
 *
 * @file           frontpage.php
 * @package        Willies Distillery
 * @author         Bozeman Interactive 
 * @copyright      2016 Bozeman Interactive
 */

get_header(); ?>
<div id="slider">
	<?php
		if ( function_exists( 'soliloquy' ) ) { soliloquy( '28' ); }
	?>
</div>
<div id="content" class="darkbg mapbg">
	<div class="container padding">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h1>
          <div class="divider"></div>
          Willie's <span class="green">Distillery</span>
          <div class="divider"></div>
          </h1>
          <?php the_content(); ?>
          <div class="clear"></div>
          <a href="/about/" class="readmore">
          	<span>LEARN MORE</span>
          </a>
          <?php edit_post_link( $link, $before, $after, $id ); ?> <br/>
        <?php endwhile; endif; ?>
    </div>
</div>
<div id="spirits" class="lightbg">
	<div class="container padding">
    	<h2>
          <div class="dividerdark"></div>
          Our <span class="green">Spirits</span>
          <div class="dividerdark"></div>
          <?php get_featured_spirits();?>
          <div class="clear"></div>
          <a href="/spirits" class="readmore">
          	<span>ALL SPIRITS</span>
          </a>
        </h2>
    </div>
    <div class="watermark"></div>
</div>
<div id="news" class="clearbg">
	<div class="container padding">
    	<h2>
          <div class="dividerdark"></div>
          Distillery <span class="green">News</span>
          <div class="dividerdark"></div>
        </h2>
          <?php get_last_two_posts();?>
          <div class="clear"></div>
          <a href="/news" class="readmore">
          	<span>ALL NEWS</span>
          </a>

    </div>
</div>

<?php get_footer(); ?>