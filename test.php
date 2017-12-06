<?php 
    /*
        Template Name: Connie page
    */
?>

<?php get_header(); ?>
    
    <div class="container">
            
            <div class="content">
                <?php 
                    $parms = array(
                        'type' => 'post',
                        'category_name' => 'Home-Image',
                        'posts_per_page' => 3
                    );
                    $nextPosts = new WP_Query($parms);
                 ?>
                <?php if($nextPosts->have_posts()): ?>
                    <?php while($nextPosts->have_posts()): $nextPosts->the_post();?>
                    <div class="col menu-post">
                        <div class="image-post"><?php the_post_thumbnail('full', ['class' => 'img-responsive', 'title' => 'Feature image']); ?></div>
                        <h3 class="menu-title"><?php the_title(); ?></h3>
                        <div class="menu-post"><?php the_content(); ?></div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
             </div>

             <div class="content">
                <?php 
                    $parms = array(
                        'type' => 'post',
                        'category_name' => 'TestPost1',
                        'posts_per_page' => 3
                    );
                    $nextPosts = new WP_Query($parms);
                 ?>
                <?php if($nextPosts->have_posts()): ?>
                    <?php while($nextPosts->have_posts()): $nextPosts->the_post();?>
                    <div class="col menu-post">
                        <div class="image-post"><?php the_post_thumbnail('full', ['class' => 'img-responsive', 'title' => 'Feature image']); ?></div>
                        <h3 class="menu-title"><?php the_title(); ?></h3>
                        <div class="menu-post"><?php the_content(); ?></div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
             </div>

    </div>




<?php get_footer(); ?>