<?php 
get_header(); 
$pageID = get_option( 'page_for_posts' );
?>
<section class="sc-blog-content-sec-wrp">
  <div class="container sc-block-bg">
    <div class="row">
      <div class="col-sm-12">
        <div class="breadcrumbs-wrp">
         <?php cbv_breadcrumbs(); ?>
        </div>
        <div class="sc-blog-dsc-wrp">
          <h1><?php echo get_the_title($pageID); ?></h1>
          <?php 
             while(have_posts()): the_post();
             $thumb_tag = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'bloggrid');
             if( !empty($thumb_tag[0]) ){
              $bloggrid = $thumb_tag[0];
             }else{
              $bloggrid = THEME_URI.'/assets/images/dfpgrid.jpg';
             }
             
          ?> 
          <div class="sc-blog-dsc-innr clearfix">
            <div class="sc-blog-dsc-img">
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $bloggrid; ?>" alt="<?php the_title(); ?>"></a>
            </div>
            <div class="sc-blog-dsc">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <?php the_excerpt(); ?>...<a href="<?php the_permalink(); ?>">Read More >></a>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        <div class="sc-blog-pagination text-center">
         <?php
            global $wp_query;

            $big = 999999999; // need an unlikely integer
            $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

            echo paginate_links( array(
              'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'type'      => 'list',
              'prev_text' => __('«'),
              'next_text' => __('»'),
              'format'    => '?paged=%#%',
              'current'   => $current,
              'total'     => $wp_query->max_num_pages
            ) );
            ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>