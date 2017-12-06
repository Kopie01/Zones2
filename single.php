  <?php get_header(); ?>


    

</div>


  
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <div class="content">
             
                    

                 <div class="col menu-post">
                               




                            </div>


                 

                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post();?>
                    <div class="col menu-post">
                                <h3 class="menu-title"><?php the_title(); ?></h3>
                                <div class="insta-post"><?php the_post_thumbnail('large', ['class' => 'img-responsive', 'title' => 'Feature image']); ?></div>
                                
                                <div class="menu-post"><?php the_content(); ?></div>
                                <div class="menu-post"><?php the_post(); ?></div>
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