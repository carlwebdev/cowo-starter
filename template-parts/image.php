
<?php /* if ( !defined('ABSPATH')) exit; ?>
<?php echo wp_get_attachment_image( $post->ID, 'full' ); */ ?>


<?php if ( !defined('ABSPATH')) exit; ?>

<?php
// Check if the post has a featured image
if ( has_post_thumbnail() ) {
    // Display the featured image
    echo get_the_post_thumbnail( $post->ID, 'full' );
} else {
    // Display a placeholder image or message if no featured image is set
    echo '<img src="' . get_template_directory_uri() . '/path/to/placeholder.jpg" alt="Placeholder Image">';
}
?>