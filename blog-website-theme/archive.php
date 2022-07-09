<?php
get_header(); ?>

<section class="page-section">
    <div class="container pageContainer">
        <h2 class="section-title"> <?php the_archive_title(); ?>
         </h2>
        <div class="blogPostImg"> <?php the_post_thumbnail(); ?></div>
        <div class="textblog">
          <?php 
          while(have_posts()) {
            the_post(); ?>
            <div class="">
                <h2><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="">
                <p class="">Posted By <?php the_author_posts_link(); ?> on <?php the_time('l, F j, Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
            </div>
            <div class="">
                <?php the_excerpt(); ?>
                <p><a class="button" href="<?php the_permalink(); ?>">Read More &raquo </a></p>
            </div>
            

          <?php }
          echo paginate_links();
          ?>
        </div>
    </div>

</section>


<?php get_footer(); 

?>