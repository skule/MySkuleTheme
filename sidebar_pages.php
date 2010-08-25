<div id="sidebars">

<div id="sidebar_full">
<ul>

 <li>
<?php //include (TEMPLATEPATH . '/welcome.php'); ?>
<?php
//list all current sub=pages
$output = wp_list_pages('echo=0&depth=1&title_li=<h2>All Pages </h2>');
if (is_page( )) {
	$title = 'Navigation';
  $page = $post->ID;
  if ($post->post_parent) {
    $page = $post->post_parent;
		$title = $post->post_title;

  }
  $children=wp_list_pages( 'echo=0&child_of=' . $page . '&title_li=' );
  if ($children) {
    $output = wp_list_pages ('echo=0&child_of=' . $page . '&title_li=<h2>' . $title.'</h2>');
  }
}
echo $output;
?>


 </li>

<?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_full') ) : ?>

 <li>
 <div class="sidebarbox">
 </div>
 </li>

 <li>
 <div class="sidebarbox">
 </div>
 </li>

<?php// endif; ?>

</ul>
</div><!-- Closes Sidebar_full -->


<div id="sidebar_left">
<ul>
<?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_left') ) : ?>

<li>
<div class="sidebarbox">
<ul>
  <?php //wp_list_categories('show_count=0&title_li='); ?>
</ul>
</div>
</li>

<?php //endif; ?>
</ul>

</div> <!-- Closes Sidebar_left -->

<div id="sidebar_right">

<ul>
<?php// if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_right') ) : ?>

<li>
<div class="sidebarbox">

</div>
</li>

<?php// endif; ?>
</ul>

</div> <!-- Closes Sidebar_right -->


<div class="cleared"></div>
</div> <!-- Closes Sidebars -->