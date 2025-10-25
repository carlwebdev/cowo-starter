<?php
/**
 * Front Page Template
 *
 * This template displays the site's front page.
 *
 * @package YourThemeName
 */

get_header(); // Includes the header.php template
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!-- Hero Section -->
        <section class="hero-section">
            <h1>Welcome to My Website</h1>
            <p>Your introduction or tagline goes here.</p>
            <a href="#about" class="btn btn-primary">Learn More</a>
        </section>

        <!-- About Section -->
        <section id="about" class="about-section">
            <h2>About Us</h2>
            <p>Provide a brief description about your company or website.</p>
        </section>

        <!-- Features Section -->
        <section class="features-section">
            <h2>Our Features</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <h3>Feature One</h3>
                    <p>Detail about feature one.</p>
                </div>
                <div class="feature-item">
                    <h3>Feature Two</h3>
                    <p>Detail about feature two.</p>
                </div>
                <div class="feature-item">
                    <h3>Feature Three</h3>
                    <p>Detail about feature three.</p>
                </div>
            </div>
        </section>

        <!-- Latest Posts Section -->
        <section class="latest-posts">
            <h2>Latest Posts</h2>
            <?php
            // Custom query to fetch the latest 3 posts
            $recent_posts = new WP_Query( array(
                'posts_per_page' => 3,
            ) );

            if ( $recent_posts->have_posts() ) :
                while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="entry-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset the global post object
            else :
            ?>
                <p>No recent posts available.</p>
            <?php endif; ?>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar(); // Includes the sidebar.php template
get_footer();  // Includes the footer.php template
?>
