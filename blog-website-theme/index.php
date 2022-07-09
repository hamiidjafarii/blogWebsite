<?php
get_header(); ?>

<section class="page-section">
    <div class="container pageContainer">
        <h2 class="section-title"> Your Blag Name! </h2>
        <div class="textblog">
          <?php
          while(have_posts()) {
            the_post(); ?>
            <div class="">
                <div class="blogPostImg"><?php the_post_thumbnail(); ?></div>
                <div class="blog-info">
                <h2><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="blog-details">
                <p class=""> Posted By <?php the_author_posts_link(); ?></p>
                <p>On <?php the_time('l, F j, Y'); ?> In <?php echo get_the_category_list(', '); ?></p>
                </div>
                <div class="blog-excerpt">
                <?php the_excerpt(); ?>
                <a class="blog-cta" href="<?php the_permalink(); ?>">Read More &raquo </a>
            </div>            

            </div>



          <?php }
          echo paginate_links();
          ?>
        </div>
    </div>

</section>


<?php get_footer(); 

?>
