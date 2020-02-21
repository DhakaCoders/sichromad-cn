<?php get_header(); ?>
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
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>