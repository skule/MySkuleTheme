<div id="morefoot">

<div class="col1">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_left') ) : ?>
<h3>Looking for something?</h3>
<p>Use the form below to search the site:</p>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<p>Still not finding what you're looking for? Drop a comment on a post or contact us so we can take care of it!</p>
<?php endif; ?>
</div>

<div class="col2">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_middle') ) : ?>
<h3>Site Map</h3><p></p><ul><?php wp_list_bookmarks('title_li=&categorize=0'); ?></ul>
<?php endif; ?>
</div>

<div class="col3">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_right') ) : ?>
<h3>Archives</h3><p>All entries, chronologically...</p><ul><?php wp_get_archives('type=monthly&limit=12'); ?> </ul>
<?php endif; ?>
</div>

<div class="cleared"></div>
</div><!-- Closes morefoot -->



<div id="footer">
<div id="footerleft">
<p>Skule.ca is proudly powered by <a href="http://www.wordpress.org/">WordPress 3.0</a>. SkuleTheme based on <a href="http://85ideas.com/public-releases/wordpress-theme-pixel/" title="Pixel">Pixel</a>. Sweet icons by <a href="http://famfamfam.com/">famfamfam</a>. <a href='mailto:webmaster@skule.ca'>webmaster@skule.ca</a></p>
</div>

<div id="footerright">
<a href="http://wordpress.org" title="WordPress platform" ><img src="<?php bloginfo('template_directory'); ?>/images/wpfooter-trans.png" alt="WordPress" width="34" height="34" /></a>
</div>

<div class="cleared"></div>
<?php wp_footer(); ?>
</div><!-- Closes footer -->

</div><!-- Closes wrapper -->
</div> <!-- End Main Wrapper -->
<script type="text/javascript">
var uservoiceOptions = {
  /* required */
  key: 'skule',
  host: 'skule.uservoice.com', 
  forum: '15987',
  showTab: true,  
  /* optional */
  alignment: 'left',
  background_color:'#285ebf', 
  text_color: 'white',
  hover_color: '#06C',
  lang: 'en'
};

function _loadUserVoice() {
  var s = document.createElement('script');
  s.setAttribute('type', 'text/javascript');
  s.setAttribute('src', ("https:" == document.location.protocol ? "https://" : "http://") + "cdn.uservoice.com/javascripts/widgets/tab.js");
  document.getElementsByTagName('head')[0].appendChild(s);
}
_loadSuper = window.onload;
window.onload = (typeof window.onload != 'function') ? _loadUserVoice : function() { _loadSuper(); _loadUserVoice(); };
</script>
</body>
</html>