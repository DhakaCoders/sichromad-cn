<?php get_header(); ?>

<?php
$standaardbanner = get_field('bannerimage', get_the_ID());
if( !empty($standaardbanner) ):
?>
<section class="hm-banner-sec-wrp pageBanner">
  <img src="<?php echo $standaardbanner; ?>" alt="Page Banner">
</section>
<?php endif; ?>

<section class="sc-page-sec-wrp">
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