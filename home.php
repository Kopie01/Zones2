<?php 

/*
	Template Name: Home Page
*/

 ?>

<div class="logo-menu">
    <?php get_header(); ?>
</div>



	

	<div class="row">
		<div class="col-xs-12 col-sm-8">
			<div class="content">
                <?php 
                    $parms = array(
                        'type' => 'post',
                        'category_name' => 'Home-Image',
                        'posts_per_page' => 4
                    );
                    $nextPosts = new WP_Query($parms);
                 ?>
                <?php if($nextPosts->have_posts()): ?>
                    <?php while($nextPosts->have_posts()): $nextPosts->the_post();?>
                    <div class="col menu-post">
                        <div class="menu-post"><?php the_content(); ?></div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
             </div>
		</div>

		<div class="col-xs-12 col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div>

	<br>
	<br>





<?php get_footer(); ?>