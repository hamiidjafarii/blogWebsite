
<?php get_header(); ?>
<!--hero-->
<section class="hero-section">
    <div class="container">
        <div class="hero-left">
            <div class="line"></div>
            <h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </h1>
        </div>
        <div class="hero-right">
            <div class="hero-image"> <?php the_post_thumbnail(); ?> </div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/about-me') ?>">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/blog') ?>">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--about-->
<section class="about-section">
    <div class="container">
        <h2 class="section-title">
            About Me
        </h2>
        <div class="about-container">
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio cumque quas quasi sequi obcaecati
                ducimus, deserunt perferendis officiis nostrum, enim animi velit asperiores veritatis nisi totam eos
                natus nulla ipsum expedita maiores eaque. At odit cumque autem natus saepe consectetur facilis sapiente
                vel! Eligendi, impedit et nesciunt eum voluptate vero?
            </p>
        </div>
    </div>
</section>

<!--blog-->
<section class="blog-section">
    <div class="container blog-container">
        <h2 class="section-title">
            Blog
        </h2>
        <?php 
            $homePosts = new WP_Query(array(
                'posts_per_page' => 3
            ));
            while ($homePosts->have_posts()) {
                $homePosts->the_post(); ?>
            <div class="blogs">
                <div class="blog-image image-1"> <?php the_post_thumbnail(); ?> </div>
                <div class="blog-review">
                <div class="blog-content">
                    <h4><?php the_title(); ?></h4>
                    <p> <?php echo wp_trim_words(get_the_content(), 20); ?> </p>
                    <a href=" <?php the_permalink(); ?> ">Read More</a>
                </div>
            </div>
        </div>
        <?php } wp_reset_postdata();
        ?>
    </div>
</section>

<!--blog-cta-->
<section class="cta">
    <div class="container cta-container">
        <a class="cta-blog-btn" href="<?php echo site_url('/blog') ?>">Read Every Story By Your Name</a>
    </div>
</section>

<!--contact-->
<section class="contact-section" id="contact">
    <div class="container">
        <h2 class="section-title">
            Contact Me
        </h2>
        <div class="contact-form">
            <div class="contact-left">
                <form action="">
                    <div class="input-row">
                        <div class="input-group">
                            <label for="">Name</label>
                            <input type="text" placeholder="Full Name" required>
                        </div>
                        <div class="input-group">
                            <label for="">Email</label>
                            <input type="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <label for="">Message</label>
                    <textarea name="message" id="message" rows="8" placeholder="Your Message..." required></textarea>
                    <button type="submit" class="form-button">Submit</button>
                </form>
            </div>
            <div class="contact-right">
                <div class="social-menu">
                    <a href=""> <i class="fa-brands fa-facebook"></i> Facebook </a>
                    <a href=""> <i class="fa-brands fa-instagram"></i> Instagram </a>
                    <a href=""> <i class="fa-brands fa-twitter"></i> Twitter </a>
                    <a href=""> <i class="fa-brands fa-linkedin-in"></i> linkedin </a>

                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>
