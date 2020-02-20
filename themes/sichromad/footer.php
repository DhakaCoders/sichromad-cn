<?php 
  $logoObj = get_field('logo_footer', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }

  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
  $adres = get_field('address', 'options');
  $gmapsurl = get_field('google_maps', 'options');
  $e_mailadres = get_field('emailaddress', 'options');
  $fttelephone = get_field('telephone', 'options');
  $show_telefoon = $fttelephone['ftelephone'];
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $copyright_text = get_field('copyright_text', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';

?>
<footer class="footer-wrp">
  <div class="ftr-top-wrp">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="ftr-top-innr">
            <div class="ftr-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $logo_tag; ?>
              </a>
            </div>
            <div class="ftr-tp-btm-innr clearfix">
              <div class="ftr-tp-btm-info">
                <ul class="clearfix">
                  <?php if( !empty( $adres ) ) printf('<li><span>adres:</span><a href="%s">%s</a></li>', $gmaplink, $adres);  ?>
                  <li>
                    <?php if( !empty( $show_telefoon ) ) printf('<span class="phone">mobiel:</span><a href="tel:%s">%s</a><br>', $telefoon, $show_telefoon);  ?>
                    <?php if( !empty( $e_mailadres ) ) printf('<span class="email">e-mail:</span><a href="mailto:%s">%s</a>', $e_mailadres, $e_mailadres);  ?>
                  </li>
                </ul>
              </div>
              <div class="ftr-tp-btm-menu hide-sm">
                <?php 
                $ftmenuOptions = array( 
                    'theme_location' => 'cbv_copyright_menu', 
                    'menu_class' => 'clearfix',
                    'container' => 'copynav',
                    'container_class' => 'copynav'
                  );
                wp_nav_menu( $ftmenuOptions ); 
              ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="ftr-btm-wrp">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-btm-inr">
            <?php if( !empty( $copyright_text ) ) printf( '%s', $copyright_text); ?>  
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>