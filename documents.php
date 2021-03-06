<?php
/*
Template Name: Documents
*/
include "header_documents.php";
?>
<div id="main">
<div id="contentwrapper">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <div class="topContent"><?php the_content('(continue reading...)'); ?></div>
  <div class="cleared"></div>
  <span class="linkpages"><?php wp_link_pages(); ?></span>
<div class="cleared"></div>
</div> <!-- Closes topPost -->
<!--<br/><small><?php edit_post_link('Edit this entry?','',''); ?></small>-->

<?php endwhile; ?>

<?php else : ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>">Not Found</a></h2>
  <div class="topContent"><p>Sorry, but you are looking for something that isn't here. You can search again by using <a href="#searchform">this form</a>...</p></div>
</div> <!-- Closes topPost -->

<?php endif; ?>
<script type='text/javascript'>
$(document).ready( function() {
    $('#fileTree').fileTree({
		script: '../../jqueryFileTree.php',
        expandSpeed: -1,
        collapseSpeed: -1,
      }, function(file) {
		root_path = '<?php echo $_SERVER['DOCUMENT_ROOT'] . '/engsoc-documents/documents/'; ?>' 	 ;
		window.open('/engsoc-documents/documents/' + file.substr(root_path.length));
    });
});
</script>
<div id='fileTree'>
</div>


</div> <!-- Closes contentwrapper-->


<?php include (TEMPLATEPATH . '/sidebar_pages.php'); ?>
<div class="cleared"></div>

</div><!-- Closes Main -->


<?php get_footer(); ?>