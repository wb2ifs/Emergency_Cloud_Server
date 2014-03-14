<?php
/*
Template Name: HSMM Mesh Topology
*/
get_header();
?>
<div id="primary">
	<div id="content" role="main" class="widecolumn">

<?php
// Get the Time
$time = exec("date +'%d %b %Y - %T %Z'");
// Draw the picture
exec("rm wp-content/themes/twentyeleven-child/topology.dot");
exec("/var/www/olsr-topology-view.pl --once --noshow --nokeep");
sleep(2);
wp_reset_postdata();
?>

<div class="entry-content">
<p align="center">
<a href="wp-content/themes/twentyeleven-child/topology.png"><img src="wp-content/themes/twentyeleven-child/topology.png"></a>
<br>
As of <?php echo $time; ?>.
</p>
</div><!-- .entry-content -->
</div><!-- /#content -->
</div><!-- /#primary -->
<!-- End of Graph -->
	
<?php get_footer(); ?>
