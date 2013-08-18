<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */
?>
<?php get_header(); ?>

<div id="content" class="row clearfix">

    <div id="main" class="span8" role="main">
    
        <?php while (have_posts()) : the_post(); ?>
       <article>
  <header class="page-header">
    <h1><?php the_title(); ?> </h1>
  </header>
<?php the_content(); ?>
  
</article>
		
		<?php endwhile; /* End loop */ ?>

    </div><!-- /#main -->

	<div id="sidebar" class="span4" >
		<?php dynamic_sidebar('page'); ?>
	</div>

</div><!-- /#content -->

<?php get_footer(); ?>