<?php
  get_header();

while(have_Posts()) {
    the_post(); ?>
    <section class="page-section">
    <div class="container pageContainer">
        <div class="blogTypeWrapper">
            <p class="blogPostType"><?php the_title(); ?></p>
            <div class="blogPostCompletion">
                <p class="blogCompleted">Posted By <?php the_author_posts_link(); ?></p>
                <p class="blogDate">On <?php the_time('l, F j, Y'); ?>  in <?php echo get_the_category_list(', '); ?></p>
            </div>
        </div>
        <div class="blogPostImg"> <?php the_post_thumbnail(); ?> </div>
        <div class="textblog">
          <?php the_content(); ?>
        </div>
    </div>

</section>
<?php }

get_footer();
?>