<?php get_header(); ?>
<div id="spacer"></div>	

<div id="spirits" class="lightbg innerpage">
	<div class="container padding">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php comments_template(); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
        <div class="clear"></div>
        <img src="<?php echo get_site_url(); ?>/images/montanapremierdistillery.png" alt="Montanas Premier Distillery" class="premierimg2">
    </div>
    <div class="watermark"></div>
</div>
<?php get_footer(); ?>