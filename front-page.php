<?php
/**
 * Template Name: Home page
 *
 */
?>
<?php get_header(); ?>

<div id="content" class="row clearfix">

    <div id="main" class="span8" role="main">
    
        <?php while (have_posts()) : the_post(); ?>
       <article>

<?php the_content(); ?>
  
</article>
		
		<?php endwhile; /* End loop */ ?>

    </div><!-- /#main -->

	<div id="sidebar" class="span4" >
		<?php dynamic_sidebar('page'); ?>
	</div>

</div><!-- /#content -->

<?php get_footer(); ?>