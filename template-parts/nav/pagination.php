<?php 
/*
 * Template Part: Pagination
 * 
 * Usage: get_template_part('template-parts/nav/pagination', null, ['query' => $query]);
 */

// Extract the query from args if passed via get_template_part()
$pagination_query = $args['query'] ?? null;

// If no query passed, use global query
if (!$pagination_query) {
    global $wp_query;
    $pagination_query = $wp_query;
}
?>
<div class="w_pagination">      
  <div class="pagination">
    <?php 
      echo paginate_links( array(
        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'total'        => $pagination_query->max_num_pages,
        'current'      => max( 1, get_query_var( 'paged' ) ),
        'format'       => '?paged=%#%',
        'show_all'     => false,
        'type'         => 'plain',
        'end_size'     => 2,
        'mid_size'     => 1,
        'prev_next'    => true,
        'prev_text'    => sprintf( '<i></i> %1$s', __( '←', 'text-domain' ) ), // Newer Posts
        'next_text'    => sprintf( '%1$s <i></i>', __( '→', 'text-domain' ) ), // Older Posts
        'add_args'     => false,
        'add_fragment' => '',
      ) );
    ?>
    
    <?php 

      /*
      $next_text  = '<img src="<?php bloginfo("template_url")?>/assets/img/icons/ui/svg/batch_2_Arrow.svg" />';
      */
      
      /*
      echo paginate_links( array(
        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'total'        => $query->max_num_pages,
        'current'      => max( 1, get_query_var( 'paged' ) ),
        'format'       => '?paged=%#%',
        'show_all'     => false,
        'type'         => 'plain',
        'end_size'     => 2,
        'mid_size'     => 1,
        'prev_next'    => true,
        // 'prev_text'    => sprintf( '<i></i> %1$s', __( 'Posteriores', 'text-domain' ) ), // Newer Posts
        'prev_text'    => sprintf( '<i></i> %1$s', __( '←', 'text-domain' ) ), // Newer Posts
       //  'next_text'    => sprintf( '%1$s <i></i>', __( 'Anteriores', 'text-domain' ) ), // Older Posts
        // 'next_text' => $next_text,
        // 'next_text'    => sprintf( '%1$s <i></i>', __( <img bloginfo('template_url').'/assets/img/icons/ui/svg/batch_2_Arrow.svg', 'text-domain' ) ), // Older Posts
        'next_text'    => sprintf( '%1$s <i></i>', __( '→', 'text-domain' ) ), // Older Posts
        'add_args'     => false,
        'add_fragment' => '',
      ) );
      */
    ?>

    <?php /*?><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/ui/svg/batch_2_Arrow.svg" /><?php */?>

  </div> <!-- /pagination -->  
</div> <!-- /w_pagination -->    