<?php get_header(); ?>
<?php

$standaardbanner = get_field('bannerimage', HOMEID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/hm-banner-img.jpg';
?>

<section class="hm-banner-sec-wrp" style="background: url(<?php echo $standaardbanner; ?>);"></section>
<section class="sc-content-sec-wrp">
  <div class="container sc-block-bg">
    <div class="row">
      <div class="col-md-12">
        <div class="sc-content-wrp">
          <div class="breadcrumbs-wrp">
            <?php cbv_breadcrumbs(); ?>
          </div>
          <?php while( have_posts() ): the_post(); ?>
          <div class="sc-dsc-wrp">
            <?php the_content(); ?>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>