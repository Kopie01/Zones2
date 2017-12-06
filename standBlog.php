<?php 

/*
    Template Name: 3 Column Layout
*/

 ?>

 <?php get_header(); ?>




            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="content">
                        <?php 
                            $parms = array(
                                'type' => 'post',
                                'category_name' => 'BlogPost1',
                                'posts_per_page' => 3
                            );
                            $nextPosts = new WP_Query($parms);
                         ?>
                        <?php if($nextPosts->have_posts()): ?>
                            <?php while($nextPosts->have_posts()): $nextPosts->the_post();?>
                            <div class="col menu-post">
                                <h3 class="menu-title"><?php the_title(); ?></h3>
                                <div class="menu-post"><?php the_content(); ?></div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                     </div>
                </div>
                
                <div class="col-xs-12 col-sm-6">
                    <div class="content">
                        <?php 
                            $parms = array(
                                'type' => 'post',
                                'category_name' => 'BlogPost2',
                                'posts_per_page' => 3
                            );
                            $nextPosts = new WP_Query($parms);
                         ?>
                        <?php if($nextPosts->have_posts()): ?>
                            <?php while($nextPosts->have_posts()): $nextPosts->the_post();?>
                            <div class="col menu-post">
                                <h3 class="menu-title"><?php the_title(); ?></h3>
                                <div class="menu-post"><?php the_content(); ?></div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                     </div>
                </div>
                
         









            </div>



<br>
<br>



<?php get_footer(); ?>