<?php 

/*
	Template Name: About
*/

 ?>
  <?php get_header(); ?>


      <div class="aboutimage"></div>



<br>



<div class="container">

<h2>Landscaping Specialists</h2>

        <div id="intro">
                Zones are specialists at designing, building and landscaping outdoor living spaces. Most landscapers and tradespeople focus on one or two specialist areas, such as concreting, paving or planting. At Zones we provide a total solution across all trades to deliver a hassle free project on time and to your budget.


        </div>
        <br>
        <br>
<?php 
    $parms = array(
        'post_type' => 'about',
        'posts_per_page' => 4
    );
    $firstRow = new WP_Query($parms);
?>

<div class="row">
    <?php if($firstRow->have_posts()): ?>
        <?php while($firstRow->have_posts()): $firstRow->the_post();?>
            
            <div class="col-xs-12 col-sm-6">
                
                 <h3 class="menu-title"><?php the_title(); ?></h3>
                 <div class="insta-post"><?php the_post_thumbnail('about-image', ['class' => 'img-responsive', 'title' => 'Feature image']); ?></div>
                 <div class="menu-post"><?php the_content(); ?></div>
                 <div class="menu-post"><?php the_post(); ?></div>

            </div>
            
        <?php endwhile; ?>
    <?php endif; ?>

</div>









            

</div>

<br>
<br>



<?php get_footer(); ?>