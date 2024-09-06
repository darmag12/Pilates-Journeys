<div class="header__top">
      <!-- Logo Starts Here -->
        <div id="logo-pilates" class="logo-pilates">
          <?php include get_stylesheet_directory() . "/resources/pilates-journey-logo.svg"; ?> 
        </div>
      <!-- Top Navigation Starts Here -->
      <div class="overlay" data-navContainer>
        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" data-closeNav>&times;</a>
        <nav class="topnav overlay-content" data-navItemsContainer>
          <a class="topnav__link" href="<?php echo site_url(); ?>">Home</a>
          <a class="topnav__link" href="#about">About</a>
          <a class="topnav__link" href="#pricing">Pricing</a>
          <a class="topnav__link" href="#classes">Classes</a>
          <a class="topnav__link" href="#blog">Blog</a>
          <!-- <a class="topnav__link" href="#">Retreats</a> -->
          <a class="topnav__link button button--secondary" href="#contact">Contact</a>
        </nav>
      </div>
      <div class="openbtn" data-openNav>
        <a href="javascript:void(0)">&#9776;</a>
      </div>
</div>