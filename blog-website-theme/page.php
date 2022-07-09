<?php
  get_header();


while(have_Posts()) {
  the_post(); ?>

<section class="page-section">
    <div class="container pageContainer">
        <h2 class="section-title"> <?php the_title(); ?> </h2>
        <div class="blogPostImg"><?php the_post_thumbnail(); ?></div>
        <div class="textblog">
          <?php the_content(); ?>
        </div>
    </div>

</section>

<?php }

get_footer();

?>