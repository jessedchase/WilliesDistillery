<div id="footer">
	<div class="container">
    	<div class="quarter" id="footerlogo">
        	<div class="padding">
            	<h2>Find Us</h2>
            	 <a href="<?php echo get_site_url(); ?>">
                    <img src="<?php echo get_site_url(); ?>/images/spirit.png" alt="Willies Distillery, Ennis Montana">
                </a>
                312 Main Street<br/>
                Ennis, MT 59729<br/>
                (406) 682-4117
            </div>
        </div>
        <div class="quarter" id="footernav">
        	<div class="padding">
            	<h2>Find Stuff</h2>
                <?php wp_nav_menu( array( 'menu' => 'MobileNav' )); ?>
            </div>
        </div>
        
        <div class="quarter" id="footersocial">
        	<div class="padding">
            	<h2>Stay Connected</h2>
                  <a href="https://www.facebook.com/williesdistillery/?ref=ts" target="_blank">
                    <img src="<?php echo get_site_url(); ?>/images/social/facebook.png" alt="Follow Willies Distillery on Facebook!">
                </a>
                <a href="https://www.instagram.com/williesdistillery/" target="_blank">
                    <img src="<?php echo get_site_url(); ?>/images/social/instagram.png" alt="Follow Willies Distillery on Instagram!">
                </a>
                <a href="https://twitter.com/mtmoonshine" target="_blanK">
                    <img src="<?php echo get_site_url(); ?>/images/social/twitter.png" alt="Follow Willies Distillery on Twitter!">
                </a>
                <a href="https://www.linkedin.com/company/15388091?trk=vsrp_companies_cluster_name&trkInfo=VSRPsearchId%3A893536151483048542379%2CVSRPtargetId%3A15388091%2CVSRPcmpt%3Acompanies_cluster" target="_blank">
                    <img src="<?php echo get_site_url(); ?>/images/social/linkedin.png" alt="Follow Willies Distillery on Linkedin!">
                </a>
                <h2>Newsletter Sign Up</h2>
                <input type="text" /><input type="submit" value="SIGN UP">
            </div>
        </div>
        <?php dynamic_sidebar('footerhours-widget-area')?>
        <div class="clear"></div>
        <div style="text-align:center;font-size:10px;">
		Website design by <a href="https://www.bozemaninteractive.com" title="Bozeman Website Design" target="_blank" style="color:#fff">Bozeman Interactive</a>
		</div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>