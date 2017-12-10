<?php 

/*
	Template Name: Case
*/

 ?>
  <?php get_header(); ?>

<br>
<br>
<div class="container">

<?php 
    $parms = array(
        'post_type' => 'case',
        'posts_per_page' => 6
    );
    $firstRow = new WP_Query($parms);
?>


<div class="row">
    <?php if($firstRow->have_posts()): ?>
        <?php while($firstRow->have_posts()): $firstRow->the_post();?>
            <a href="<?php echo esc_url(get_post_permalink()); ?>">
            <div class="col-xs-12 col-sm-4">
                 <h3 class="menu-title"><?php the_title(); ?></h3>
                 <div class="insta-post"><?php the_post_thumbnail('front-thumb', ['class' => 'img-responsive', 'title' => 'Feature image']); ?></div>

            </div>
            </a>
        <?php endwhile; ?>
    <?php endif; ?>

</div>









            

</div>

<br>
<br>



<?php get_footer(); ?>