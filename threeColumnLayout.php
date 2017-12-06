<?php 

/*
	Template Name: 3 Column Layout
*/

 ?>

 <?php get_header(); ?>




			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="content">
		                <?php 
		                    $parms = array(
		                        'type' => 'post',
		                        'category_name' => 'InstaPage',
		                        'posts_per_page' => 3
		                    );
		                    $nextPosts = new WP_Query($parms);
		                 ?>
		                <?php if($nextPosts->have_posts()): ?>
		                    <?php while($nextPosts->have_posts()): $nextPosts->the_post();?>
		                    	<a href="<?= get_post_permalink() ?>">
		                    <div class="col menu-post">
		                        <div class="insta-post"><?php the_post_thumbnail('full', ['class' => 'img-responsive', 'title' => 'Feature image']); ?></div>
		                    </div>
		                    </a>
		                    <?php endwhile; ?>
		                <?php endif; ?>
		             </div>
				</div>
				
				<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="content">
		                <?php 
		                    $parms = array(
		                        'type' => 'post',
		                        'category_name' => 'Insta2ndRow',
		                        'posts_per_page' => 3
		                    );
		                    $nextPosts = new WP_Query($parms);
		                 ?>
		                <?php if($nextPosts->have_posts()): ?>
		                    <?php while($nextPosts->have_posts()): $nextPosts->the_post();?>
		                    <div class="col menu-post">
		                        <div class="insta-post"><?php the_post_thumbnail('full', ['class' => 'img-responsive', 'title' => 'Feature image']); ?></div>
		                    </div>
		                    <?php endwhile; ?>
		                <?php endif; ?>
		             </div>
				</div>

				<div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="content">
                        <?php 
                            $parms = array(
                                'type' => 'post',
                                'category_name' => 'Insta3rdRow',
                                'posts_per_page' => 3
                            );
                            $nextPosts = new WP_Query($parms);
                         ?>
                        <?php if($nextPosts->have_posts()): ?>
                            <?php while($nextPosts->have_posts()): $nextPosts->the_post();?>
                            <div class="col menu-post">
                                <div class="insta-post"><?php the_post_thumbnail('full', ['class' => 'img-responsive', 'title' => 'Feature image']); ?></div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                     </div>
                </div>
                



                </div>







            </div>

            

</div>

<br>
<br>



<?php get_footer(); ?>