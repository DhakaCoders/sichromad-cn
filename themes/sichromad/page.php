<?php get_header(); ?>
<section class="sc-page-sec-wrp">
  <div class="container sc-block-bg">
    <div class="row">
      <div class="col-md-12">
        <div class="sc-content-wrp">
          <div class="breadcrumbs-wrp">
            <ul class="breadcrumbs clearfix">
              <li>
                <a class="fl-home-icon" href="#">home</a>
              </li>
              <li class="delim">
                <a href="javascript:void(0)">></a>
              </li>
              <li>
                <a href="#">page</a>
              </li>
              <li class="delim">
                <a href="javascript:void(0)">></a>
              </li>
              <li>
                <a href="#">subpage</a>
              </li>
            </ul>
          </div>
          <div class="sc-dsc-wrp">
            <h1>Pagebuilder field here, HTML Title</h1>
            <p>Paragraph text. This is a <strong>Strong text.</strong> This is a <a href="#">link tekst</a></p>
            <ul class="clearfix">
              <li>Listings</li>
            </ul>
            <h2>H2 title</h2>
            <h3>H3 Title</h3>
          </div>

          <div id="sc-form-wrp">
            <div class="sc-form-dsc">
              <h3>Contact form CSS</h3>
              <p>Laat uw gegevens achter voor het maken van een vrijbijvelde afspraak.</p>
            </div>
            <div class="wpforms-container">
              <form class="wpforms-form">
                <div class="wpforms-field-container">
                  <div class="wpforms-field yourFieldFull">
                    <input type="text" name="name" placeholder="Naam" required>
                  </div>
                  <div class="wpforms-field">
                    <input type="text" name="telefoon" placeholder="Telefoon nr." required>
                  </div>
                  
                  <div class="wpforms-field">
                    <input type="text" name="name" placeholder="Woonplaats" required>
                  </div>

                  <div class="wpforms-field yourFieldFull">
                    <input type="email" name="email" placeholder="E-mail adres" required>
                  </div>
                  <div class="wpforms-field wpforms-field-textarea">
                    <textarea name="message" placeholder="Eventuele opmerkingen"></textarea>
                  </div>

                </div><!-- end of .wpforms-field-container-->

                <div class="wpforms-submit-container">
                  <button type="submit" name="submit" class="wpforms-submit">Verstuur bericht</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>