<?php include("data.php"); ?>
<?php include("partials/header.php"); ?>
  
    <!-- HERO -->
    <section class="intro">
      <div class="container">
        <p class="intro__text">
          <?php echo $hero[0] ?>
        </p>
        <h1 class="intro__title">
          <?php echo $hero[1] ?>
        </h1>
      </div>
    </section>

    <!-- MAIN -->
    <main class="main container row">
      <section class="primary-content">
        <h2 class="section-title">
          <?php echo $main[0] ?>
        </h2>
        <p>
          <?php echo $main[1] ?>
        </p>
        <p>
          <?php echo $main[2] ?>
        </p>
        <p>
          <?php echo $main[3] ?>
        </p>
        <img src="<?php echo $mainSvg ?>" alt="HTML CSS Illustration" />
      </section>
      <aside class="sidebar">
        <div class="box">
          <h2 class="sidebar-title">
            <?php echo $aside1[0] ?>
          </h2>
          <p>
            <?php echo $aside1[1] ?>
          </p>
        </div>
        <div class="box">
          <h2 class="sidebar-title">
            <?php echo $aside2[0] ?>
          </h2>
          <p>
            <?php echo $aside2[1] ?>
          </p>
        </div>
        <div class="box">
          <h2 class="sidebar-title">
            <?php echo $aside3[0] ?>
          </h2>
          <p>
            <?php echo $aside3[1] ?>
          </p>
        </div>
      </aside>
    </main>

    <!-- SECTIONS -->
    <section class="section-two">
      <div class="container">
        <h2 class="section-title section-title--dark">
          <?php echo $section2[0] ?>
        </h2>
        <div class="row">
          <div class="col">
            <p>
              <?php echo $section2[1] ?>
            </p>
          </div>
          <div class="col">
            <p>
              <?php echo $section2[2] ?>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-three">
      <div class="container row align-center">
        <div class="col">
          <h2 class="section-title">
            <?php echo $section3[0] ?>
          </h2>
          <p>
            <?php echo $section3[1] ?>
          </p>
        </div>
        <div class="col">
          <img
            src="<?php echo $section3Img ?>"
            alt="QuickBites"
          />
        </div>
      </div>
    </section>

    <section class="section-four">
      <div class="container row align-center">
        <div class="col max-height">
          <img
            src="<?php echo $section4Img ?>"
            alt="Mapple Clothing"
          />
        </div>
        <div class="col">
          <h2 class="section-title">
            <?php echo $section4[0] ?>
          </h2>
          <p>
            <?php echo $section4[1] ?>
          </p>
        </div>
      </div>
    </section>

<?php include("partials/footer.php"); ?>
