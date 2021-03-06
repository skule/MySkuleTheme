<?php
/*
Template Name: Clubs
*/
get_header(); 		
?>

<div id="main">

<div id="contentwrapper">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <div class="topContent">
	<table id='clubtable'>
		<tr>
		<?php $clubs = new WP_Query('category_name=club&posts_per_page=1000'); 
		$i = 0;
		foreach ($clubs->posts as $club): ?>
			<?php 
			if($i % 5 == 0)
			{	
				echo "
				</tr>
				<tr> ";
			}
			?>
				<td>
					<div class='clubdiv'>
						<img src='/engsoc-documents/avatars/<?php echo get_post_meta($club->ID, 'web_name', true) ?>.jpg' class='clubthumb' width='50px' height='50px'/>
						<?php $shortname = get_post_meta($club->ID, 'name', true); ?>
						<a href='<?php echo get_post_meta($club->ID, 'website', true) ?>'><h3><?php echo $shortname; ?></h3></a>
					</div>
				</td>
			<?php
			
			$i++;
			?>
		<?php endforeach; ?>


		

	</tr>
	
	</table>
  
  </div>
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

</div> <!-- Closes contentwrapper-->


<?php include (TEMPLATEPATH . '/sidebar_pages.php'); ?>
<div class="cleared"></div>

</div><!-- Closes Main -->


<?php get_footer(); ?>